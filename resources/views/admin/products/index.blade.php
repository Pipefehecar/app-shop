@extends('layouts.app')

@section('title','App Shop | Listado de Productos')

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
   
  </div>
  <div class="main main-raised">
    <div class="container">
      
      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>
        <div class="team">
          <div class="row">
            <a href="{{url('/admin/products/create')}} " class="btn btn-primary btn-round" style="color:white">Nuevo Inmueble</a>
           <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                         {{--  <th>Image</th> --}}
                          <th class="text-center">Nombre</th>
                          <th class="col-md-2 text-center">Descripcion</th>
                          <th class="text-center">Categoria</th>
                          <th class="text-right">Precio</th>
                          <th class=" col-md-2 text-right">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($products as $product)
                      <tr>
                          <td class="text-center">{{$product->id}}</td>
                          {{-- <td><div class="col-md-6 ml-auto mr-auto">
                    <img src="{{$product->images()->first()->image}}" alt="Imagen no disponible" class="img-raised rounded-circle img-fluid">
                  </div></td> --}}
                          <td>{{$product->nombre}}</td>
                          <td>{{$product->description}}</td>
                          <td>{{$product->category ? $product->category->name : 'general'}}</td>
                          <td class="text-right">&#36;{{$product->price}}</td>
                          <td class="td-actions text-right col-md-4">
                             
                              <form method="post" action="{{ url('/admin/products/'.$product->id)}}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                     <a  rel="tooltip" title="Ver Producto" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                          <i class="fa fa-info"></i>
                                          {{-- <i class="material-icons">visibility</i> --}}
                                    </a>

                                    <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                     <a href="{{ url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imagenes del Inmueble" class="btn btn-warning btn-fab btn-fab-mini btn-round">
                                        <i class="fa fa-image"></i>
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
            {{$products->links()}}
          </div>
        </div>
      </div>
    
    </div>
  </div>
   @include('includes.footer')
@endsection