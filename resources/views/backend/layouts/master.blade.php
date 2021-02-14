<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>@yield('title', 'Roles Admin Panel')</title>

    @include('backend.partials.style')
    @yield('styles')

</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('backend.partials.sidebar')
        <!-- TopBar -->
        @include('backend.partials.header')
        <!-- Topbar -->

        <!-- Container Fluid-->

        @yield('admin-content')
        <!--Row-->
        <!-- Modal Logout -->

        <!---Container Fluid-->
    </div>
    <!-- Footer -->
    @include('backend.partials.footer')
    <!-- Footer -->
    {{-- </div>
  </div> --}}

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('backend.partials.scripts')
    @yield('scripts')
    @include('sweetalert::alert')
</body>

</html>
