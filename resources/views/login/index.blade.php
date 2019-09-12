<!DOCTYPE html>
<html>
<head>
    <title>.:: FreteIepê ::.</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="{{ url('assets/login/css/grid.css') }} ">
    <link rel="stylesheet" href="{{ url('assets/login/css/style.css') }} ">
    <link rel="stylesheet" href="{{ url('assets/login/css/booking.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/login/css/jquery.fancybox.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/login/css/owl-carousel.css') }} " />

    <script src="{{ url('assets/loginjs/jquery.js') }}"></script>
    <script src="{{ url('assets/loginjs/jquery-migrate-1.2.1.js') }}"></script>

    <script src="{{ url('assets/login/js/device.min.js') }}"></script>
</head>
<body>
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => '/user/index', 'method' => 'POST']) !!} 
    <div class="page">
        <header class="vide" data-vide-bg="video/video-bg">
    <div class="container vide_content">
      <div class="brand">
        <img src="images/logo.png" alt=""/>

        <h1 class="brand_name">          
            FreteIepê      
        </h1>
        <p class="brand_slogan">
          FP Soluções Tecnológicas LTDA
        </p>
      </div>
       
        <form runat="server" class="booking-form">
            
                <div class="tmInput">
                  {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email:', 'maxlength' => 45, 'autofocus' => 'autofocus']) !!}
                </div>
                <div class="tmInput">
                  {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'senha:', 'maxlength' => 15]) !!}
                </div>
                <div class="booking-form_controls">                   
                  {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}                   
                </div>       
            
        </form>
           
    </div>
  </header>    

  <footer>
        <div class="well5 center">
          <div class="container">
            <!--<a href='#'><img src="images/tm-logo.png" alt="FP Soluções Tecnológicas"/></a>-->
          </div>
        </div>
  </footer>
    </div>

    <script src="{{ url('assets/login/js/script.js') }}"></script>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</body>
</html>