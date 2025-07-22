<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::with('menu')->get();
        return view('admin.slider.index', compact('slides'));
    }

    public function create()
    {
        $pages = Menu::pluck('title', 'id');
        return view('admin.slider.form', compact('pages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'         => 'required|image',
            'heading'       => 'required|string|max:255',
            'description'   => 'nullable|string',
            'button1_text'  => 'nullable|string|max:255',
            'button1_link'  => 'nullable|url',
            'button2_text'  => 'nullable|string|max:255',
            'button2_link'  => 'nullable|url',
            'page'          => 'nullable|exists:menus,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('slides', 'public');
        }

        Slide::create($validated);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully.');
    }

    public function edit(Slide $slide)
    {
        $pages = Menu::pluck('title', 'id');
        return view('admin.slider.form', compact('slide', 'pages'));
    }

    public function update(Request $request, Slide $slide)
    {
        $validated = $request->validate([
            'image'         => 'nullable|image',
            'heading'       => 'required|string|max:255',
            'description'   => 'nullable|string',
            'button1_text'  => 'nullable|string|max:255',
            'button1_link'  => 'nullable|url',
            'button2_text'  => 'nullable|string|max:255',
            'button2_link'  => 'nullable|url',
            'page'          => 'nullable|exists:menus,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('slides', 'public');
        }

        $slide->update($validated);

        return redirect()->route('admin.slides.index')->with('success', 'Slide updated successfully.');
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted successfully.');
    }
}
