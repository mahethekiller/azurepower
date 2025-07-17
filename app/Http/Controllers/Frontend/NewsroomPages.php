<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Event;
use Illuminate\Http\Request;

class NewsroomPages extends Controller
{
    public function index()
    {
        $documents = Document::where('document_type_id', 2)  //Press release
            ->orderBy('doc_date', 'desc')
            ->get();

        // Pass the arrays to the view
        return view('frontend.newsroom.index', [
            'pageTitle'       => 'Newsroom',
            'pageDescription' => 'Newsroom',
            'pageScript'      => 'newsroom',
            'documents'      => $documents,
        ]);

    }
}
