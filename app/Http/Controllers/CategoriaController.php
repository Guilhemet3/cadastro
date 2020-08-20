<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias =  Categoria::all();
        return view('categorias', compact('categorias'));
    }

    public function create()
    {
        return view('novacategoria');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        Categoria::create($dados);

        return redirect()->route('categorias.index');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('editarcategoria', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        
        $categorias = $request->all();
        Categoria::find($id)->update($categorias);
        
        return redirect()->route('categorias.index');
        
    }

    public function destroy($id)
    {
        Categoria::find($id)->delete();

        return redirect()->route('categorias.index');
    }

    public function indexJson(){
        $categorias = Categoria::all();
        return json_encode($categorias);
    }
}
