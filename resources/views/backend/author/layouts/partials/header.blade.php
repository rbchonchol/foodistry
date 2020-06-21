<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{asset('ui/backend')}}/images/rongon.png" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{Auth::user()->name}}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                {{-- <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div> --}}

                <!-- item-->
            <a href="{{route('author.profile')}}" class="dropdown-item notify-item">
                    <i class="remixicon-account-circle-line"></i>
                    <span>My Account</span>
                </a>

               {{-- <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-settings-3-line"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-wallet-line"></i>
                    <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-lock-line"></i>
                    <span>Lock Screen</span>
                </a> --}}

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="remixicon-logout-box-line"></i>
                 <span>Logout</span>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>

            </div>
        </li>


        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg">
                <img src="{{asset('ui/backend')}}/images/logo-light.png" alt="" height="20">
                <!-- <span class="logo-lg-text-light">Xeria</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="{{asset('ui/backend')}}/images/logo-sm.png" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
    </ul>
</div>

<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="fe-x noti-icon"></i>
        </a>
        <h4 class="m-0 text-white">Settings</h4>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{asset('ui/backend')}}/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">Nik G. Patel</a> </h5>
            <p class="text-muted mb-0"><small>Admin Head</small></p>
        </div>

        <ul class="nav nav-pills bg-light nav-justified">
            <li class="nav-item">
                <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                    General
                </a>
            </li>
            <li class="nav-item">
                <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                    Chat
                </a>
            </li>
        </ul>
        <div class="tab-content pl-3 pr-3">
            <div class="tab-pane" id="home1">
                <div class="row mb-2">
                    <div class="col">
                        <h5 class="m-0 font-15">Notifications</h5>
                        <p class="text-muted"><small>Do you need them?</small></p>
                    </div> <!-- end col-->
                    <div class="col-auto">
                        <div class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" id="tabswitch1">
                            <label class="custom-control-label" for="tabswitch1"></label>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row mb-2">
                    <div class="col">
                        <h5 class="m-0 font-15">API Access</h5>
                        <p class="text-muted"><small>Enable/Disable access</small></p>
                    </div> <!-- end col-->
                    <div class="col-auto">
                        <div class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" checked id="tabswitch2">
                            <label class="custom-control-label" for="tabswitch2"></label>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row mb-2">
                    <div class="col">
                        <h5 class="m-0 font-15">Auto Updates</h5>
                        <p class="text-muted"><small>Keep up to date</small></p>
                    </div> <!-- end col-->
                    <div class="col-auto">
                        <div class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" id="tabswitch3">
                            <label class="custom-control-label" for="tabswitch3"></label>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row mb-2">
                    <div class="col">
                        <h5 class="m-0 font-15">Online Status</h5>
                        <p class="text-muted"><small>Show your status to all</small></p>
                    </div> <!-- end col-->
                    <div class="col-auto">
                        <div class="custom-control custom-switch mb-2">
                            <input type="checkbox" class="custom-control-input" checked id="tabswitch4">
                            <label class="custom-control-label" for="tabswitch4"></label>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="alert alert-success alert-dismissible fade mt-3 show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h5>Unlimited Access</h5>
                    Upgrade to plan to get access to unlimited reports
                    <br/>
                    <a href="javascript: void(0);" class="btn btn-outline-success mt-3 btn-sm">Upgrade<i class="ml-1 mdi mdi-arrow-right"></i></a>
                </div>

            </div>
            <div class="tab-pane show active" id="messages1">
                <div>
                    <div class="inbox-widget">
                        <h5 class="mt-0">Recent</h5>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-2.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-3.jpg" class="rounded-circle" alt=""> <i class="away user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-4.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-5.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-6.jpg" class="rounded-circle" alt=""> <i class="user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>

                        <hr/>
                        <h5>Favorite <span class="float-right badge badge-pill badge-danger">18</span></h5>
                        <hr/>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-7.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kennith</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-3.jpg" class="rounded-circle" alt=""> <i class="busy user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-10.jpg" class="rounded-circle" alt=""> <i class="online user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kimberling</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-4.jpg" class="rounded-circle" alt=""> <i class="user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('ui/backend')}}/images/users/avatar-9.jpg" class="rounded-circle" alt=""> <i class="away user-status"></i></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Leonareade</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>

                        <div class="text-center mt-2">
                            <a href="javascript:void(0);" class="text-muted"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                        </div>

                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
