@if(session('id_usuario')==NULL)
    <div class="col-md-4 form-responsivo">
        <section id="formFix" data-spy="affix">
            <div class="col-md-12">
                <section class="well well-lg clearfix well-input-size">
                    @if (count($errors) > 0)
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <h4 class="text-center">NÃO PERCA NENHUMA DICA!!</h4>
                    {!! Form::open(array('url' => '/formulario','class' => 'form-horizontal')) !!}
                    {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
                    <div class="form-group">
                        <label>Nome completo*</label>
                        <input type="text" name="nome" placeholder="Seu nome completo" class="form-control tamanho-input">
                    </div>

                    <div class="form-group">
                        <label>E-mail*</label>
                        <input id="email" type="text" name="email" placeholder="Seu e-mail" class="form-control tamanho-input">
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
                        <button type="submit" class="btn btn-primary pull-right btn-lg botao-info-cor">Ver mais informacão</button>
                    </div>
                    {!! Form::close() !!} 
                </section>
            </div>

        </section>
    </div>
    @else
    <div class="col-md-4 form-responsivo">
        
        <section id="formFix" data-spy="affix" >                   
            
            <div class="col-md-12">
                <section class="well well-lg clearfix well-input-size">
                    <h4 class="text-center">AGRADECEMOS O INTERESSE</h3>
                    
                    Como parte de nossa proposta de compartilhamento de conhecimento, disponibizamos abaixo conteúdos que podem lhe ser relevantes:<br>
                        - 07 passos para tirar seu nome do Serasa - Clique <a href="/img/infografico-07passos.jpeg" target="_blank" class="blog-links">aqui</a>

                </section>                        
            </div>
            
        </section>               
    </div>
    @endif