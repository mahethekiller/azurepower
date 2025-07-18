<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::with('documentType')->latest()->paginate(10);

        $documentTypes = DocumentType::all(); // ✅ fetch types

        return view('admin.documents.index', compact('documents', 'documentTypes'));
    }

    public function show($id)
    {
        // Optional: return a view, JSON, or redirect
        return redirect()->route('admin.documents.index');
    }

    public function typeDocuments($id)
    {
        if (request()->ajax()) {
            $documents = Document::where('document_type_id', $id)->latest();

            return DataTables::of($documents)
                ->addColumn('link', function ($doc) {
                    return $doc->link
                    ? '<a href="' . $doc->link . '" target="_blank">' . $doc->link . '</a>'
                    : 'N/A';
                })
                ->addColumn('file', function ($doc) {
                    return $doc->file
                    ? '<a class="btn btn-sm btn-info" href="' . asset('storage/' . $doc->file) . '" target="_blank">View</a>'
                    : 'N/A';
                })
                ->addColumn('action', function ($doc) {
                    $editUrl   = route('admin.documents.edit', $doc->id);
                    $deleteUrl = route('admin.documents.destroy', $doc->id);
                    return '
                    <a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                    <form action="' . $deleteUrl . '" method="POST" class="d-inline">
                        ' . csrf_field() . method_field('DELETE') . '
                        <button onclick="return confirm(\'Delete this document?\')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                ';
                })
                ->editColumn('doc_date', function ($doc) {
                    // Send formatted date for display
                    return $doc->doc_date ? $doc->doc_date->format('d-m-Y') : '';
                })
                ->rawColumns(['link', 'file', 'action']) // Allow HTML
                ->make(true);
        }

        $documentType = DocumentType::findOrFail($id);
        return view('admin.documents.type_documents', [
            'documentType' => $documentType,
            'pageScript'   => 'documents',
        ]);
    }

    public function create($document_type_id)
    {
        $documentType = DocumentType::findOrFail($document_type_id);

        return view('admin.documents.form', [
            'documentType' => $documentType,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|max:500',
            'doc_date' => 'required|date',
            'file'     => 'nullable|mimes:pdf,doc,docx,jpg,jpeg,png',
            'link'     => 'nullable|url',

        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $fileName     = 'document-file-' . time() . '.' . $uploadedFile->getClientOriginalExtension();
            $filePath     = $uploadedFile->storeAs('documents', $fileName, 'public');
        }

        Document::create([
            'title'            => $request->title,
            'doc_date'         => $request->doc_date,
            'document_type_id' => $request->document_type_id, // ✅ save type
            'file'             => $filePath ?? null,
            'link'             => $request->link,
        ]);
        return redirect()->back()->with('success', 'Document Added successfully.');
        // return redirect()->route('admin.documents.index')->with('success', 'Document created successfully.');
    }

    public function edit(Document $document)
    {
        $types        = DocumentType::all();
        $documentType = $document->documentType; // Get the type of the current document

        return view('admin.documents.form', [
            'document'     => $document,
            'types'        => $types,
            'documentType' => $documentType,
        ]);
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'title'            => 'required|string|max:500',
            'doc_date'         => 'required|date',
            'document_type_id' => 'required|exists:document_types,id',
            'file'             => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:10240',
            'link'             => 'nullable|url',
        ]);

        $data = $request->only(['title', 'doc_date', 'document_type_id', 'link']);

// If a new file is uploaded
        if ($request->hasFile('file')) {
            $fileName = 'document-file-' . time() . '.' . $request->file('file')->getClientOriginalExtension();
            $filePath = $request->file('file')->storeAs('documents', $fileName, 'public');

            // Optional: delete old file
            if ($document->file && \Storage::disk('public')->exists($document->file)) {
                \Storage::disk('public')->delete($document->file);
            }

            $data['file'] = $filePath;
        }

        $document->update($data);

        return redirect()->back()->with('success', 'Document updated successfully.');
    }

    public function destroy(Document $document)
    {
        if ($document->file && Storage::disk('public')->exists($document->file)) {
            Storage::disk('public')->delete($document->file);
        }

        $document->delete();

        // return redirect()->route('admin.documents.index')->with('success', 'Document deleted successfully.');
        return redirect()->back()->with('success', 'Document Deleted successfully.');
    }

    public function import(Request $request)
    {
        // Validate file upload
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('csv_file');

        // Open and read CSV
        if (($handle = fopen($file, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ','); // Read header row

            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                Document::create([
                    'document_type_id' => $data[0],
                    'title'            => trim($data[1]),
                    'doc_date'         => Carbon::createFromFormat('d-m-Y', $data[2])->format('Y-m-d'), // Convert date
                    'file'             => 'documents/' . mb_convert_encoding(trim($data[3]), 'UTF-8', 'UTF-8'),
                ]);
            }

            fclose($handle);
        }

        return back()->with('success', 'CSV Imported Successfully!');
    }

}
