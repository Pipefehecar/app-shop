@extends('layouts.app')
@section('title','Opendoors | '.$product->rent_or_sale.'s')
@section('body-class','profile-page sidebar-collapse')
@section('content')
@section('styles')
  <style>
      .carousel, .carousel-inner > .item > img {
      height: 400px;
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
      #favorite{
        color: blue;
        background-image: url('{{asset ('img/favorite-ico.png') }}');
      }
  </style>
@endsection
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset ('img/city-profile.jpg') }}">
</div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row flex-parent">
        <div class="name col-md-11">
         <h3 class="title">{{$product->title}}</h3>
          <h6>{{$product->category->name}} en {{$product->rent_or_sale}}</h6>
        </div>
        <div class="col-md-1 flex-child">
          <form action="{{ url('/')}}" method="get">
            <input type="image" src="{{asset ('img/favorite-ico-plus.png') }}" alt="Submit">
          </form>
        </div>
      </div>
        <hr>
      
      
    
      @if (session('notification'))
      <div class="alert alert-success" role="alert">
        {{ session('notification') }}
      </div>
      @endif
      
      
      <!-- Button trigger modal -->
      
      {{-- xxxxxxxxxxxxxxxxxxx --}}
      <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABCUlEQVRIS+3VvUoDQRTF8V8QEUsRO7EXfIQggiCCjQg+gNhoZZXOxtiJLyBYWFuEFBZ+YSmCpfgSYiGCrcrIKJshOJsNEYRsNcs9c/5z7mWYmgF/tQH7GwKyHR62qFSLPnCEray6giDMIAXMYh4PuK3g2bElBSzjDCNR1cBhP5AUcI3FguELJgr/09iICSfxhBucxHXxLLtYTQEXWCqonjGFcTSxg9Euid5iPaR9j/VjbKaABZxjLIq2cYU25kq06hLreEVXQPCYQT0OOQx6JaYo4f8lecT9b4CyRjldR4KcuHL9ewaVDXIb/wxwiv3caXqs72EtJLhDCwc9GuTkPxctJ+yr/v8fnE8BYzapIL3JFwAAAABJRU5ErkJggg==" alt=""> Habitaciones: {{$product->rooms}}</div></th>
              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACBElEQVRIS+2VPWhUQRDH/7Ozuy82ohaSQi0Ui4Bpowh+dAERkTQpbGxFO0FE0F5JI3ZiI9qLyIlgF1DwAwQbP0CUIDaCGBG8ezPzVjZ3p3fh4r07Y+d2b99/5zf7n91ZQs3hKT6AS7Mr8ooamsqjdZZSHVHW/AcMdWrdLZrAxE5hOwdgGgATMAVgYyeT5QS8zuUG8DIYX26i+X5QlgOLXKDYbVw9AbB56Nbagi9sbqaF1rvV+oGAwOF2Ak7UDL4iI+CmmJysBfA+LFDCtlEAiWhJtcyW9o3a92AUWK92GGDSk7/mkrtUonzlnT8PQLXShRjjdLJ0UUxOA/i8VgJ/BMQY91SWFkFpXlUfeor3gEo06RwzHyG4W2xufwutN2MBxrWltkXe+4Ne/VITzQ95UYFiF4Gq7pnP3+ZtUlUfjbUDz+E7AQ0xmc8BnHMviLg0k73tBujvwNEhNdkyFiCEMCPiPwE/PuYAIYR9+faKyNN2wA07QtCtIvJ8LMC/rkFuEwbg2xDQps7/r4N0ax7Tjt/LZnK4u9BTvA9UpSY93p1jDo9zM+zWpfZNZo5zgLXMrPEL4PxZAqlUcvU3oDgGJDIr7460g/XwP8cY1ir+mjMQwMzXATdlJgd6Cb29qHeeOeS345mZnKlVg+DCqeRou2p5oQ/Q04v65n28Qim9FZMbqwE/AXAt2BlalNKlAAAAAElFTkSuQmCC" alt=""> Baños: {{$product->bathrooms}}</div></th>
              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAC4klEQVRIS72VT0gUYRjGn/ebXS3DW+DB3G92dzYoyP54kuhYhyyhk0meCi1KULBOBYGHOhRUdiqF6BL9uwgVVNQhoaBDgWSlO7szs3oRFsJCUnfme2PHVtZt11k9NLdhnuf5ffO+zzCEDVxGJNoFUh0MQZXsBMVE9LyiYC2u0dTkQGiRoLMpYH5DgJjUZwTQmAco8IwgegsPLgg7QGgtgJVSi2UBsVgsQkrtLD2hIvpmWZZTDCBW9+dd9+zmUG2XJ/hxSOEyCP0+vBygpaUlPJfNfgFoKzz1qwBhEkwa7pq2fbUUwF7NJYTcaYBPQYksBI9WBMSlHABz96b6+uaJiYmlcnMuBeSEOBPy6JCr8asw4x4Dx8sCotFoA7neFAR1ph3nRaUllgI0zxtwQzV3FHiPAOIVd2BIOQxFjea0fXithlQe0WrXqh0YUu5Tit+HQ9ruScuarBbACjZpGAej/Z9SFC85IeUYQ3w0HWsgqN+GlEmAjCAdgB9+TeO63kGuGlI1oe3pdHouyGhI2QqmoxAQFbUKzMSvKd95kcuNgegDoD0NCg98LjjnAi9t217IaynepFskoAca1yEg8PWk41zwAYbUXQBakd8rua8merWH1SMzk/G/hRWAAlJhQW2TlmUmInovE24GJSulfgpNtJu2/c6IRI8o9p4IIWpRDsBMPamMNVwINXQ9X71da0GYMJSy7b6CJi71BwR0lgUQoz+ZsW/9FZMh5VRwFXnEdJzuokON+t9D+RFxVrA4qRR9Fxr3AXyuihEtEWm9Grw3HtExAl3Lj70sIChsPc8JeJh07E5/ydFt+idNw971BARr+aLpOFd8QHNDw5aFujrDY75NjAO+mamdBE8HB+W1fIJB530tYRDKr+jXgnfljxaX0WcEbvPzPS2RmkmZ1QAMXe8H48aylrpNxxop9v0/QELXTzPTQSherFv63TM+OztfzRvEI5H9RGJ5ROBB03E+F/v+AF+7d5EPPRIiAAAAAElFTkSuQmCC" alt=""> Garaje: {{$product->parking}}</div></th>
              <th scope="col" class="text-center"><div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACQklEQVRIS7XVS6hNcRQG8N/1yDvPkvJMkrwy8CxKniMTRpIUIWViIgkZKQZkqExkYCKhRCkDCSNEymPgcfMIIW830dLatc/unHOvo7vq1D77v/b61lrfWt+/TTdbWzfHVwboh4m4VwGdj+v/kEiNfwD0wGx8x3C8QU+8Qx+sxHn8xkh8wmcMzvPw751nrzAKP/AN7eUK+mIsHlaynYVb/1DBGDwv/LvCwQg8w4UKyHtsQ0fl/UzcaQQwsE6m0bZrGF05m4Pt2JztKI4bAgzBS3ysBIoqI8tl2I3TWI0tGI89+Vx817BFAXAks4qJCqKCvLDbWIcr2IUDGIoPmIDDCfoLk/CoXosKgHZswkVMyykKgOUZ/BxWYSu+ZKBT2JCTOA83WgFYgLWl9kW1MdphZYBOW3QWi7JFMSnHs0WR2ZoG47oeJ7LqIP8FHuNJeUyLFm2kZsPjfdGivQ0ABuUCBjexTzebtegSlmTQWLyD+bwC+7EjN/1QBtmXk1RwMBkPWuGgmKLp6FXa7sVJeAHQKQexsQtxP3XlaKlFOzPbYU0AIoG7zSo4hiAqLMTrcoXkk7nVhT5VK6jRrnokR6llCy0KkstSMQVn0ikmKHhp2KIA6Y8BuJrbWgaIqYjxjMwb2VLMTRmPzX6a8t5R3AdTU4OCvAgYd0ToedwLAR53QFgk8TN/cVeE/9f0D7+3mBHznz6vuyLX9bKOdoWkhJWf4/+4rODvYasAsSfFt8FRSEVhcaOFKv8XQBM6ao9araDLAH8AslqONrw7BlcAAAAASUVORK5CYII=" alt="">Area: {{$product->area}} </div></th>
               <th scope="col" class="text-center"><div>
                <img src="" alt="">Estrato: {{$product->stratum}} 
              </div></th>
               <th scope="col" class="text-center"><div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACQUlEQVRIS53VX+iOZxgH8A8yilhNckArLUnagR1wgCIlZytHC2OTiHLAlCR/Sin5U8pqxayRI8rJ2oGUqJWtHSGFLE0JU3OgEEvfX/ezHk/P8/xev6ve3t73vu7re/35fq97lHabjkuYhus4g/N4VdzHYSVWYz4eYwUeNMON6gCYhdsYXTv/BxfL7y8xpXb2FnNwZ1CA+O3AoY4Emn9vx9E2364KKt9NOI6xHUBp2Rac6kpkOIC06Hts7AhwAlvx30gBvu3LrgSNz+mRAqzru1yCrsHZkQCEqiexfJhB/4INePQhQ56HXzF1QBYleBK5MQhNo4Hf8EmPCPdjfeP8KRbgfv3/Jos+wh/4vHH5Dc7hLg5gcfnEbS0+K/5/FpD4D1kTYCcOtmSeID9jDKLa0Def3I8GMujKvsORNoBJZZd83AIwvrQkvE/Qfdjb0cJn+BQvmhVsRgJ0kaEKOhxA7odVYeB7LbqGhR0A2Z5fF1VnTntKFV2b4DKW1QEm4t/S4zaM/zOqHWY/fVUybe6q15iMl1UGi3C1h/PZNRfKOt6NpZhdKvqpMKl5Pe/E7xXAIDunToxB5jG0QiqALnr2DTxzCFW7GLUNxyqAUC6OXfYDHpbDSmgzkfZk0a1qubgrmhq0gii1em+j0mQ+oQgsD1IE2LShV64C+AY/9lRQP8qd7KK0qM9S1bkKIBkexhJE0X2WloR1UWubhe5XkBn81RRKSp+LL8p3gGeUtR3gCC6Wt/g5nuBv3MNNZNndqj+h7wBZQWsZPAZf3QAAAABJRU5ErkJggg==" alt=""> Precio: ${{$product->price}} 
              </div></th>
            </tr>
          </thead>
      </table> 
     

      <div class="card mb-3">
        <div id="carouselExampleIndicators" class="carousel slide card-img-top" data-ride="carousel">
              <ol class="carousel-indicators">
                @foreach($images as $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{ $loop->first ? 'active':''}}"></li>
                @endforeach
              </ol>
              <div class="carousel-inner">
                @foreach($images as $image)
                <div class="carousel-item {{$loop->first ? 'active':''}}">
                  <img class="d-block w-100" src="{{ $image->url }}" height="400">
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
        </div>
        <div class="row flex-parent">
          <div class="card-body col-md-10">
            <h3 class="card-title">Descripción</h3>
            <p class="h4 card-text">{{ $product->long_description }}.</p>
             <div class="row flex-parent card-text">
                <div class="flex-child"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAADgElEQVRIS+WVXUhbZxjH/+85jbHGJVUbJ1TnF0YT17igtLjRMduLCVtBbGUto6NlH+3dTAstwii9Whmuw0FZ3c0oo4xtFyvswpsJLaU4Vu1sEj8J2mhrVqNtjJqPY877PuWcoiTGFiv0as/Vy+F5/r/n/zznPYfhFQd7xfrIANx4580GEH3NOPbpcAk3iaGjqW/43laaSQPcanTsEZzdggxjqpgA4pDRuP/2sOdlIWsA54B7/kxnn1w6vbzjfpn5n+ttjktiZlH6qDdwriQUc8nFqlrcHJG+ch4YHJIKFeJshEkYFSRGlYdPIAnmIDA7wBwgso8fvpqnNbMGqOt303fuvyBzwtnO/Uhkb4MyHYY5mkTnD/cgGQjOT2bxe21132XD3rdTnWh562O89aquvQZ46047XTrdqwM6Lr6HaG6WDshfWsHFbg/kLIHdx0J4UGUa+Nh0qOGlAc4BN528MojakTl4nYX47YgDyYcLON4zCUdgEXkVcZQ2RcBt/HFTzomCLQEqJ8L4sqt/wz1WtIRhLlDAalQcM7aEAyxfn7EWmxqR5kBLbu/qR8VE+kxHyiwobw6jMRnSAT/KLt81g2v3lgCOkXmcuvJvmotvj9Sg3joPd2xIB4wxq+dz48G65wEq+SJ62v5IX/KqA0bA2W/+xq6ZJb1+YlcuOo/aUSaW8Wvkhg5YIWnuwPbj1vWAWnUBn8bHxb7krGT+7MnGAK3INfgIJ37y6vWXW6vgq9yhn/+M9KKo6hn4cNYhPitZZCM47H7/dHt8CFUi+sYq9LUXATQX7V13kOCE79tsIAYYINAR9eDD8oCuEWQ5CSOQXUAxSGNyxovxQkCq9VxKojUxhaPKJKyUgKjmGWLrAVGRrRZ9ETSkXbTVHWgPzVyhasxO1vsfVLYqAZhIfSbK8FxAnBsWbib2qj2xd3feVezwXfggfQe/9NVHHDQfLaLlnO1QLZpehnUGqDbCXPJ1BJMlmFGKEVwpgc9vmbqr1JaKlI/z6IX30wGR2xb9HqTGKoAThG/F9vja0kGrJ69FqJQlpeZFH01mjG1TAD5m/O/6clPk56WWmhDP10VMRRUZYpsCeHtd9/2xapM/YdsZVEuZZn9sioQAS+t2y4CGbn/GiDbq7H8M2NM9XidIchIjJwOr41w4o6EJyEz2EuBhjLwSg9dUWI7N5A2fb9b/308BvcbTKA2BUowAAAAASUVORK5CYII="></div>
                  <div class="col-md-3">
                    <p class="h4 flex-child title">Direcci&oacute;n:</p>
                    <p class="h4"> {{$product->address}}</p>
                  </div>
            </div>
                    
                
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago{{ $product->created_at }}</small></p>
          </div>
          <div class="col-md-2 flex-child">
            <button class="btn btn-primary btn-round" data-toggle="modal" 
              data-target="#modalAddToCart">
              <i class="material-icons">add</i> Agendar cita
            </button>
          </div>
        </div>{{--row--}}
      </div>
      {{-- xxxxxxxxxxxxxxxxxxx --}}
          <div class="description text-center">
             <br><br><br>
          </div>
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