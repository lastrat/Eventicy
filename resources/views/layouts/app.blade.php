
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Eventicy</title>
    <!-- Favicon -->
<link href="{{asset('img/udeywise.ico')}}" rel="icon">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <h2 class="text-white text-center">Eventicy</h2>
                        @if (Route::currentRouteName()=='forgotPassword')
                        <a href="{{route('login')}}"><img class="img-fluid" src="{{ URL::to('images/forget_password.png') }}" alt="Logo" style="min-height: 350px; width:100%; margin-bottom:50px;"></a>
                        @elseif(Route::currentRouteName() == 'password.reset')
                        <a href="{{route('login')}}"><img class="img-fluid" src="{{ URL::to('images/kulu 2.png') }}" alt="Logo"></a>
                        @else
                        <a href="{{route('login')}}"><img class="img-fluid" src="{{ URL::to('assets/img/ticket.png') }}" alt="Logo"></a>
                        @endif
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::to('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/script.js') }}"></script>
</body>

</html>
