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
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Producto</th>
										<th>Descripcion Producto</th>
										<th>Id Categorias</th>
										<th>Id Proveedores</th>
										<th>Precio Unitario</th>
										<th>Calidad Unidad</th>
										<th>Talla Disponible</th>
										<th>Colores Disponible</th>
										<th>Tamano</th>
										<th>Color</th>
										<th>Peso Unidad</th>
										<th>Unidad Stock</th>
										<th>Unidad Orden</th>
										<th>Producto Disponible</th>
										<th>Descuento Disponible</th>
										<th>Orden Actual</th>
										<th>Imagenes</th>
										<th>Clasificacion</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->nombre_producto }}</td>
											<td>{{ $producto->descripcion_producto }}</td>
											<td>{{ $producto->id_categorias }}</td>
											<td>{{ $producto->id_proveedores }}</td>
											<td>{{ $producto->precio_unitario }}</td>
											<td>{{ $producto->calidad_unidad }}</td>
											<td>{{ $producto->talla_disponible }}</td>
											<td>{{ $producto->colores_disponible }}</td>
											<td>{{ $producto->tamano }}</td>
											<td>{{ $producto->color }}</td>
											<td>{{ $producto->peso_unidad }}</td>
											<td>{{ $producto->unidad_Stock }}</td>
											<td>{{ $producto->unidad_orden }}</td>
											<td>{{ $producto->producto_disponible }}</td>
											<td>{{ $producto->descuento_disponible }}</td>
											<td>{{ $producto->orden_actual }}</td>
											<td>
                                                <img src="{{ asset($producto->imagenes) }}" alt="{{ $producto->nombre_producto }}" class="img-fluid" width="90px">
                                            
                                            </td>
											<td>{{ $producto->clasificacion }}</td>
											<td>{{ $producto->nota }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $productos->links() !!}
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




