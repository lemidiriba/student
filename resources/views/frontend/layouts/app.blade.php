<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{-- {{ style(mix('css/frontend.css')) }} --}}

    <link rel="stylesheet" href="{{ asset('./css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">

    @stack('after-styles')




</head>

<body>
    @include('includes.partials.read-only')

    <div id="app">
        @include('includes.partials.logged-in-as')
        @include('frontend.includes.nav')


        @include('includes.partials.messages')
        @yield('content')
    </div><!-- #app -->

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/frontend.js')) !!}
    @stack('after-scripts')

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('./js/template/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('./js/template/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('./js/template/popper.min.js') }}"></script>
    <script src="{{ asset('./js/template/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('./js/template/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('./js/template/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./js/template/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('./js/template/wow.min.js') }}"></script>
    <script src="{{ asset('./js/template/animated.headline.js') }}"></script>
    <script src="{{ asset('./js/template/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('./js/template/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('./js/template/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('./js/template/contact.js') }}"></script>
    <script src="{{ asset('./js/template/jquery.form.js') }}"></script>
    <script src="{{ asset('./js/template/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('./js/template/mail-script.js') }}"></script>
    <script src="{{ asset('./js/template/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('./js/template/plugins.js') }}"></script>
    <script src="{{ asset('./js/template/main.js') }}"></script>

    @include('includes.partials.ga')
</body>

</html>