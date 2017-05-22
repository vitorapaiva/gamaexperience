<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doutor Dinheiro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:100,300,400,600,700%7COpen+Sans:400,500,600" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/c66c33c7d6.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-99615858-1', 'auto');
      ga('send', 'pageview');

    </script>   
</head>

<body ng-app="MyInvest">
    <div class="img-header">
        <header class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 texto-header ">
                    <h2>Conheça o novo especialista em finanças:<br>DR. DINHEIRO!</h2>
                    <h3>Ele sabe tudo de dinheiro e vai lhe ajudar a sair do aperto!<br>
                        Aprenda como ter dinheiro, pagar suas dívidas, abrir seu negócio e realizar seu sonho!<br>
                        Consulte o Dr.Dinheiro e cure o seu bolso!</h3>

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
                    <h3 class="text-center">O DINHEIRO PODE TRABALHAR PARA VOCÊ!</h3>
                    <p class="text-center">As pessoas que fazem o dinheiro trabalhar conseguem pagar todas as contas em dia, realizar sonhos, comprar bens e viajar! E acredite, não é difícil! O Dr. Dinheiro vai te ensinar o que a escola não te ensinou: Pagar dívidas, Economizar, Investir e Ganhar Dinheiro! <br>
                    Estamos preparando um conteúdo totalmente gratuito, com as melhores dicas da área!<br>
                    Preencha o formulário abaixo e assim que tivermos tudo pronto, lhe informamos!<br>
                    </p>
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
                        <p>NUNCA FOI TÃO FÁCIL APRENDER COMO PAGAR SUAS DÍVIDAS!</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-heart-o fa-5x" aria-hidden="true"></i>
                        <p>VOCÊ IRÁ SE APAIXONAR POR NOSSAS DICAS!</p>
                    </div>

                    <div class="col-md-4">
                        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                        <p>SUA FAMÍLIA SERÁ MAIS COMPLETA E MAIS FELIZ!</p>
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
                        <h3 class="text-center demostracao-texto">NÃO PERCA NENHUMA DICA!!</h3>
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
                            <label>Qual assunto mais lhe interessa?</label>
                            <select class="form-control tamanho-input" name="motivo" ng-model="fc.motivo">
                            <option value=""></option>
                            <option value="Como pagar minhas dívidas?">Como pagar minhas dívidas?</option>
                            <option value="Como investir dinheiro?">Como investir dinheiro?</option>
                            <option value="Como reformar minha casa?">Como reformar minha casa?</option>
                            <option value="Como adquirir um bem?">Como adquirir um bem?</option>
                        </select>
                        </div>

                        <small><small>Campos marcados com * são obrigatórios</small></small>

                        <div>
                            <button type="submit" class="btn btn-primary pull-right btn-lg botao-info-cor" ng-click="fc.enviarServidor()">Enviar</button>
                        </div>

                    </section>
                </div>
            </div>
        </section>
    </div>
    {!! Form::close() !!} 


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js" type="text/javascript"></script>
    <script src="css/app.js" type="text/javascript"></script>
</body>

</html>