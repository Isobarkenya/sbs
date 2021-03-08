<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @if(config('blog.services.googleAnalyticsID'))
            @include('blog.partials.analytics')
        @endif
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Safaricom SBS</title>
        @if (trim($__env->yieldContent('template_description')))
            <meta name="description" content="@yield('template_description')">
        @endif
        <meta name="author" content="{{ config('blog.author') }}">
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- Dynamic RSS Feed Calls --}}
        @include('feed::links')

        {{-- Fonts --}}
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--StyleSheet-->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

        {{-- Styles --}}

        <link href="{{'css/style.css' }}" rel="stylesheet">
        <script src="{{'js/google.api.js'}}" defer></script>


        @if($theme)
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @stack('head')
    </head>
    <body>

            @include('blog.partials.nav')


                @yield('content')

           @include('blog.partials.footer')


        {{-- Scripts --}}
        <script src="{{'js/jquery.js' }}" defer></script>
      
        <script src="{{'js/main.js'}}" defer></script>

        @stack('scripts')
    </body>
</html>
