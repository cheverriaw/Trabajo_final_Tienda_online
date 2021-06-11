<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        return view('producto.index', compact('productos','categorias','proveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        $producto = new Producto();
        return view('producto.create', compact('producto', 'categorias', 'proveedores'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        
        if ($request->hasFile('imagenes')) {
            $file = $request->file('imagenes');
            $destinationPath ='imagenes/categorias/';
            $filename= time() . '-' .  $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenes')->move($destinationPath, $filename);
            $producto->imagenes=  $destinationPath . $filename; 
        }
       
      
        $producto->nombre_producto=  $request->nombre_producto; 
        $producto->descripcion_producto=  $request->descripcion_producto; 
        $producto->id_categorias=  $request->id_categorias; 
        $producto->id_proveedores=  $request->id_proveedores; 
        $producto->precio_unitario=  $request->precio_unitario; 
        $producto->calidad_unidad=  $request->calidad_unidad; 
        $producto->talla_disponible=  $request->talla_disponible; 
        $producto->colores_disponible=  $request->colores_disponible; 
        $producto->tamano=  $request->tamano; 
        $producto->color=  $request->color; 
        $producto->peso_unidad=  $request->peso_unidad; 
        $producto->unidad_Stock=  $request->unidad_Stock; 
        $producto->unidad_orden=  $request->unidad_orden; 
        $producto->producto_disponible=  $request->producto_disponible; 
        $producto->descuento_disponible=  $request->descuento_disponible; 
        $producto->orden_actual=  $request->orden_actual; 
        $producto->clasificacion=  $request->clasificacion; 
        $producto->nota=  $request->nota; 
        $producto->save();
        
        return redirect()->route('productos.index')
            ->with('success', 'Producto creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        return view('producto.show', compact('producto', 'categorias', 'proveedores'));
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);

        return view('producto.edit', compact('producto', 'categorias', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto = Producto::find($producto->id);
        
        if ($request->hasFile('imagenes')) {
            $file = $request->file('imagenes');
            $destinationPath ='imagenes/categorias/';
            $filename= time() . '-' .  $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenes')->move($destinationPath, $filename);
            $producto->imagenes=  $destinationPath . $filename; 
        }
       
      
        $producto->nombre_producto=  $request->nombre_producto; 
        $producto->descripcion_producto=  $request->descripcion_producto; 
        $producto->id_categorias=  $request->id_categorias; 
        $producto->id_proveedores=  $request->id_proveedores; 
        $producto->precio_unitario=  $request->precio_unitario; 
        $producto->calidad_unidad=  $request->calidad_unidad; 
        $producto->talla_disponible=  $request->talla_disponible; 
        $producto->colores_disponible=  $request->colores_disponible; 
        $producto->tamano=  $request->tamano; 
        $producto->color=  $request->color; 
        $producto->peso_unidad=  $request->peso_unidad; 
        $producto->unidad_Stock=  $request->unidad_Stock; 
        $producto->unidad_orden=  $request->unidad_orden; 
        $producto->producto_disponible=  $request->producto_disponible; 
        $producto->descuento_disponible=  $request->descuento_disponible; 
        $producto->orden_actual=  $request->orden_actual; 
        $producto->clasificacion=  $request->clasificacion; 
        $producto->nota=  $request->nota; 
        $producto->save();
        
        return redirect()->route('productos.index')
            ->with('success', 'Producto creada con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $destinationPath ='imagenes/categorias/';
        
        $producto = Producto::find($id);
        
        Storage::delete($destinationPath);
        
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('danger', 'Categoria eliminada con exito.');
    }
}