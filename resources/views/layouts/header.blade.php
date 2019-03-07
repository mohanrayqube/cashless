<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="{{url('/')}}"><img class="main-logo" src="{{asset('img/logo/logo.png')}}" id="main-logo" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">                    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                            
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                        <a href="{{ URL::previous() }}" class=""><button class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"><i class="fa fa fa-arrow-left big-icon"></i></button></a>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="{{url('users')}}" class="nav-link">User</a>
                                                </li>
                                                <!-- <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li> -->
                                                <!-- <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <!-- <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a> -->
                                                <!-- <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date"></span>
                                                                        <h2></h2>
                                                                        <p style="min-width: 300px"></p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div> -->
                                            </li>
                                            <li class="nav-item"><!-- <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a> -->
                                                <!-- <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="message-menu row">
                                                            <li class="col-sm-12">
                                                                 <a href="#"> 
                                                                    <div class="message-img col-sm-5">
                                                                        <img class="col-sm-12" src="" alt="">
                                                                    </div>
                                                                    <div class="notification-content col-sm-7">
                                                                        <span class="message-date"></span>
                                                                        <h5></h5>
                                                                        <p style="min-width: 100px; color:#000;"></p>
                                                                    </div>
                                                                 </a> 
                                                                <hr width="100%">
                                                            </li>
                                                        
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div> -->
                                            </li>


                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    @if (Route::has('register'))
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    @endif
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="" alt="" height="600" width="600" />
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <!-- <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li> -->
                                                        <li><a href=""><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="">
                                                            <span class="edu-icon edu-locked author-log-ic"></span>Change Password
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href=""
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>{{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </li>
                                            @endguest

                                            
                                            <li class="nav-item nav-setting-open">
                                                <!-- <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i>
                                                    
                                                        <span class="indicator-ms" style="background: red;"></span>
                                                </a> -->

                                                <!-- <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">Time</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#leaves" title="pending leave mark">Leaves</a>
                                                            
                                                                <span class="indicator-ms" style="background: red; top: 10px;right: 10px;"></span>
                                                           
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-comments-o"></i> Log Time</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                           <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <p><b></b></p>

                                                                                            <div class="notes-img">
                                                                                                <img src="" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <h5></h5>
                                                                                                <h6></h6>
                                                                                                <p style="min-width: 265px"></p>
                                                                                                <span></span>
                                                                                                <span style="float: right"><i></i></span>
                                                                                            </div>      
                                                                                            <br>        
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                    </ul>
                                                                </div>                                                                
                                                            </div>                                                            
                                                            <div class="notification-view">
                                                                <a href="">View All Daily Sheet</a>
                                                            </div>
                                                        </div>
                                                        <div id="leaves" class="tab-pane fade in">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-car"></i> 
                                                                        Leaves                                                                         
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                            <li style="min-width: 350px;">
                                                                                <div class="notes-list-flow">
                                                                                    <div title="User Name">
                                                                                        <span style="float: right;" title="Leave Type">                                                                                        
                                                                                        </span>
                                                                                    </div>
                                                                                    <div title="Apply date">
                                                                                        
                                                                                        <span style="float: right;">
                                                                                                                                                                                    
                                                                                        </span>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </li>
                                                                    </ul>
                                                                </div>                                                                
                                                            </div>                                                     
                                                                <div class="notification-view">
                                                                    <a href="">View All Leaves</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <!-- <li><a href="/">Dashboard</a></li> -->
                                    <li class="">
                                        <a title="Dashboard Page" href="{{ url('/') }}">Dashboard</a>
                                    </li>
                                        <li class="">
                                            <a title="Dashboard Page1" href="">Employees</a>
                                        </li>
                                    <li class="">
                                        <a title="Dashboard Page" href="">Projects</a>
                                    </li>

                                    
                                    <li>
                                        <a title="Landing Page" href="">Daily Sheet</a>
                                    </li>
                                    <li>
                                        <a title="Landing Page" href="">Assets</a>
                                    </li>
                                    <li>
                                        <a title="Landing Page" href="">Daily Sheet</a>
                                    </li>
                                    
                                    <li>
                                        <a title="Landing Page" href="">Attendance</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="collapse" data-target="#Charts" href="#">
                                           Task
                                           <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                        </a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a title="Dashboard v.1" href="">Task list</a></li>
                                            <li><a title="Dashboard v.1" href="">Task Activity list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
<style type="text/css">
    p a {
    color: #000 !important;
    margin: 0px !important;
    display: inline !important;
}
</style>