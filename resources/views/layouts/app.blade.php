<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>
            @if(@isset($title))
            {{$title}}
            @else
            Kraftivo home page
            @endif
        </title>
    </head>
    <body>
        @section('sidebar')
        This is the master sidebar.
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>