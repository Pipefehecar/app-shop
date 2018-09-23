@extends('layouts.app')

@section('title','Admin | Editar')

@section('body-class','profile-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">

  </div>
  <div class="main main-raised">
    <div class="container">
      <div>
      
        
            <h2 class="title section text-center">Editar Inmueble seleccionado</h2>
           
              <form method="post" action="{{ url('/admin/products/'.$publication->id.'/edit') }}">
                 @csrf
                 <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group label-floating">
                        <label class="control-label">Titulo de la publicaci&oacute;n</label>
                        <input type="text" class="form-control" name="title" autocomplete="off" value="{{$publication->title}}">
                      </div>
                    </div>

                    <div class="col-sm-6">
                          <div class="form-group label-floating">
                            <label class="control-label">Direcci&oacute;n</label>
                            <input type="text" class="form-control" name="address" value="{{$publication->address}}">
                          </div>
                    </div>
                </div>
                <div class="row">
                 <div class="col-sm-6">
                     <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group label-floating">
                          <label class="control-label">Habitaciones</label>
                         <input type="number"  class="form-control" name="rooms"  value="{{$publication->rooms}}">
                        </div>
                     </div>

                    <div class="col-sm-3">
                          <div class="form-group label-floating">
                            <label class="control-label">Baños</label>
                            <input type="number"  class="form-control" name="bathrooms" value="{{$publication->bathrooms}}">
                          </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating">
                          <label class="control-label">Parqueaderos</label>
                          <input type="number"  class="form-control" name="parking" value="{{$publication->parking}}">
                        </div>
                     </div>

                    <div class="col-sm-3">
                          <div class="form-group label-floating">
                            <label class="control-label">Estrato</label>
                            <input type="number"  class="form-control" name="stratum" value="{{$publication->stratum}}">
                          </div>
                    </div>
                  </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="row">
                     
                      @switch($publication->rent_or_sale)
                        @case("venta")
                           <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                               <input type="number" step="5000" class="form-control" name="price" value="{{$publication->sale_price}}">
                              </div>
                            </div>
                            @break

                        @case("arriendo")
                            <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                               <input type="number" step="5000" class="form-control" name="price" value="{{$publication->rent_price}}">
                              </div>
                            </div>
                            @break

                        @default
                            <div class="col-sm-2">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                               <input type="number" step="5000" class="form-control" name="price" value="{{$publication->rent_price}}">
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                               <input type="number" step="5000" class="form-control" name="price" value="{{$publication->rent_price}}">
                              </div>
                            </div>
                    @endswitch
                      <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Area(mt2)</label>
                               <input type="number"  class="form-control" name="area" value="{{$publication->area}}">
                              </div>
                      </div>
                      <div class="col-sm-4">
                         <div class="col-md-3 dropdown">{{--venta/arriendo/dropdown--}}
                            <a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
                                --tipo de negocio--
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="#"></a></li>
                              <li><a href="#"> Venta</a></li>
                              <li><a href="#"> Arriendo</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                              <li class="divider"></li>
                              <li><a href="#">One more separated link</a></li>
                            </ul>
                          </div>
                          </div>


                        {{-- <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">venta/arriendo</label>
                               <input type="text" class="form-control" name="rent_or_sale" value="{{$publication->rent_or_sale}}">
                              </div>
                        </div> --}}
                        @if($publication->rent_or_sale =="venta y arriendo")
                            <div class="col-sm-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                               <input type="number" step="5000" class="form-control" name="price" value="{{$publication->rent_price}}">
                              </div>
                            </div>
                        @endif
                      </div>
                     </div>
                   </div>
                  

                 <div class="form-group label-floating">
                        <label class="control-label">Descripcion corta</label>
                        <input type="text" class="form-control" name="description" value="{{$publication->description}}">
                      </div>
               <div class="form-group label-floating">
                        <label class="control-label">Descripcion larga</label>
               <textarea class="form-control" rows="5" name="long_description">{{$publication->long_description}}</textarea>
               </div>
               <div>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">CANCELAR</a>
              </div>

              </form>
       
      </div>
       
    </div>
  </div>
  @include('includes.footer')
@endsection