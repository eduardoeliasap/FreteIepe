<!DOCTYPE html>
<html>
<head runat="server">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/reset.css') }}" />
    <!-- RESET -->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/main.css') }}" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/2col.css') }}" title="2col" />
    <!-- DEFAULT: 2 COLUMNS -->
    <link rel="alternate stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/1col.css') }}" title="1col" />
    <!-- ALTERNATE: 1 COLUMN -->
    <!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
    <!-- MSIE6 -->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/style.css') }}" />
    <!-- GRAPHIC THEME -->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ url('assets/site/css/mystyle.css') }}" />
    <!-- WRITE YOUR CSS CODE HERE -->
    <script type="text/javascript" src="{{ url('assets/site/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/site/js/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/site/js/toggle.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/site/js/ui.core.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/site/js/ui.tabs.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".tabs > ul").tabs();
        });
    </script>
    <title>.:: FreteIepê ::.</title>
</head>
<body>
{{--  Abrir formulário --}}
    {!! Form::open(['url' => '/cliente/create', 'method' => 'POST']) !!} 
    <form runat="server" class="booking-form">
        <div id="main">
            <div id="tray" class="box">

                <p class="f-left box">
                    <span class="f-left" id="switcher">
                        <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column">
                            <img src="{{ url('assets/site/design/switcher-1col.gif') }}" alt="1 Column" /></a>
                        <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns">
                            <img src="{{ url('assets/site/design/switcher-2col.gif') }}" alt="2 Columns" /></a>
                    </span>

                    Projeto: <strong>FreteIepê 1.0</strong>

                </p>

                <p class="f-right"><!--User:--> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="Logout.aspx" id="logout">Log out</a></strong></p>

            </div>

            <hr class="noscreen" />

            <!-- Menu -->
            <div id="menu" class="box">
                
            </div>


            <hr class="noscreen" />


            <div id="cols" class="box">


                <div id="aside" class="box">

                    <!--<div class="padding box">
                        <p id="btn-create" class="box"><a href="#"><span>&nbsp;</span></a></p>
                    </div> -->

                    <ul class="box">
                        <li ><a href="#">Principal</a></li>
                        <li id="submenu-active"><a href="#">Cadastros</a></li>
                        <ul>
                          <li><a href="{!! url('cliente/index'); !!}">Clientes</a></li> 
                          
                        </ul>
                        <li><a href="#">Movimentação</a></li>
                        <ul>
                            
					    </ul>
                        <li><a href="#">Consultas</a></li>
                        <ul>
                        
                        </ul> 
                                             
                        <li><a href="#">Relatórios</a></li>
                        <ul>
                            
					    </ul>
                        <li><a href="#">Segurança</a></li>
                        <ul>
						
					    </ul>                                          
                        <li><a href="#">Sair</a></li>
                    </ul>

                </div>

                <hr class="noscreen" />
                

                <div id="content" class="box">                    
                    <h1>Sistema de frete - Iepê</h1>
                    <div class="booking-form_controls">                   
                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}                   
                    </div>   

                    @yield('Content-Principal')
                </div>
                
            </div>
            <hr class="noscreen" />
            
            <div id="footer" class="box">

                <p class="f-left">&copy; 2019 FP Soluções Tecnológicas LTDA</a>, Todos os direitos reservados &reg;</p>

                <!--<p class="f-right">Templates by <a href="http://www.betablue.com.br/">Adminizio</a></p>-->

            </div>

        </div>
    </form>
</body>
</html>