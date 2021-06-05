@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordene') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ordenes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Cliente</th>
										<th>Numero Orden</th>
										<th>Id Pagos</th>
										<th>Fecha De Envio</th>
										<th>Estado Transacción</th>
										<th>Pagado</th>
										<th>Fecha De Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenes as $ordene)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ordene->id_cliente }}</td>
											<td>{{ $ordene->Numero_Orden }}</td>
											<td>{{ $ordene->id_pagos }}</td>
											<td>{{ $ordene->Fecha_de_envio }}</td>
											<td>{{ $ordene->Estado_transacción }}</td>
											<td>{{ $ordene->Pagado }}</td>
											<td>{{ $ordene->Fecha_de_pago }}</td>

                                            <td>
                                                <form action="{{ route('ordenes.destroy',$ordene->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ordenes.show',$ordene->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ordenes.edit',$ordene->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ordenes->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

