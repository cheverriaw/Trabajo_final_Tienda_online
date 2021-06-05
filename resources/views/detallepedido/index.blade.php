@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detallepedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detallepedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Productos</th>
										<th>Id Ordenes</th>
										<th>Numero Orden</th>
										<th>Precio</th>
										<th>Calidad</th>
										<th>Descuento</th>
										<th>Total</th>
										<th>Tamano</th>
										<th>Color</th>
										<th>Fecha Envio</th>
										<th>Order Detalle Id</th>
										<th>Fecha De Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallepedidos as $detallepedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallepedido->id_productos }}</td>
											<td>{{ $detallepedido->id_ordenes }}</td>
											<td>{{ $detallepedido->Numero_orden }}</td>
											<td>{{ $detallepedido->Precio }}</td>
											<td>{{ $detallepedido->Calidad }}</td>
											<td>{{ $detallepedido->Descuento }}</td>
											<td>{{ $detallepedido->Total }}</td>
											<td>{{ $detallepedido->Tamano }}</td>
											<td>{{ $detallepedido->Color }}</td>
											<td>{{ $detallepedido->Fecha_envio }}</td>
											<td>{{ $detallepedido->Order_Detalle_id }}</td>
											<td>{{ $detallepedido->Fecha_de_pago }}</td>

                                            <td>
                                                <form action="{{ route('detallepedidos.destroy',$detallepedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detallepedidos.show',$detallepedido->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detallepedidos.edit',$detallepedido->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detallepedidos->links() !!}
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

