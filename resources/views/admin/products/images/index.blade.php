@extends('layouts.app')

@section('title','App Shop | Imagenes de '.$product->nombre)

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
   
  </div>
  <div class="main main-raised">
    <div class="container">
      
      <div class="section text-center">
        <h2 class="title">Imagenes del Inmueble "{{ $product->nombre }}"</h2>
        <div class="card card-default">
          <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div  class="text-left"><input type="file" name="photo" required></div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary btn-round" style="color:white">Subir Nueva Imagen</button>

                <a href="{{url('/admin/products')}} " class="btn btn-default btn-round" style="color:white">volver al listado de inmuebles</a>
                </div>
              </form>  
          </div>
        </div>
            
            <div class="row">
            @foreach($images as $image)
               <div class="col-md-4"> 
                <div class="card card-default">
                    <div class="card-body">
                      <img src="{{$image->url}}" width="300">
                      <form method="post" action="">
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                         <input type="hidden" name="image_id" value="{{$image->id}}">
                         <button type="submit" class="btn btn-danger btn-round" style="color:white">Eliminar Imagen</button>
                         @if ($image->featured)
                         <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada de este inmueble">
                                <i class="material-icons">star</i>
                          </button>
                         @else
                          <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">star</i>
                          </a>
                         @endif
                      </form>
                    </div>
                </div>
              </div>
                @endforeach
          </div>
      </div>
    </div>
  </div>
   @include('includes.footer')
@endsection