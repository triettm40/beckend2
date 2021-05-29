<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('page');
    </head>
    <body>
    @include('header');
        <div class="container">
            @yield('content')
        </div>
        @include('footer');
    </body>
</html>