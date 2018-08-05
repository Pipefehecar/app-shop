@extends('layouts.app')
@section('title','App Shop | '.$product->nombre)
@section('body-class','profile-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
</div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        
          {{-- <div class="avatar">
            <img src="" alt="Circle Image" class="img-raised rounded-circle img-fluid">
          </div> --}}
          <div class="name">
            <h3 class="title">{{$product->nombre}}</h3>
            <h6>{{$product->category->name}}</h6>
          </div>
      </div>
      
      <div class="description text-center">
        <p>{{ $product->long_description }}</p>
      </div>
          <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddToCart">
            <i class="material-icons">add</i> Añadir al carro
          </button>

                      <!-- Button trigger modal -->
         







     {{--  <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="profile-tabs">
            <div class="nav-align-center">
              <div class="tab-content gallery">
                <div class="tab-pane active" id="studio"> --}}

                 <div class="row">
                     @foreach ($images as $image)
                    <div class="col-md-4"> 
                      <div class="card card-default">
                        <div class="card-body">
                         
                            <img src="{{ $image->url }}" class="img-rounded"/>
                         
                        </div>
                      </div>
                    </div>
                     @endforeach
                  </div> 

               {{--      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                      </ol>
                      
                      <div class="carousel-inner">
                   
                        @if($image->featured) 
                        <div class="carousel-item active">
                          <img class="d-block w-100" src= {{asset ('img/profile_city.jpg') }} alt="First slide">
                        </div>
                        @endif 
                             @foreach($images as $image)   
                        <div class="carousel-item">
                          <img class="d-block w-100" src="{{ $image->url }}" >
                        </div>
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> --}}
                  {{--  <div class="col-md-6">
                    @foreach ($imagesRight as $image)
                    <img src="{{ $image->url }}" class="img-rounded"/>
                    @endforeach
                  </div> --}}
         {{--        </div>
                
              </div>
              
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>


<!-- End Profile Tabs -->
            <!-- Modal -->
            <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selecione la cantidad que desea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ url('/cart')}}" method="post">
                    @csrf
                  <div class="modal-body">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="number" name="quantity" value="1" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
@include('includes.footer')
@endsection