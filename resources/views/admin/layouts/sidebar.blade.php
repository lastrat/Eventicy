<?php
$user_type =  \Illuminate\Support\Facades\Auth::user()->role;
$student = \App\Libraries\Enumerations\UserTypes::$ENTERPRISE;
$teacher = \App\Libraries\Enumerations\UserTypes::$ENTERPRISE;
$admin = \App\Libraries\Enumerations\UserTypes::$ADMIN;

?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General Menu</h3>
                <ul class="nav side-menu">
                    <li class="{{Route::currentRouteName()=='dashboard' ? 'active' : ''}}"><a href="{{ Route('dashboard') }}"><i class="fa fa-home"></i> Tableau de bord</a></li>
                    @if($user_type == $admin)
                    <li>
                        <a><i class="fa fa-hospital-o"></i> Evenement <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li class="{{Route::currentRouteName()=='teachers-list' ? 'active' : ''}}"><a href="{{Route('login')}}"><i class="fa fa-building-o"></i> Users </a></li>
                        </ul>
                    </li>
                    @endif

                    @if($user_type == $admin || $user_type == $teacher)
                    <li>
                         <a><i class="fa fa-hospital-o"></i> Users <span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                         <li class="{{Route::currentRouteName()=='students-list' ? 'active' : ''}}"><a href="{{Route('login')}}"><i class="fa fa-building-o"></i> Enterprise </a></li>
                         <li class="{{Route::currentRouteName()=='getTeacherStudentsListPage' ? 'active' : ''}}"><a href="{{Route('login')}}"><i class="fa fa-building-o"></i> Bodyguard </a></li>
   
                         </ul>
                    </li>
                       @endif

                    @if ($user_type == $student || $user_type == $admin)
                    <li class="{{Route::currentRouteName()=='getStudentTransaction' ? 'active' : ''}}"><a href="{{Route('login')}}"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
                @endif
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

@include('admin.layouts.top_nav')