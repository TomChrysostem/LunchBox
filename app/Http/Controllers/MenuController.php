<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::latest()->paginate(5);
        return view('admin.menus.index',compact('menus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return $request;
        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,jpg,png,gif|max:1014',
                ]);
                $extension = $request->image->extension();
                $randomName = rand().".".$extension;
                $request->image->storeAs('/public/img/',$randomName);
                
        }
        $menu = new Menu();
        $menu->menu = $request->input('menu');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->date = $request->input('date');
        $menu->kcal = $request->input('kcal');
        $menu->menu_type = $request->input('menu_type');
        $menu->dish_type = $request->input('dish_type');
        $menu->image = $randomName;
        $menu->save();
        }
        return redirect()->route('menus.index')->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('admin.menus.show',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,jpg,png,gif|max:1014',
                ]);
                $extension = $request->image->extension();
                $randomName = rand().".".$extension;
                $request->image->storeAs('/public/img/',$randomName);
                $menu->image = $randomName;
                
            }
        }
        $menu->menu = $request->input('menu');
        $menu->description = $request->input('description');
        $menu->price = $request->input('price');
        $menu->date = $request->input('date');
        $menu->kcal = $request->input('kcal');
        $menu->menu_type = $request->input('menu_type');
        $menu->dish_type = $request->input('dish_type');
        $menu->save();
        return redirect()->route('menus.index')
                        ->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')
                        ->with('success','Menu deleted successfully');
    }
}
