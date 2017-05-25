<section class="footer-blog" id="bottom-help">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-10 col-md-offset 1" style="padding-top: 25px;">
                        <div class="col-md-10 col-md-offset-1 banner-footer ">
                            <img class="logo-header" src="http://i.imgur.com/l9ryH9V.png" alt="Dr. Dinheiro Banner">
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-10 col-md-offset-1">
                                <label class="texto-bottom" style="font-weight: bold;">QUEM SOMOS</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1 text-justify">
                                <small><small class="texto-bottom">
                                    O Dr. Dinheiro é composto por especialistas em finanças. Queremos curar o bolso de milhões de brasileiros, educando, ajudando e tirando todas as dúvidas financeiras para que você possa sair do vermelho.
                                </small></small>
                                <hr class="hr-footer"/>                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-10 col-md-offset-1">
                                <a href="https://www.facebook.com/drdinheirooficial/" target="_blank"> 
                                    <img src="/img/facebook_white.png" class="facebook-footer" />
                                </a>
                                <a href="https://www.instagram.com/dr.dinheiro/" target="_blank"> 
                                    <img src="/img/instagram_white.png" class="instagram-footer" />
                                </a>
                            </div>                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <!-- FORM -->
                    {!! Form::open(array('url' => '/contato','class' => 'form-horizontal')) !!}
                    {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!} 
                    <div class="col-md-12">
                        <h3>Contate-nos</h3>
                    </div>
                    <div class="col-md-12">
                        <input name="nome" class="form-control contatos-footer" type="text" placeholder="Nome Completo*" />
                    </div>
                    <div class="col-md-12">
                        <input name="email" class="form-control contatos-footer" type="text" placeholder="E-mail*" />
                    </div>

                    <div class="col-md-12 ">
                        <textarea class="form-control contatos-footer" name="mensagem"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class=" btn btn-default pull-right btn-sm contatos-footer">Enviar</button>
                    </div>
                    {!! Form::close() !!} 
                    <!-- FORM -->

                </div>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>  
    <script src="/js/app.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $('#data_nascimento').mask('00/00/0000');
      $('#cep').mask('00000-000');
      $('#telefone').mask('(00) 0000-0000');
      $('#celular').mask('(00) 0000-00000');
    });
    </script>
</body>

</html>