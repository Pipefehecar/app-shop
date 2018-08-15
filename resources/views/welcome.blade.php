@extends('layouts.app')

@section('title','Opendoors | Inicio')

@section('body-class','landing-page sidebar-collapse')

@section('styles')
  <style>
    .team .row .cold-md-4{
        margin-bottom: 5em;
    }
  
    .row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display:        flex;
      flex-wrap: wrap;
    }
    .row > [class*='col-']{
      display: flex;
      flex-direction: column;
    }
  </style>
@endsection

@section('content')
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/santa_marta.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Bienvenido a Opendoors, tu inmobiliaria amiga.</h1>
          <h4>Dejanos tu contacto y te ayudaremos a encontrar o vender el inmueble que tanto deseas</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=ZZPZOhkbngo" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> ¿Como funciona?
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      {{--<div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Let&apos;s talk product</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Free Chat</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Verified Users</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Fingerprint</h4>
                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
       </div>}} --}}
      <div class="section text-center">
        <h2 class="title">Inmuebles Disponibles</h2>
        <div class="team"> 
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card" style="width: 20rem;">
                 
                    <img src="{{$product->featured_image_url}}" alt="Imagen no disponible" class="card-img-top">
                  
                  <h4 class="card-title">
                    <a href="{{ url ('/products/'.$product->id )}}"> {{ $product->title }} </a>
                    <br>
                    <small class="card-description text-muted">{{$product->category->name}}</small>
                  </h4>
                  <div class="card-body">
                    <div class="row">
                        <div class="text-left"><p class="h5">Hab: {{ $product->rooms }}</p></div>
                        <hr>
                        <div><p class="h5">Baños: {{ $product->rooms }}</p></div>
                        <hr>
                    </div>
                    <div class="text-left"><p class="h4 title">Precio: ${{ $product->price }}</p></div>
                  </div>
                 
                </div>
              </div>
            </div>
            @endforeach
          </div>
         <div class="text-center"> {{ $products->links() }}</div>
          
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">¿Buscas algo diferente?, ¿necesitas vender?</h2>
            <h4 class="text-center description">Contactanos y en pocas horas estaremos ayudandote a buscar o vender tu inmueble.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">E-mail</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Cuentanos que buscas...</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('includes.footer')
@endsection