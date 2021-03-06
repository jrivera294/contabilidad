<!DOCTYPE html>
<html lang="es">

<head>
    @include('includes.head')
</head>

<body>

    @include('includes.navbar')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @include('includes.errores')
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="cointainer" style="padding-left:10px; padding-right:10px;">
        @yield('content')
    </div>
    <!-- Javascript includes -->
    @include('includes.js')
    <!-- /.Javascript includes -->

    <!-- Javascripts on page -->
    @yield('page_scripts')
    <!-- Javascripts on page -->
</body>

</html>
