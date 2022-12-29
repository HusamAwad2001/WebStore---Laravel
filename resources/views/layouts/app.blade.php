<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.seffy.radixtouch.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 18:43:57 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SeffyHospital" />
    <title>Store</title>

    <!-- google font -->

    @include('pages.header')

 </head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-blue">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                     <!-- logo start -->
                <div class="page-logo">
                    <a href="">
                    <span class="logo-icon fa fa-heartbeat fa-rotate-45"></span>
                    <span class="logo-default" >Accounting</span> </a>
                </div>
                <!-- logo end -->
                 	<ul class="nav navbar-nav navbar-left in">
						<li><a href="javascript:void(0)" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
						<li>
							<form class="search-form-opened" action="#" method="GET">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search..."
										name="query"> <span class="input-group-btn"> <a
										href="javascript:;" class="btn submit"> <i
											class="icon-magnifier"></i>
									</a>
									</span>
								</div>
							</form>
						</li>
					</ul>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">

                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->

                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="{{asset('site/assets/img/dp.svg')}}" />
                                <span class="username username-hide-on-mobile"> 
                                @if (Auth::user())
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                @endif     
                                </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <i class="icon-logout"></i>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>



                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->


        <!-- start color quick setting -->
        <div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
				<li><p class="selector-title">Main Layouts</p></li>
				<li class="complete"><div class="theme-color sidebar-theme">
				<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
				</div></li>

             	<li><p class="selector-title">Header Brand color</p></li>
             	<li class="theme-option"><div class="theme-color logo-theme">
             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
				<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>

             	</div></li>
             	<li><p class="selector-title">Header color</p></li>
             	<li class="theme-option"><div class="theme-color header-theme">
             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
             	</div></li>
			</ul>
			</div>
		</div>
		<!-- end color quick setting -->


        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="{{asset('admin/img/dp.svg')}}" class="img-circle user-img-circle" alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p>
                                            @if (Auth::user())
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                @endif
                            </p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item start active open">
                                <a href="{{route('home')}}" class="nav-link "> <i class="fa fa-tachometer"></i> <span class="title">Dashboard</span>
                                </a>
                            </li>

                            @include('pages.navbar')

	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                    @yield('content')
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab"> <i class="icon-settings"></i> Settings
                            </a>
                        </li>
                    </ul>



                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->


        <!-- start footer -->
        <div class="page-footer">

            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->



    </div>

    @include('pages.footer')

  </body>

</html>
