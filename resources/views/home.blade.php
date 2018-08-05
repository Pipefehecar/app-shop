@extends('layouts.app')
@section('title','App Shop | Dashboard')
@section('body-class','profile-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
</div>
<div class="main main-raised">
  <div class="container">
    <div class="section">
      <h2 class="title section text-center">Dashboard</h2>
      
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <ul class="nav nav-pills nav-pills-icons" role="tablist">
        <li class="nav-item ">
          <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
            <i class="material-icons">dashboard</i>
            Carrito de Compras
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
            <i class="material-icons">list</i>
            Pedidos Realizados
          </a>
        </li>
      </ul>
      <hr>
        <p>Tu carrito de compra presenta {{ auth()->user()->cart->details->count() }}  </p>
    
        <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">Img</th>
                         
                          <th >Nombre</th>
              
                          <th >Precio</th>

                          <th class="text-center">Cantidad</th>
                          <th class="text-center">Sub Total</th>
                          <th class="text-right">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach(auth()->user()->cart->details as $detail)
                      <tr>
                          <td>
                            <img src="{{$detail->product->featured_image_url}}" height="75">
                          </td>
                       
                          <td>
                            <a href="{{ url('/products/'.$detail->product->id) }}" target="_blank">
                              {{$detail->product->nombre}}</a>
                          </td>
                         
                          
                          <td >${{$detail->product->price}}</td>
                          <td class="text-center">{{ $detail->quantity }}</td>
                          <td class="text-center">${{ $detail->quantity *$detail->product->price }} </td>
                          <td class="td-actions text-right">
                             
                              <form method="post" action="{{ url('/cart')}}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="cart_detail_id" value="{{$detail->id}}">
                                     <a href="{{ url('/products/'.$detail->product->id) }}" 
                                     target="_blank" rel="tooltip" title="Ver Producto" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                          <i class="fa fa-info"></i>
                                          {{-- <i class="material-icons">visibility</i> --}}
                                    </a>

                                    <button type="submit"  rel="tooltip" title="Eliminar" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                        <i class="fa fa-times"></i>
                                    </button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
             </table>
    </div>
    
  </div>
</div>
@include('includes.footer')
@endsection