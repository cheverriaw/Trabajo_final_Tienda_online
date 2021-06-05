@extends('layouts.app');


@section('contenido')
    <!--main area-->
	<main id="main" class="main-site">
    <ul class="list-cate">
        

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <form method="POST" action="{{ route('clientes.store') }}"  role="form" enctype="multipart/form-data">
                 @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Apellido</label>
                    <input id="Apellido" name="Apellido" type="text" class="form-control" tabindex="2">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Clase </label>
                    <input id="Clase " name="Clase " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="Direccion" name="Direccion" type="text"  class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Estado </label>
                    <input id="Estado " name="Estado " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pais</label>
                    <input id="Pais" name="Pais" type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono  </label>
                    <input id="Telefono  " name="Telefono  " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email </label>
                    <input id="Email  " name="Email " type="text"  class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password  </label>
                    <input id="Password  " name="Password  " type="text" class="form-control" tabindex="3">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Targeta_Credito </label>
                    <input id="Targeta_Credito  " name="Targeta_Credito " type="text"  class="form-control" tabindex="3">
                </div>
                <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4" > Guardar</button>
            </form>
            
        </div><!--end container-->

    </main>
<!--main area-->


@endsection