<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doutor Dinheiro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700%7COpen+Sans:400,500,600" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/c66c33c7d6.js"></script>
</head>

<body ng-app="MyInvest">

    <div class="img-header">
        <header class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 texto-header ">
                    <h2>O CREDITO QUE VC PRECISA!</h2>
                    <h3>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica,
                        sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation
                        e li plu commun vocabules.</h3>

                </div>
            </div>
        </header>
    </div>


    <section class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="col-md-6 texto-explicao">
                    <img src="https://s-media-cache-ak0.pinimg.com/736x/e4/70/4a/e4704a3db8cebf1609175f4456661238.jpg" class="center-block" />
                </div>

                <div class="col-md-6 texto-explicao" style="padding-top: 55px">
                    <h3 class="text-center">ALGUM TITULO</h3>
                    <p class="text-center">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica,
                        sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation
                        e li plu commun vocabules.</p>
                </div>

            </div>
        </div>
    </section>

    <div class="well well-lg texto-explicativo clearfix">
        <section class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="col-md-4">
                        <i class="fa fa-money fa-5x" aria-hidden="true"></i>
                        <p>MOTIVO PELO QUAL VC DEVERIA DEIXAR SEU EMAIL 1</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-heart-o fa-5x" aria-hidden="true"></i>
                        <p>MOTIVO PELO QUAL VC DEVERIA DEIXAR SEU EMAIL 2</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                        <p>MOTIVO PELO QUAL VC DEVERIA DEIXAR SEU EMAIL 3</p>
                    </div>

                </div>

            </div>
        </section>
    </div>
     {!! Form::open(array('url' => '/','class' => 'form-horizontal')) !!}
     {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
    <div class="imagem-background">
        <section class="container" ng-controller="FormController as fc">
                @if (count($errors) > 0)
                <div class="row">
                    <div class="alert alert-danger col-md-6 col-md-offset-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <section class="well well-lg clearfix well-input-size">
                        <h3 class="text-center demostracao-texto">Solicite uma demostracão</h3>
                        <div class="form-group">
                            <label>Nome completo*</label>
                            <input type="text" name="nome" placeholder="Seu nome completo" class="form-control tamanho-input" ng-model="fc.inputName">
                        </div>

                        <div class="form-group">
                            <label>E-mail*</label>
                            <input id="email" type="text" name="email" placeholder="Seu e-mail" class="form-control tamanho-input" ng-model="fc.inputEmail" ng-keyup="fc.verificarEmail()"
                                ng-class="{'input-erro': fc.emailError}">
                        </div>

                        <div class="form-group">
                            <label>Cite o motivo principal</label>
                            <select class="form-control tamanho-input" name="motivo" ng-model="fc.motivo">
                            <option value=""></option>
                            <option value="1">Razão 1</option>
                            <option value="2">Razão 2</option>
                            <option value="3">Razão 3</option>
                        </select>
                        </div>

                        <small><small>Campos marcados com * são obrigatórios</small></small>

                        <div>
                            <button type="button" class="btn btn-primary pull-right btn-lg botao-info-cor" ng-click="fc.enviarServidor()">Ver mais informacão</button>
                        </div>

                    </section>
                </div>
            </div>
        </section>
    </div>
    {!! Form::close() !!} 


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js" type="text/javascript"></script>
    <script src="app.js" type="text/javascript"></script>
</body>

</html>