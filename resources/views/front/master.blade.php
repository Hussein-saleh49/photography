<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')

<body>

   
    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        @include('front.partials.sidebar')
        <div id="colorlib-main">
            @yield('content')
            @include('front.partials.footer')
        </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    @include('front.partials.loader')


    @include('front.partials.scripts')
</body>

</html>
