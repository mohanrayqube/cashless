<!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{url('/')}}"><img class="main-logo" src="{{asset('img/logo/logo.svg')}}" alt="" /></a>
                <strong><a href="{{url('/')}}"><img src="{{asset('img/logo/logo.svg')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="<?php if($title == 'Dashboard'){ echo 'active'; } ?>">
                            <a title="Dashboard Page" href="{{ url('/') }}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li class="">
                            <a title="Dashboard Page1" href="" aria-expanded="false"><span class="educate-icon educate-home icon-wrap"></span> <span class="mini-click-non">Employees</span></a>
                        </li>
                        <li class="">
                            <a title="Dashboard Page" href="" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Projects</span></a>
                        </li>                        
                       
                        <li class="">
                            <a class="has-arrow" href="#">
                                   <span class="educate-icon educate-pages icon-wrap"></span>
                                   <span class="mini-click-non">Tasks</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href=""><span class="mini-sub-pro">Task list</span></a></li>
                                <li><a title="Dashboard v.1" href=""><span class="mini-sub-pro">Task Activity list</span></a></li>
                            </ul>
                        </li>                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->