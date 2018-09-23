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
      
      @if (session('notification'))
      <div class="alert alert-success" role="alert">
        {{ session('notification') }}
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
        <p>Tu carrito de compra presenta   </p>
    
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
                     
                  </tbody>
        </table>

         <div class="text-center">
              
         </div>
    </div>
    
  </div>
</div>
@include('includes.footer')
@endsection