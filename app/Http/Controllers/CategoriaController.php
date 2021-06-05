<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate();

        return view('categoria.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $categoria = new Categoria;
        if ($request->hasFile('imagenes')) {
            $file = $request->file('imagenes');
            $destinationPath ='imagenes/categorias/';
            $filename= time() . '-' .  $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenes')->move($destinationPath, $filename);
            $categoria->imagenes=  $destinationPath . $filename; 
        }
        $categoria->nombre_categoria=  $request->nombre_categoria; 
        $categoria->descripcion=  $request->descripcion; 
        $categoria->activo=  $request->activo; 
        $categoria->save();


        
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria = Categoria::find($categoria->id);
        if ($request->hasFile('imagenes')) {
            $file = $request->file('imagenes');
            $destinationPath ='imagenes/categorias/';
            $filename= time() . '-' .  $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenes')->move($destinationPath, $filename);
            $categoria->imagenes=  $destinationPath . $filename; 
        }
        $categoria->nombre_categoria=  $request->nombre_categoria; 
        $categoria->descripcion=  $request->descripcion; 
        $categoria->activo=  $request->activo; 
        $categoria->save();

        


        
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creada con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $destinationPath ='imagenes/categorias/';
        
        $categoria = Categoria::find($id);
        
        Storage::delete($destinationPath);
        
        $categoria = Categoria::find($id)->delete();

        return redirect()->route('categorias.index')
            ->with('danger', 'Categoria eliminada con exito.');
    }
}