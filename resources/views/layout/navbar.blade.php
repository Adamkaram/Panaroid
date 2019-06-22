<body class="theme-green rtl">








             <!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">

        <li>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    <a href="{{ url('/') }}" class="mega-menu" data-close="true"><i class="zmdi zmdi-account-circle"></i></a>
                    <a href="{{ url('/login') }}" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>

                    @else
                    <a href="{{ url('/login') }}" class="mega-menu" title="log in" ><i class="zmdi zmdi-account"></i></a>
                    <a href="{{ url('/register') }}"     title="Regiset " ><i class="zmdi zmdi-account-add"></i></a>

                    @endif
                </div>
            @endif
            
             </li>
        <li>

                <!-- logo -->
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="logopana.html"><img  src="{{asset('images/logopana.svg')}}" width="30" alt="panaroid"><span class="m-l-10">Panaroid</span></a>
            </div>

            <!-- contac list / mail / close-toggle -->
        </li>

        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="hidden-md-down"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li class="float-right">
            <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
        </li>
    </ul>
</nav>






<!-- Left Sidebar -->
<aside id="rightsidebar" class="sidebar">
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN</li>

                    <!-- Dashboard -->
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                        <ul class="ml-menu">
                            <li><a href="index.html">Main</a> </li>
                            <li><a href="dashboard-rtl.html">RTL</a></li>
                            <li><a href="index2.html">Horizontal</a></li>
                            <li><a href="ec-dashboard.html">Ecommerce</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>

                        <!-- App -->
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>
                            <li><a href="blog-dashboard.html">Blog</a></li>
                        </ul>
                    </li>

                    <!-- Ecommerce -->
                    <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                        <ul class="ml-menu">
                            <li class="active"> <a href="ec-dashboard.html">Dashboard</a></li>
                            <li> <a href="/Product">Product</a></li>
                            <li> <a href="ec-product-List.html">Product List</a></li>
                            <li> <a href="ec-product-detail.html">Product detail</a></li>
                        </ul>
                    </li>
                    <!-- Users -->
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Users</span> </a>
                        <ul class="ml-menu">

                            <li> <a href=" ">Normal User</a> </li>
                            <li> <a href=" ">super user </a> </li>
                            <li> <a href=" ">Moderator </a> </li>
                            <li> <a href=" ">Admins </a> </li>

                        </ul>
                    </li>





                </ul>
            </div>
        </div>
    </div>
</aside>




<!-- Main Content -->
