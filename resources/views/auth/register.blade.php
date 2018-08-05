@extends('layouts.app')
@section('body-class','login-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="card-header card-header-info text-center">
                            <h4 class="card-title">Registro</h4>
                            <!-- <div class="social-line">
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div> -->
                        </div>
                        <p class="description text-center">Completa tus datos</p>
                        <div class="card-body" style="margin-bottom: 100px">
                            
                       
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre..." name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                
                                <input id="email" type="email" placeholder="Correo electronico..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña...">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                </div>
                                <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Confirmar Contraseña...">
                            </div>
                            
                            
                            
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info  btn-wd btn-lg">Registrarse</button>
                        </div>
                        <!--   <div class="input-group-prepend">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }} </a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @include('includes.footer')
</div>
@endsection