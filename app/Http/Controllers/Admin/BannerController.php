<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Menu;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::with('menu')->latest()->get();
        return view('admin.banner.index', [
            'banners'         => $banners,
            'pageTitle'       => 'Banners',
            'pageDescription' => 'Banners',

        ]);
    }

    public function create()
    {
        $pages = Menu::pluck('title', 'id');
        return view('admin.banner.form',
            [
                'pageTitle'       => 'Banners',
                'pageDescription' => 'Banners',
                'pages'           => $pages,
            ]
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'        => 'required|image',
            'heading'      => 'required|string|max:255',
            'description'  => 'nullable|string',
            'button1_text' => 'nullable|string|max:255',
            'button1_link' => 'nullable|url',
            'button2_text' => 'nullable|string|max:255',
            'button2_link' => 'nullable|url',
            'page'         => 'nullable|exists:menus,id',
            'image_alt'    => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        Banner::create($validated);

        return redirect()->route('admin.banner.index')->with('success', 'banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        $pages = Menu::pluck('title', 'id');
        return view('admin.banner.form',
            [
                'banner'          => $banner,
                'pageTitle'       => 'Banners',
                'pageDescription' => 'Banners',
                'pages'           => $pages,
            ]
        );
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'image'        => 'nullable|image',
            'heading'      => 'required|string|max:255',
            'description'  => 'nullable|string',
            'button1_text' => 'nullable|string|max:255',
            'button1_link' => 'nullable|url',
            'button2_text' => 'nullable|string|max:255',
            'button2_link' => 'nullable|url',
            'page'         => 'nullable|exists:menus,id',
            'image_alt'    => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($validated);

        return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Banner deleted successfully.');
    }
}
