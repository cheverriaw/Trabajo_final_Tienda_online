@extends('layouts.app')

@section('contenido')
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">inicio</a></li>
                <li class="item-link"><span>detalle</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                        <ul class="slides">

                            <li data-thumb="assets/images/products/digital_18.jpg">
                                <img src="{{ asset($producto->imagenes) }}" alt="{{ $producto->nombre_producto }}" />
                            </li>

                           

                        </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="#" class="count-review">(05 review)</a>
                        </div>
                        <h2 class="product-name">{{$producto->nombre_producto}}</h2>
                        <div class="short-desc">
                            <ul>
                                <li>7,9-inch LED-backlit, 130Gb</li>
                                <li>Dual-core A7 with quad-core graphics</li>
                                <li>FaceTime HD Camera 7.0 MP Photos</li>
                            </ul>
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price">{{$producto->precio_unitario}}</span></div>
                        <div class="stock-info in-stock">
                            <p class="availability">Availability: <b>In Stock</b></p>
                        </div>
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                                
                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <a href="#" class="btn add-to-cart">Add to Cart</a>
                           
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">descripcion</a>
                            <a href="#add_infomation" class="tab-control-item">Informacion adicional</a>
                            
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <p>{{$producto->descripcion_producto}}</p>
                                
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>peso_unidad:</th><td class="product_weight">{{$producto->peso_unidad}}</td>
                                        </tr>
                                        <tr>
                                            <th>tamano:</th><td class="product_dimensions">{{$producto->tamano}}</td>
                                        </tr>
                                        <tr>
                                            <th>Color:</th><td><p>{{$producto->color}}</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

          

        </div><!--end row-->

    </div><!--end container-->

</main>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

