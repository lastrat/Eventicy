            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <nav>
                  <div class="nav toggle">
                      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="">
                          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <img src="{{ asset(Auth::user()->picture) }}" alt="">{{ Auth::user()->name }}
                              <span class=" fa fa-angle-down"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="{{-- route('account-settings') --}}"> Profile</a></li>
                              <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-light bg-success badge-xs">{{--auth()->user()->unreadNotifications->count()--}}</span>
                            </a>
                            {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->unreadNotifications->count() > 0)
                                    <li class="d-flex justify-content-end mx-1 my-2">
                                        <a href="{{route('mark-as-read')}}" class="btn btn-success btn-sm" style="background-color: #02c202; color:#fff; border-radius: 2px solid white;">Mark All as Read</a>
                                    </li>
                                @endif
                                
                                <div class="notification-list">
                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                        <a href="{{$notification->data['url']}}" class="text-success" style="padding: 2px;">
                                            <li class="p-3 text-success" style="padding: 5px;"> {{$notification->data['message']}}</li>
                                        </a>
                                        <hr>
                                    @endforeach
                                    @foreach (auth()->user()->readNotifications as $notification)
                                        <a href="{{$notification->data['url']}}" class="text-secondary" style="padding: 2px;">
                                            <li class="p-3 text-secondary" style="padding: 5px;"> {{$notification->data['message']}}</li>
                                        </a>
                                        <hr>
                                    @endforeach
                                </div>
                            </ul> --}}
                        </li>
                 
                  </ul>
              </nav>
          </div>
      </div>
      
<!-- Bootstrap 5 JS -->

