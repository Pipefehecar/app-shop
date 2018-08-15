@extends('layouts.app')

@section('title','App Shop | Inicio')

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">

  </div>
  <div class="main main-raised">
    <div class="container">
      <div>
      
        
            <h2 class="title section text-center">Editar Inmueble seleccionado</h2>
           
              <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
                 @csrf
                 <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombre" value="{{$product->nombre}}">
                      </div>
                 </div>

                <div class="col-sm-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Precio del producto</label>
                        <input type="number" step="0.01" class="form-control" name="price" value="{{$product->price}}">
                      </div>
                </div>
                 </div>

                 <div class="form-group label-floating">
                        <label class="control-label">Descripcion corta</label>
                        <input type="text" class="form-control" name="description" value="{{$product->description}}">
                      </div>
               <div class="form-group label-floating">
                        <label class="control-label">Descripcion larga</label>
               <textarea class="form-control" rows="5" name="long_description">{{$product->long_description}}</textarea>
               </div>
               <div>
                <button class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">CANCELAR</a>
              </div>

              </form>
       
      </div>
       
    </div>
  </div>
  @include('includes.footer')
@endsection