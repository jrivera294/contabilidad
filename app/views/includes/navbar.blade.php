<?php $path = Request::path(); ?>
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Contable3000</a>

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{$path === 'inicio' ? 'active' : '';}}">
                    <a href="{{URL::to('/inicio')}}">Inicio</a>
                </li>
                <li class="{{$path === 'cuentas' ? 'active' : '';}}">
                    <a href="{{URL::to('/cuentas')}}">Cuentas</a>
                </li>
                <li class="{{$path === 'operaciones' ? 'active' : '';}}">
                    <a href="{{URL::to('/operaciones')}}">Operaciones</a>
                </li>
                <li class="{{$path === 'libroDiario' ? 'active' : '';}}">
                    <a href="{{URL::to('/libroDiario')}}">Libro diario</a>
                </li>
                <li class="{{$path === 'libroMayor' ? 'active' : '';}}">
                    <a href="{{URL::to('/libroMayor')}}">Libro mayor</a>
                </li>
                <li class="{{$path === 'balanceComprobacion' ? 'active' : '';}}">
                    <a href="{{URL::to('/balanceComprobacion')}}">Balance de comprobación</a>
                </li>
                <li class="{{$path === 'totalizar' ? 'active' : '';}}">
                    <a href="{{URL::to('/totalizar')}}">Totalizar</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <p class="navbar-text" >Bienvenido </p>
             <!--/ <li><a href="{{URL::to('/')}}">Desconectar</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
