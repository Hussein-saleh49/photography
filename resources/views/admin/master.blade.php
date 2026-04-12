<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body class="sb-nav-fixed">
    @include('admin.partials.navbar')
    <div id="layoutSidenav">
        @include('admin.partials.sidebar')

        <div id="layoutSidenav_content">
            @yield('content')
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.scripts')
   
</body>

</html>
