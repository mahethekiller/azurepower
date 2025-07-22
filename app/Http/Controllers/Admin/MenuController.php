<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $parents = Menu::whereNull('parent_id')->get(); // For dropdown
        return view('admin.menus.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'route' => 'nullable|string',
            'url' => 'nullable|url',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer',
        ]);

        Menu::create($validated);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::whereNull('parent_id')->where('id', '!=', $menu->id)->get();
        return view('admin.menus.create', compact('menu', 'parents'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'route' => 'nullable|string',
            'url' => 'nullable|url',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer',
        ]);

        $menu->update($validated);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu deleted successfully.');
    }
}
