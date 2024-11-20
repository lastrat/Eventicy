
@extends('layouts.app')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Bienvenue sur Eventicy</h1>
        <br>
        <h2>S'inscrire</h2>
        <form action="{{-- route('postUserInfo') --}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Noms<span class="login-danger">*</span></label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                <span class="profile-views"><i class="fas fa-user"></i></span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email<span class="login-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- Gender Selection Field -->
            <div class="form-group">
                <label>Sexe<span class="login-danger">*</span></label>
                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                    <option value="" disabled {{ old('gender') == '' ? 'selected' : '' }}>Select Gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Mot de passe <span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password">
                <span class="profile-views feather-eye toggle-password"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Confirmer votre mot de passe<span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                <span class="profile-views feather-eye toggle-password"></span>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </div>
            <div>
                <p class="change_link">Deja un membre ?
                    <a href="{{route('login')}}" class="to_register"> se connecter </a>
                </p>
            </div>
        </form>
    </div>
</div>


@endsection
