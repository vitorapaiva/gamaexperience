@include('partials.head')

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="pesquisa-display" src="https://image.freepik.com/fotos-gratis/3d-rendem-de-morph-homem-que-procurara-com-lupa_1048-2931.jpg" alt="Banner pesquisa">
            </div>
            <div class="col-md-6">
                {!! Form::open(array('url' => '/','class' => 'form-horizontal')) !!}
                {!! Form::hidden('ip_usuario',$_SERVER['REMOTE_ADDR'])!!}
                <section class="well-input-size">
                     @if (count($errors) > 0)
                     
                        <div class="alert alert-danger col-md-12">
                            
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            
                        </div>
                    
                    @endif
                    <h3 class="text-center demostracao-texto">Nos ajude na pesquisa</h3>
                    <div class="form-group">
                        <label>Nome completo*</label>
                        <input type="text" placeholder="Seu nome completo" class="form-control tamanho-input">
                    </div>

                    <div class="form-group">
                        <label>Data de Nascimento*</label>
                        <input id="email" type="text" placeholder="Seu e-mail" class="form-control tamanho-input">
                    </div>
                    <div class="form-group">
                        <label>CEP*</label>
                        <input id="email" type="text" placeholder="Seu e-mail" class="form-control tamanho-input">
                    </div>
                    <div class="form-group">
                        <label>Situacao Profissional:</label>
                        <select class="form-control tamanho-input">
                                        <option value=""></option>
                                        <option value="CLT">CLT</option>
                                        <option value="Autonomo">Autonomo</option>
                                        <option value="Profissional_liberal">Profissional liberal</option>
                                        <option value="Empresario">Empresario</option>
                                        <option value="Funcionario_publico">Funcionario público</option>
                                        <option value="Aposentado/Pensionista">Aposentado/Pensionista</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label>E-mail*</label>
                        <input id="email" type="text" placeholder="Seu e-mail" class="form-control tamanho-input">
                    </div>
                    <div class="form-group">
                        <label>Telefone*</label>
                        <input id="email" type="text" placeholder="Seu e-mail" class="form-control tamanho-input">
                    </div>

                    <div class="form-group">
                        <label>Como esse crédito financeiro te ajudaria?*</label>
                        <select class="form-control tamanho-input">
                                        <option value=""></option>
                                        <option value="Pagamento">Pagamento de dívidas</option>
                                        <option value="Investimento">Investimento</option>
                                        <option value="Reforma">Reforma da casa</option>
                                        <option value="aquisicao">Aquisicão de bens</option>
                                        <option value="refinanciamento">Refinanciamento de dívidas</option>
                                        <option value="Outros">Outros</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label>Utiliza algum tipo de credito pessoal?*</label>
                        <select class="form-control tamanho-input">
                                        <option value=""></option>
                                        <option value="emprestimo_pes">Empréstimo pessoal</option>
                                        <option value="emprestimo_con">Empréstimo consignado</option>
                                        <option value="rotativo">Rotativo - Cartão de créedito</option>
                                        <option value="cheqEsp">Cheque especial</option>
                                        <option value="outros">Outros</option>
                                        <option value="nenhum">Nenhum</option>
                                </select>
                    </div>

                    <div class="form-group">
                        <label>Você pediria um empréstimo para realizar um sonho?*</label>
                        <div class="radio-inline">
                            <input type="radio" name="sonhoProprio" value="sim">Sim
                        </div>
                        <div class="radio-inline">
                            <input type="radio" name="sonhoProprio" value="nao">Não
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Possui algum bem proprio em seu nome?*</label>
                        <div class="radio-inline">
                            <input type="radio" name="bemProprio" value="sim">Sim
                        </div>
                        <div class="radio-inline">
                            <input type="radio" name="bemProprio" value="nao">Não
                        </div>
                    </div>

                    <small><small>Campos marcados com * são obrigatórios</small></small>

                    <div>
                        <button type="button" class="btn btn-primary pull-right btn-lg botao-info-cor">Cadastrar</button>
                    </div>

                </section>
                {!! Form::close() !!} 

            </div>
        </div>
    </section>

@include('partials.footer')