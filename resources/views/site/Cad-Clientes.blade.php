<!doctype html>
<html lang="en">
<head runat="server">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
    <title>.:: FreteIepê ::.</title>
</head>
<body>
    {{--  Abrir formulário --}}
    {!! Form::open(['url' => '/cliente/store', 'method' => 'POST']) !!} 
    <form runat="server" class="form-inline"  autocomplete="off">
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
            <div id="cols" >
                <div id="aside" >
                    <ul class="box">
                        <li ><a href="{!! url('site/principal'); !!}">Principal</a></li>
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

                <div id="content" >                    
                    <h1>Sistema de frete - Iepê</h1>
                    
                    <br \>
                    <div class="form-group mb-2">   
                        <div class="form-group mb-2">
                        
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            Código:
                            {!! Form::text('txtCodigo', null, ['class' => 'form-control', 'placeholder' => 'Código:', 'maxlength' => 5, 'style' => 'width:150px;']) !!}
                        </div>                        
                        <button class="btn"><i class="fa fa-home"></i><a class="btn btn-default btn-close" href="{{ url('cliente/research') }}">Consultar</a></button>
                        
                    </div>
                    <br \>
                    <div class="form-row">
                        Nome completo:
                        {!! Form::text('txtNome', null, ['class' => 'form-control', 'placeholder' => 'Nome:', 'maxlength' => 45, 'autofocus' => 'autofocus']) !!}
                    </div>
                    <br \>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Endereço residencial:
                            {!! Form::text('txtEndereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço:', 'maxlength' => 60]) !!}
                        </div>
                        <div class="form-group col-md-6">
                            Numero do imóvel:
                            {!! Form::text('txtNumero', null, ['class' => 'form-control', 'placeholder' => 'Numero:', 'maxlength' => 5]) !!}
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Complemento:
                            {!! Form::text('txtComplemento', null, ['class' => 'form-control', 'placeholder' => 'Complemento:', 'maxlength' => 25]) !!}
                        </div>
                        <div class="form-group col-md-6">
                            Ponto de referência:
                            {!! Form::text('txtReferencia', null, ['class' => 'form-control', 'placeholder' => 'Referência:', 'maxlength' => 45]) !!}
                        </div>
                    </div>
   
                    <div class="form-row">
                        Email@:
                        {!! Form::text('txtEmail', null, ['class' => 'form-control', 'placeholder' => 'Email:', 'maxlength' => 45]) !!}
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Telefone 1:
                            {!! Form::text('txtTelefone01', null, ['class' => 'form-control', 'placeholder' => 'Contato 1:', 'maxlength' => 15]) !!}
                        </div>
                        <div class="form-group col-md-6">
                            Telefone 2:
                            {!! Form::text('txtTelefone02', null, ['class' => 'form-control', 'placeholder' => 'Contato 2:', 'maxlength' => 15]) !!}
                        </div>
                    </div>
 
                    <div class="booking-form_controls"> 
                        <button type="button" class="btn btn-outline-secondary btn-sm"><a class="btn btn-default btn-close" href="{{ url('cliente/index') }}">Cancel</a></button>
                        <button class="btn btn-primary" type="submit">{!! Form::submit('Gravar', ['class' => 'btn btn-primary', 'style' => 'width:100px;']) !!}</button>
                    </div>      
                   
                </div>
                
            </div>

            <hr class="noscreen" />
            
            <div id="footer" class="box">
                <p class="f-left">&copy; 2019 FP Soluções Tecnológicas LTDA</a>, Todos os direitos reservados &reg;</p>
                <!--<p class="f-right">Templates by <a href="http://www.betablue.com.br/">Adminizio</a></p>-->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </form>
    {!! Form::close() !!} {{-- Fechar formulário --}}
</body>
</html>