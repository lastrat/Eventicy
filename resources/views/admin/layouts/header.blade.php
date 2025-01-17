<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

    
    <title>@yield('title')</title>

    @include('admin.layouts.css')

    @yield('page_css')

</head>
<body class="nav-md">
<div class="loader"></div>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0; background-color:black; border-bottom: 1px solid rgb(185, 185, 185);">
                    <a href="{{ url('dashboard') }}" class="site_title"><img src="{{asset('assets/img/ticket.png')}}" alt="" style="max-width:50px;max-height:50px"> <span> {{ "Eventicy" ??$settings['app_name']}}</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{ asset(Auth::user()->picture) }}" alt="user image" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>