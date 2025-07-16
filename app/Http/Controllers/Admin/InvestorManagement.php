<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvestorManagement extends Controller
{
    //
    // public function index()
    // {
    //     return view('admin.investor.index');
    // }

    public function events()
    {
        return view('admin.investor.events');
    }

    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.investor.events.index', compact('events'));
    }

    public function create()
    {
        return view(
            'admin.investor.events.create',
            ['pageScript' => 'events', 'pageTitle' => 'Create Event', 'pageDescription' => 'Create Event']
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_date'    => 'required|date',
            'subject'       => 'required|string|max:255',
            'button_text.*' => 'required|string|max:255',
            'type.*'        => 'required|in:link,file',
            'link.*'        => 'nullable|url|required_if:type.*,link',
            'file.*'        => 'nullable|file|required_if:type.*,file|mimes:pdf,doc,docx,jpg,png,mp3|max:11048',
        ], [
            'event_date.required' => 'Event date is required.',
            'event_date.date'     => 'Event date must be a valid date.',
            'subject.required'    => 'Subject is required.',
            'subject.string'      => 'Subject must be a string.',
            'subject.max'         => 'Subject may not be greater than 255 characters.',
            'button_text.*.required' => 'Button text is required.',
            'button_text.*.string'   => 'Button text must be a string.',
            'button_text.*.max'      => 'Button text may not be greater than 255 characters.',
            'type.*.required'     => 'Type is required.',
            'type.*.in'           => 'Type must be either link or file.',
            'link.*.url'          => 'Each link must be a valid URL.',
            'link.*.required_if'  => 'A link is required when type is link.',
            'file.*.file'         => 'Each file must be a valid file.',
            'file.*.mimes'        => 'Each file must be a file of type: pdf, doc, docx, jpg, png, mp3.',
            'file.*.max'          => 'Each file may not be greater than 11048 kilobytes.',
        ]);

        // echo "<pre>";
        // print_r($request->all());
        // exit;

        // Save Event
        $event = Event::create([
            'event_date' => $request->event_date,
            'subject'    => $request->subject,
        ]);

        // Save Event Items
        $linkIndex = 0;
        $fileIndex = 0;

        foreach ($request->button_text as $index => $buttonText) {
            $type = $request->type[$index];
            $link = null;
            $file = null;

            if ($type === 'link') {
                // Get link from current linkIndex
                $link = $request->link[$linkIndex] ?? null;
                $linkIndex++;
            }

            if ($type === 'file') {
                // Get file from current fileIndex
                if (isset($request->file('file')[$fileIndex])) {
                    $uploadedFile = $request->file('file')[$fileIndex];
                    $file         = $uploadedFile->storeAs(
                        'investor/events',
                        'event-file-' .Str::slug($buttonText) . '-' . time() . '.' . $uploadedFile->getClientOriginalExtension(),
                        'public'
                    );

                }
                $fileIndex++;
            }

            EventItem::create([
                'event_id'    => $event->id,
                'button_text' => $buttonText,
                'type'        => $type,
                'link'        => $link,
                'file'        => $file,
            ]);
        }

        return redirect()->back()->with('success', 'Event created successfully!');
    }

    public function edit(Event $event)
    {
        return view(
            'admin.investor.events.edit',
            ['event' => $event, 'pageScript' => 'events', 'pageDescription' => 'Edit Event', 'pageTitle' => 'Edit Event']
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_date'    => 'required|date',
            'subject'       => 'required|string|max:255',
            'button_text.*' => 'required|string|max:255',
            'type.*'        => 'required|in:link,file',
            'link'          => 'array',
            'link.*'        => 'nullable|url|required_if:type.*,link',
            'file'          => 'array',
            'file.*'        => 'nullable|file|mimes:pdf,doc,docx,jpg,png,mp3|max:11048',
        ], [
            'event_date.required' => 'Event date is required.',
            'event_date.date'     => 'Event date must be a valid date.',
            'subject.required'    => 'Subject is required.',
            'subject.string'      => 'Subject must be a string.',
            'subject.max'         => 'Subject may not be greater than 255 characters.',
            'button_text.*.required' => 'Button text is required.',
            'button_text.*.string'   => 'Button text must be a string.',
            'button_text.*.max'      => 'Button text may not be greater than 255 characters.',
            'type.*.required'     => 'Type is required.',
            'type.*.in'           => 'Type must be either link or file.',
            'link.*.url'          => 'Each link must be a valid URL.',
            'link.*.required_if'  => 'A link is required when type is link.',
            'file.*.file'         => 'Each file must be a valid file.',
            'file.*.mimes'        => 'Each file must be a file of type: pdf, doc, docx, jpg, png, mp3.',
            'file.*.max'          => 'Each file may not be greater than 11048 kilobytes.',
        ]);

        $event = Event::findOrFail($id);
        $event->update([
            'event_date' => $request->event_date,
            'subject'    => $request->subject,
        ]);

        // Delete existing items and recreate
        $event->items()->delete();

        $linkIndex = 0;
        $fileIndex = 0;

        foreach ($request->button_text as $index => $buttonText) {
            $type = $request->type[$index];
            $link = null;
            $file = null;

            if ($type === 'link') {
                $link = $request->link[$linkIndex] ?? null;
                $linkIndex++;
            }

            if ($type === 'file') {
                if (isset($request->file('file')[$fileIndex])) {
                    $uploadedFile = $request->file('file')[$fileIndex];
                    $file         = $uploadedFile->storeAs(
                        'investor/events',
                        'event-file-' .Str::slug($buttonText) . '-' . time() . '.' . $uploadedFile->getClientOriginalExtension(),
                        'public'
                    );
                } else {
                    // Keep existing file if no new upload
                    $file = $request->existing_file[$fileIndex] ?? null;
                }
                $fileIndex++;
            }

            $event->items()->create([
                'button_text' => $buttonText,
                'type'        => $type,
                'link'        => $link,
                'file'        => $file,
            ]);
        }

        return redirect()->back()->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        if ($event->file) {
            Storage::delete($event->file);
        }
        $event->delete();
        return redirect()->route('admin.investor.events.index')->with('success', 'Event deleted successfully.');
    }

}
