<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.menus.index',[
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('menu-images');
        $validatedData =  $request->validate([
            'nama'=> 'required',
            'category_id'=> 'required',
            'harga'=> 'required',
            'image'=>'image|file|max:1024',
            'detail'=> 'required'
        ]);



        $validatedData['image'] =$request->file('image')->store('menu-images');

        $validatedData['excerpt'] =Str::limit($request->detail, 20,);
        
        Menu::create($validatedData);

        return redirect('/dashboard/menus')->with('success','Menu Berhasil Ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        // return $menu;
        return view('dashboard.menus.show',[
            'menu' =>$menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.menus.edit',[
            'menu'=> $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $validatedData =  $request->validate([
            'nama'=> 'required',
            'category_id'=> 'required',
            'harga'=> 'required',
            'detail'=> 'required'
        ]);

        $validatedData['excerpt'] =Str::limit($request->detail, 20,);

        Menu::where('id',$menu->id)
                ->update($validatedData);

        return redirect('/dashboard/menus')->with('success','Menu Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy($menu->id);

        return redirect('/dashboard/menus')->with('success','Menu Berhasil Dihapus');
    }
}
