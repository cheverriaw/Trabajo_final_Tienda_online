<?php

namespace App\Http\Controllers;

use App\Models\Detallepedido;
use App\Models\Ordene;
use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class DetallepedidoController
 * @package App\Http\Controllers
 */
class DetallepedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallepedidos = Detallepedido::paginate();
        $productos = Producto::all();
        $productos = json_decode($productos);
        $ordenes = Ordene::all();
        $ordenes = json_decode($ordenes);
        return view('detallepedido.index', compact('detallepedidos','productos','ordenes'))
            ->with('i', (request()->input('page', 1) - 1) * $detallepedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        $productos = Producto::all();
        $productos = json_decode($productos);
        $ordenes = Ordene::all();
        $ordenes = json_decode($ordenes);
        $detallepedido = new Detallepedido();
        return view('detallepedido.create', compact('detallepedido', 'productos', 'ordenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detallepedido::$rules);

        $detallepedido = Detallepedido::create($request->all());

        return redirect()->route('detallepedidos.index')
            ->with('success', 'Detallepedido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $detallepedido =  Detallepedido::find($id);
        $productos = Producto::all();
        $productos = json_decode($productos);
        $ordenes = Ordene::all();
        $ordenes = json_decode($ordenes);
       
        return view('detallepedido.show', compact('detallepedido', 'productos', 'ordenes'));

        

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallepedido =  Detallepedido::find($id);
        $productos = Producto::all();
        $productos = json_decode($productos);
        $ordenes = Ordene::all();
        $ordenes = json_decode($ordenes);
       
        return view('detallepedido.edit', compact('detallepedido', 'productos', 'ordenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detallepedido $detallepedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallepedido $detallepedido)
    {
        request()->validate(Detallepedido::$rules);

        $detallepedido->update($request->all());

        return redirect()->route('detallepedidos.index')
            ->with('success', 'Detallepedido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallepedido = Detallepedido::find($id)->delete();

        return redirect()->route('detallepedidos.index')
            ->with('success', 'Detallepedido deleted successfully');
    }
}
