<?php

namespace App\Http\Controllers;

use App\Models\Ordene;
use App\Models\Pago;
use App\Models\Cliente;
use Illuminate\Http\Request;

/**
 * Class OrdeneController
 * @package App\Http\Controllers
 */
class OrdeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Ordene::paginate();
        $clientes = Cliente::all();
        $clientes = json_decode($clientes);
        $pagos = Pago::all();
        $pagos = json_decode($pagos);
        return view('ordene.index', compact('ordenes','clientes','pagos'))
            ->with('i', (request()->input('page', 1) - 1) * $ordenes->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $clientes = Cliente::all();
        $clientes = json_decode($clientes);
        $pagos = Pago::all();
        $pagos = json_decode($pagos);
        $ordene = new Ordene();
        return view('ordene.create', compact('ordene', 'clientes', 'pagos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ordene::$rules);

        $ordene = Ordene::create($request->all());

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordene = Ordene::find($id);
        $clientes = Cliente::all();
        $clientes = json_decode($clientes);
        $pagos = Pago::all();
        $pagos = json_decode($pagos);
      

        return view('ordene.show', compact('ordene', 'clientes', 'pagos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordene = Ordene::find($id);
        $clientes = Cliente::all();
        $clientes = json_decode($clientes);
        $pagos = Pago::all();
        $pagos = json_decode($pagos);
      

        return view('ordene.edit', compact('ordene', 'clientes', 'pagos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ordene $ordene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordene $ordene)
    {
        request()->validate(Ordene::$rules);

        $ordene->update($request->all());

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordene = Ordene::find($id)->delete();

        return redirect()->route('ordenes.index')
            ->with('success', 'Ordene deleted successfully');
    }
}
