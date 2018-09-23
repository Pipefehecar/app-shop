@extends('layouts.app')

@section('title','App Shop | Listado de Productos')

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
   
  </div>
  <div class="main main-raised">
    <div class="container">
      
      <div class="section text-center">
        <h2 class="title">Listado de Inmuebles</h2>
        <div class="team">
          <div class="row">
            <a href="{{url('/admin/products/create')}} " class="btn btn-primary btn-round" style="color:white">Nuevo Inmueble</a>
           <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                         {{--  <th>Image</th> --}}
                          <th class="text-center">titulo</th>
                          <th class="col-md-2 text-center">Descripcion</th>
                          <th class="text-center">Tipo</th>
                          <th class="text-right">Precio</th>
                          <th class=" col-md-2 text-right">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($publications as $publication)
                      <tr>
                          <td class="text-center">{{$publication->id}}</td>
                          {{-- <td><div class="col-md-6 ml-auto mr-auto">
                    <img src="{{$product->images()->first()->image}}" alt="Imagen no disponible" class="img-raised rounded-circle img-fluid">
                  </div></td> --}}
                          <td>{{$publication->title}}</td>
                          <td>{{$publication->description}}</td>
                          <td>{{$publication->type ? $publication->type->name : 'otro'}}</td>
                          <td class="text-right">&#36;
                            @switch($publication->rent_or_sale)
                                @case("venta")
                                   {{ $publication->sale_price}}
                                    @break

                                @case("arriendo")
                                    {{ $publication->rent_price}}
                                    
                                    @break

                                @default
                                    <div class="row flex-parent">
                                      <i class="im im-coin flex-child col-md-1"></i>
                                      <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->rent_price}}</p></div>
                                      <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->sale_price}}</p></div>
                                    </div>
                            @endswitch
                          </td>
                          <td class="td-actions text-right col-md-4">
                             
                              <form method="post" action="{{ url('/admin/products/'.$publication->id)}}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                     <a href="{{ url('/publications/'.$publication->id)}}" rel="tooltip" title="Ver Inmueble" target="_blank" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                          <i class="fa fa-info"></i>
                                          {{-- <i class="material-icons">visibility</i> --}}
                                    </a>

                                    <a href="{{ url('/admin/products/'.$publication->id.'/edit')}}" rel="tooltip" title="Editar Inmueble" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                     <a href="{{ url('/admin/products/'.$publication->id.'/images')}}" rel="tooltip" title="Imagenes del Inmueble" class="btn btn-warning btn-fab btn-fab-mini btn-round">
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
            {{$publications->links()}}
          </div>
        </div>
      </div>
    
    </div>
  </div>
   @include('includes.footer')
@endsection