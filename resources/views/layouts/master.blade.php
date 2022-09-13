<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts._head')
    </head>
    <body>

        <!-- Responsive navbar-->
        @include('layouts._nav')

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                @yield('header')
            </div>
        </header>

        <!-- Page content-->
        <div class="container">
            @yield('content')
        </div>

        <!-- Footer-->
        @include('layouts._footer')

        <!-- Bootstrap core JS-->
        @include('layouts._script')
        
    </body>
</html>
