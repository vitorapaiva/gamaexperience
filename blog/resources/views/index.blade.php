@include('partials.head')

    <section class="container">
        <div class="row responsivo-centralizar">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <img src="/img/freeimage-18962695-web.jpg" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="{{action('ContentController@mostraDemocratizacaoRealizarSonho')}}" class="blog-links">Realizar sonhos em um ano de crise?</a></h4>
                        <p class="texto-responsivo">Muito se falou em acesso ao crédito, programas de governo, isenções de IPI e outras iniciativas de estímulo ao consumo. Essas medidas geraram alguns resultados, mas a crise econômica, o aumento do desemprego...</p>
                        <a href="{{action('ContentController@mostraDemocratizacaoRealizarSonho')}}" class="blog-links">Saiba Mais</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6">
                        <img src="/img/freeimage-4011836-web.jpg" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="{{action('ContentController@mostraCincoPassos')}}" class="blog-links">Quer abrir seu próprio négocio? A gente pode ajudar.</a></h4>
                        <p class="texto-responsivo">Listamos aqui 5 passos para abrir seu negócio e te dar aquele ponta pé inicial que até agora ninguém conseguiu.</p>
                        <a href="{{action('ContentController@mostraCincoPassos')}}" class="blog-links">Saiba Mais</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                </div>


                <div class="col-md-12">
                    <div class="col-md-6">
                        <img src="/img/DSCN4665.JPG" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="{{action('ContentController@mostraCriseSePudesse')}}" class="blog-links">E se mesmo com a crise você pudesse viajar?</a></h4>
                        <p class="texto-responsivo">Se você é apaixonado por viagens assim como eu, mas tá com pouca grana, acho que algumas dicas podem te ajudar. Quem não gosta de viajar, não é verdade?</p>
                        <a href="{{action('ContentController@mostraCriseSePudesse')}}" class="blog-links">Saiba Mais</a>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <hr/>
                </div>

                <div class="col-md-12" >
                    <div class="col-md-6">
                        <img src="/img/DSC00164.JPG" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="{{action('ContentController@mostraDemocratizacaoTipoEmprestimo')}}" class="blog-links">Precisa pagar uma dívida urgente? Entenda qual é o melhor empréstimo a fazer!</a></h4>
                        <p class="texto-responsivo">O Dr. Dinheiro pesquisou, estudou e trouxe uma explicação fácil e detalhada dos tipos de empréstimos possíveis no Brasil. Tá afim de saber?</p>
                        <a href="{{action('ContentController@mostraDemocratizacaoTipoEmprestimo')}}" class="blog-links">Saiba Mais</a>
                    </div>
                </div>

                <div class="col-md-12" id="bottom-help2">
                    <hr/>
                </div>
            </div>
            @if(session('id_usuario')==NULL)
            <div class="col-md-4 form-responsivo">
                
                <section id="formFix" data-spy="affix" >                   
                    
                    {!! Form::open(array('url' => '/formulario','class' => 'form-horizontal')) !!}
                    {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
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
                            <h3 class="text-center">NÃO PERCA NENHUMA DICA!!</h3>
                            
                            <div class="form-group">
                                <label>Nome completo*</label>
                                <input  type="text" name="nome" placeholder="Seu nome completo" class="form-control tamanho-input">
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
                                <button type="submit" class="btn btn-primary pull-right btn-lg botao-info-cor" >Ver mais informacão</button>
                            </div>

                        </section>                        
                    </div>                    
                    {!! Form::close() !!} 
                </section>               
            </div>
            @else
            <div class="col-md-4 form-responsivo">
                
                <section id="formFix" data-spy="affix" >                   
                    
                    <div class="col-md-12">
                        <section class="well well-lg clearfix well-input-size">
                            <h3 class="text-center">AGRADECEMOS O INTERESSE</h3>
                            
                            Como parte de nossa proposta de compartilhamento de conhecimento, disponibizamos abaixo conteúdos que podem lhe ser relevantes:<br>
                                - 07 passos para tirar seu nome do Serasa - Clique <a href="/img/infografico-07passos.jpeg" target="_blank" class="blog-links">aqui</a>

                        </section>                        
                    </div>
                    
                </section>               
            </div>
            @endif
        </div>
    </section>

    @include('partials.footer')

