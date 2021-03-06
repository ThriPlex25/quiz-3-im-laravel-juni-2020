<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function image(){
        return view('image');
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        // ArtikelModel::create([
        //     'slug'=>Str::slug($request->title),
        // ])
        $new_artikel = ArtikelModel::save($request->all());
        return redirect('/artikel');
    }

    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }
    
    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikel'));
    }
    
    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request){
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
