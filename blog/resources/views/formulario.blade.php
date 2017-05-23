@include('partials.head')

    {!! Form::open(array('url' => '/formulario','class' => 'form-horizontal')) !!}
    {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
    <section class="container" ng-controller="FormController as fc">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">
                    <u>
                        << Voltar</u>
                </a>
            </div>
            @if (count($errors) > 0)
            <div class="col-md-12">
                <div class="alert alert-danger col-md-6 col-md-offset-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>        
            @endif
            <div class="col-md-12">
                <div class="col-md-6 col-md-offset-3">
                    <section class="well well-lg clearfix well-input-size">
                        <h3 class="text-center demostracao-texto">Para continuar lendo, preencha abaixo:</h3>
                        <div class="form-group">
                            <label>Nome completo*</label>
                            <input type="text" name="nome" placeholder="Seu nome completo" class="form-control tamanho-input">
                        </div>

                        <div class="form-group">
                            <label>E-mail*</label>
                            <input id="email" type="text" name="email" placeholder="Seu e-mail" class="form-control tamanho-input" ng-model="fc.inputEmail" ng-keyup="fc.verificarEmail()"
                                ng-class="{'input-erro': fc.emailError}">
                        </div>

                        <div class="form-group">
                            <label>Qual assunto mais lhe interessa?</label>
                            <select class="form-control tamanho-input" name="motivo">
                                <option value=""></option>
                                <option value="Realizar um sonho">Realizar um sonho</option>
                                <option value="Como pagar minhas dívidas?">Como pagar minhas dívidas?</option>
                                <option value="Como investir dinheiro?">Como investir dinheiro?</option>
                                <option value="Como reformar minha casa?">Como reformar minha casa?</option>
                                <option value="Como adquirir um bem?">Como adquirir um bem?</option>
                            </select>
                        </div>

                        <small><small>Campos marcados com * são obrigatórios</small></small>

                        <div>
                            <button type="submit" class="btn btn-primary pull-right btn-lg botao-info-cor" >Continuar</button>
                        </div>

                    </section>

                </div>
            </div>
        </div>        
    </section>
    {!! Form::close() !!} 

@include('partials.footer')