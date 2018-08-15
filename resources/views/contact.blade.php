@extends('layouts.app')
@section('title','App Shop | Contacto')
@section('body-class','profile-page sidebar-collapse')
@section('styles')
  <style> 
     .flex-parent{
        display: -ms-flex;
        display: -webkit-flex;
        display: flex;
      }

      .flex-child{
        display: -ms-flex;
        display: -webkit-flex;
        display: flex;
        justify-content: center;
        flex-direction: column;
      }
  </style>
@endsection
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/profile_city.jpg') }}">
</div>
<div class="main main-raised">
  <div class="container">
    <div class="section">
      <!-- <h2 class="title section text-left">Cont&aacute;ctenos</h2> -->
      <div class="card card-nav-tabs" style="width: 20rem;">
        <div class="card-header card-header-primary">
         <h2 class="card-title text-left">Contact&aacute;nos</h2>  
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <h3 class="title text-left"><i class="material-icons">phone</i>Tel&eacute;fonos</h3>
            <ul>
              <li type="disc"><h4>(+57) 310-747-9604 </h4></li>
              <li type="disc"><h4>(+57) 321-586-5910 </h4></li>
            </ul>
          </li>
          <li class="list-group-item">
            <h3 class="title text-left"><i class="material-icons">place</i>Correo</h3>
            <ul>
              <li type="disc"><h4>Cra 5ta con calle 22<br>edificio fuente azul oficina 206 Santa Marta, Magdalena</h4></li>
              
            </ul>
          </li>
          <li class="list-group-item">
            <h3 class="title text-left"><i class="material-icons">email</i>Direcci&oacute;n</h3>
            <ul>
              <li type="disc"><h4>contacto@Opendoors.com</h4></li>
            </ul>
          </li>
          <!-- <li class="list-group-item">
            <h3 class="title text-left"><i class="material-icons">schedule</i>Horarios</h3>
            <ul>
              <li type="disc"><h4>lunes-viernes<br>8:30am-12m<br>2pm-4:30pm</h4></li>
            </ul>
          </li> -->
        </ul>
      </div>
      https://www.youtube.com/watch?v=LTJ5t3fXoXU
      @if (session('notification'))
      <div class="alert alert-success" role="alert">
        {{ session('notification') }}
      </div>
      @endif
      
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