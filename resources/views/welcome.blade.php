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
            @foreach ($publications as $publication)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card" style="width: 20rem;">
                 
                    <img src="{{$publication->featured_image_url}}" alt="Imagen no disponible" class="card-img-top">
                  
                  <h4 class="card-title">
                    <a href="{{ url ('/publications/'.$publication->id )}}"> {{ $publication->title }} </a>
                    <br>
                    <small class="card-description text-muted">{{$publication->type->name}} en {{$publication->rent_or_sale}}</small>
                  </h4>
                  <div class="card-body">
                     <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABCUlEQVRIS+3VvUoDQRTF8V8QEUsRO7EXfIQggiCCjQg+gNhoZZXOxtiJLyBYWFuEFBZ+YSmCpfgSYiGCrcrIKJshOJsNEYRsNcs9c/5z7mWYmgF/tQH7GwKyHR62qFSLPnCEray6giDMIAXMYh4PuK3g2bElBSzjDCNR1cBhP5AUcI3FguELJgr/09iICSfxhBucxHXxLLtYTQEXWCqonjGFcTSxg9Euid5iPaR9j/VjbKaABZxjLIq2cYU25kq06hLreEVXQPCYQT0OOQx6JaYo4f8lecT9b4CyRjldR4KcuHL9ewaVDXIb/wxwiv3caXqs72EtJLhDCwc9GuTkPxctJ+yr/v8fnE8BYzapIL3JFwAAAABJRU5ErkJggg==" alt="">: {{$publication->rooms}}</div></th>

              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACBElEQVRIS+2VPWhUQRDH/7Ozuy82ohaSQi0Ui4Bpowh+dAERkTQpbGxFO0FE0F5JI3ZiI9qLyIlgF1DwAwQbP0CUIDaCGBG8ezPzVjZ3p3fh4r07Y+d2b99/5zf7n91ZQs3hKT6AS7Mr8ooamsqjdZZSHVHW/AcMdWrdLZrAxE5hOwdgGgATMAVgYyeT5QS8zuUG8DIYX26i+X5QlgOLXKDYbVw9AbB56Nbagi9sbqaF1rvV+oGAwOF2Ak7UDL4iI+CmmJysBfA+LFDCtlEAiWhJtcyW9o3a92AUWK92GGDSk7/mkrtUonzlnT8PQLXShRjjdLJ0UUxOA/i8VgJ/BMQY91SWFkFpXlUfeor3gEo06RwzHyG4W2xufwutN2MBxrWltkXe+4Ne/VITzQ95UYFiF4Gq7pnP3+ZtUlUfjbUDz+E7AQ0xmc8BnHMviLg0k73tBujvwNEhNdkyFiCEMCPiPwE/PuYAIYR9+faKyNN2wA07QtCtIvJ8LMC/rkFuEwbg2xDQps7/r4N0ax7Tjt/LZnK4u9BTvA9UpSY93p1jDo9zM+zWpfZNZo5zgLXMrPEL4PxZAqlUcvU3oDgGJDIr7460g/XwP8cY1ir+mjMQwMzXATdlJgd6Cb29qHeeOeS345mZnKlVg+DCqeRou2p5oQ/Q04v65n28Qim9FZMbqwE/AXAt2BlalNKlAAAAAElFTkSuQmCC" alt="">: {{$publication->bathrooms}}</div></th>

              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAC4klEQVRIS72VT0gUYRjGn/ebXS3DW+DB3G92dzYoyP54kuhYhyyhk0meCi1KULBOBYGHOhRUdiqF6BL9uwgVVNQhoaBDgWSlO7szs3oRFsJCUnfme2PHVtZt11k9NLdhnuf5ffO+zzCEDVxGJNoFUh0MQZXsBMVE9LyiYC2u0dTkQGiRoLMpYH5DgJjUZwTQmAco8IwgegsPLgg7QGgtgJVSi2UBsVgsQkrtLD2hIvpmWZZTDCBW9+dd9+zmUG2XJ/hxSOEyCP0+vBygpaUlPJfNfgFoKzz1qwBhEkwa7pq2fbUUwF7NJYTcaYBPQYksBI9WBMSlHABz96b6+uaJiYmlcnMuBeSEOBPy6JCr8asw4x4Dx8sCotFoA7neFAR1ph3nRaUllgI0zxtwQzV3FHiPAOIVd2BIOQxFjea0fXithlQe0WrXqh0YUu5Tit+HQ9ruScuarBbACjZpGAej/Z9SFC85IeUYQ3w0HWsgqN+GlEmAjCAdgB9+TeO63kGuGlI1oe3pdHouyGhI2QqmoxAQFbUKzMSvKd95kcuNgegDoD0NCg98LjjnAi9t217IaynepFskoAca1yEg8PWk41zwAYbUXQBakd8rua8merWH1SMzk/G/hRWAAlJhQW2TlmUmInovE24GJSulfgpNtJu2/c6IRI8o9p4IIWpRDsBMPamMNVwINXQ9X71da0GYMJSy7b6CJi71BwR0lgUQoz+ZsW/9FZMh5VRwFXnEdJzuokON+t9D+RFxVrA4qRR9Fxr3AXyuihEtEWm9Grw3HtExAl3Lj70sIChsPc8JeJh07E5/ydFt+idNw971BARr+aLpOFd8QHNDw5aFujrDY75NjAO+mamdBE8HB+W1fIJB530tYRDKr+jXgnfljxaX0WcEbvPzPS2RmkmZ1QAMXe8H48aylrpNxxop9v0/QELXTzPTQSherFv63TM+OztfzRvEI5H9RGJ5ROBB03E+F/v+AF+7d5EPPRIiAAAAAElFTkSuQmCC" alt="">: {{$publication->parking}}</div></th>
             
               
            </tr>
          </thead>
      </table> 

                    @switch($publication->rent_or_sale)
                        @case("venta")
                            <div class="row flex-parent">
                              <i class="im im-coin flex-child col-md-1"></i>
                              <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->sale_price}}</p></div>
                            </div>
                            @break

                        @case("arriendo")
                            <div class="row flex-parent">
                              <i class="im im-coin flex-child col-md-1"></i>
                              <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->rent_price}}</p></div>
                            </div>
                            @break

                        @default
                            <div class="row flex-parent">
                              <i class="im im-coin flex-child col-md-1"></i>
                              <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->rent_price}}</p></div>
                              <div class="flex-child col-md-9"><p class="h4 title text-left">{{ $publication->sale_price}}</p></div>
                            </div>
                    @endswitch
                    
                    
                  </div>
                 
                </div>
              </div>
            </div>
            @endforeach
          </div>
         <div class="text-center"> {{ $publications->links() }}</div>
          
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