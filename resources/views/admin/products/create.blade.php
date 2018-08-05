@extends('layouts.app')

@section('title','App Shop | Inicio')

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">

  </div>
  <div class="main main-raised">
    <div class="container">
      <div>
      
        
            <h2 class="title section text-center">Registrar Inmueble</h2>
           
              <form method="post" action="{{url('/admin/products')}}">
                 @csrf
                 <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Nombre del producto</label>
                        <input type="text" class="form-control" name="nombre">
                      </div>
                 </div>

                <div class="col-sm-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Precio del producto</label>
                        <input type="number" class="form-control" name="price">
                      </div>
                </div>
                 </div>

                 <div class="form-group label-floating">
                        <label class="control-label">Descripcion corta</label>
                        <input type="text" class="form-control" name="description">
                      </div>
                
               <textarea class="form-control" placeholder="Descripcion extensa del producto" rows="5" name="long_description"></textarea>
               
               <div><button class="btn btn-primary">Registrar producto</button></div>
              </form>
       
      </div>
       
    </div>
  </div>
  
  @include('includes.footer')
@endsection