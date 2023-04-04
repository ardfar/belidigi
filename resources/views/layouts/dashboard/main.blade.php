<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    @include('layouts.dashboard.head')
    <!-- END: Head -->
    <body class="main">
        @include('sweetalert::alert')
        <!-- BEGIN: Mobile Menu -->
        @include('layouts.dashboard.mobilemenu')
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        @include('layouts.dashboard.topbar')
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                @include('layouts.dashboard.sidemenu')
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
               @yield('content')
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('js/dashboard/app.js') }}"></script>
        <script src="{{ asset('js/dashboard/timing.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>