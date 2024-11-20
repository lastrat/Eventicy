
@extends('layouts.app')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        {{-- <h1 class="text-center">Welcome to Udeywise</h1> --}}
        <br>
        <h2>Connexion</h2>
        <form action="{{ route('postLogin') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email<span class="login-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
            </div>
            <div class="form-group">
                <label>Mot de passe <span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required>
                <span class="profile-views feather-eye toggle-password"></span>
            </div>
            <div class="forgotpass">
                <div class="remember-me">
                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Se souvenir
                        <input type="checkbox" name="remember">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <a href="{{--route('forgotPassword')--}}">Mot de passe oublié?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
            </div>
            <div>
                <p class="change_link">Etes vous nouveau ?
                    <a href="{{route('register')}}" class="to_register"> Créer un compte </a>
                  </p>
            </div>
        </form>
    </div>
</div>

@endsection
