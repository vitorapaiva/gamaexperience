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
            @include('partials.sideform')
        </div>
    </section>

    @include('partials.footer')

