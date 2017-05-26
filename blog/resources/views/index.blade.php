@include('partials.head')
    
<section class="container">
    <div class="row responsivo-centralizar">

        @include('partials.sideform')

        <div class="col-md-8" id="conteudo">
            <div class="col-md-12">
                <div class="col-md-12">
                    <span class="label label-success">Democratização</span>
                </div>
                <div class="col-md-12">
                    <h3><a href="{{action('ContentController@mostraDemocratizacaoRealizarSonho')}}" class="blog-links">Realizar sonhos em um ano de crise?</a></h3>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 div-resize">
                        <img src="/img/freeimage-18962695-web.jpg" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <p>
                            Muito se falou em acesso ao crédito, programas de governo, isenções de IPI e outras iniciativas de estímulo ao consumo. Essas
                            medidas geraram alguns resultados, mas a crise econômica, o aumento do desemprego...
                        </p>
                        <p>
                            <a href="{{action('ContentController@mostraDemocratizacaoRealizarSonho')}}" class="link-blog">Saiba mais >></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr class="hr-verde" />
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <span class="label label-success">Negócios</span>
                </div>
                <div class="col-md-12">
                    <h3><a href="{{action('ContentController@mostraCincoPassos')}}" class="blog-links">Quer abrir seu próprio négocio? A gente pode ajudar.</a></h3>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 div-resize">
                        <img src="/img/freeimage-4011836-web.jpg" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <p>
                            Listamos aqui 5 passos para abrir seu negócio e te dar aquele ponta pé inicial que até agora ninguém conseguiu.
                        </p>
                        <p>
                            <a href="{{action('ContentController@mostraCincoPassos')}}" class="link-blog">Saiba mais >></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr class="hr-verde" />
            </div>


            <div class="col-md-12">
                <div class="col-md-12">
                    <span class="label label-success">Viagem</span>
                </div>
                <div class="col-md-12">
                    <h3><a href="{{action('ContentController@mostraCriseSePudesse')}}" class="blog-links">E se mesmo com a crise você pudesse viajar?</a></h3>
                </div>
                <div class="col-md-12">

                    <div class="col-md-6 div-resize">
                        <img src="/img/DSCN4665.JPG" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <p>
                            Se você é apaixonado por viagens assim como eu, mas tá com pouca grana, acho que algumas dicas podem te ajudar. Quem não
                            gosta de viajar, não é verdade?
                        </p>
                        <p>
                            <a href="{{action('ContentController@mostraCriseSePudesse')}}" class="link-blog">Saiba mais >></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr class="hr-verde" />
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <span class="label label-success">Democratização</span>
                </div>
                <div class="col-md-12">
                    <h3><a href="{{action('ContentController@mostraDemocratizacaoTipoEmprestimo')}}" class="blog-links">Precisa pagar uma dívida urgente? Entenda qual é o melhor empréstimo a fazer!</a></h3>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 div-resize">
                        <img src="/img/DSC00164.JPG" alt="Imagem verde" class="imagem-resize">
                    </div>
                    <div class="col-md-6">
                        <p>
                            O Dr. Dinheiro pesquisou, estudou e trouxe uma explicação fácil e detalhada dos tipos de empréstimos possíveis no Brasil.
                            Tá afim de saber?
                        </p>
                        <p>
                            <a href="{{action('ContentController@mostraDemocratizacaoTipoEmprestimo')}}" class="link-blog">Saiba mais >></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12" id="bottom-help2">
                <hr/>
            </div>
        </div>
    </div>
</section>

    @include('partials.footer')

