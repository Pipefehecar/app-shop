@extends('layouts.app')

@section('title','App Shop | Inicio')

@section('body-class','landing-page sidebar-collapse')

@section('styles')
  <style>
    .team .row .cold-md-4{
        margin-bottom: 5em;
    }
    
    div h4{
       color: yellow;
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Bienvenido a App Shop.</h1>
          <h4>Realiza pedidos en linea y te contactaremos para realizar la entrega</h4>
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
      <div class="section text-center">
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
      </div>
      <div class="section text-center">
        <h2 class="title">Inmuebles Disponibles</h2>
        <div class="team"> 
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{$product->featured_image_url}}" alt="Imagen no disponible" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">
                    <a href="{{ url ('/products/'.$product->id )}}"> {{ $product->nombre }} </a>
                    <br>
                    <small class="card-description text-muted">{{$product->category->name}}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">{{ $product->description }}</p>
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