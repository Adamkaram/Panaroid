@include('layout.header')
@include('layout.Navbar')

<!-- Main Content -->
<section class="content" >

        <div class="block-header">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        </div>
                        </div>
                        </div>
                        <div class="container-fluid">
                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                        <div class="body">
                        
                        @include('layout.message')
                        </div>
                        </div>
                        </div>
                        </div>
                <div class="row clearfix">
        @yield('content')
        </div>


</section>

@include('layout.footer')

