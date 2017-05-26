<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dr. Dinheiro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsivo.css">
</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/" class="navbar-brand"><img src="/img/LOGO_DrDinheiro.png" alt="Logo" class="logo-brand"/></a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="li-hover-nav"><a href="/" style="color:white"><i class="fa fa-home" aria-hidden="true"></i> INÍCIO</a></li>
                    <li class="li-hover-nav"><a href="#sobre" style="color:white"><i class="fa fa-user" aria-hidden="true"></i> SOBRE</a></li>
                    <li class="li-hover-nav"><a href="/formulario" style="color:white"><i class="fa fa-heart" aria-hidden="true"></i> CADASTRE-SE</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="img-header">
        <header class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <div class="texto-header">
                        <h2>
                            <span class="header-back">CADASTRE-SE E FIQUE </span><br/>
                            <span class="header-back">POR DENTRO DE TODAS</span><br/>
                            <span class="header-back">AS NOSSAS DICAS </span><br/>
                        </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    {!! Form::open(array('url' => '/formulario','class' => 'form-horizontal')) !!}
                    {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
                    {!! Form::hidden('motivo','Formulario topo')!!}
                    <div class="texto-header">
                        <input class="form-control input-header" type="text" name="nome" placeholder="Nome Completo" />
                        <hr class="hr-header">
                        <input class="form-control input-header" type="text" name="email" placeholder="Email" />

                        <button type="submit" class=" btn btn-default pull-right btn-sm botao-header">Enviar</button>

                    </div>

                    {!! Form::close() !!} 
                </div>
            </div>
        </header>
    </div>

    <div class="small-border-header"></div>

    <hr id="fixTop" />