<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="form-inline mt-4 mb-2" method="post" action="?page=cadclientes&op=pesquisa">
                <label for="busca" class="mr-2">Buscar: </label>
                <input type="text" placeholder="Nome ou código do fornecedor" name="busca" id="busca" class="form-control mr-2">
                <input type="submit" value="Buscar" class="btn btn-warning" name="enviar">
            </form>
        </div>
    </div>
    <hr> 
    <div class="row">
        <div class="col-12">
            <form class="form-group mt-3" method="post" action="?page=cadfornecedores&op=form">
                <h5>Informações Básicas</h5>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" maxlength="16" id="cnpj" name="cnpj">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" maxlength="90" id="nome" name="nome">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" maxlength="15" id="celular" name="celular">
                    </div>
                    <div class="col-md-3">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" maxlength="15" id="telefone" name="telefone">
                    </div>
                    <div class="col-md-2 ml-auto">
                        <label for="fax">FAX</label>
                        <input type="text" class="form-control" maxlength="15" id="fax" name="fax">
                    </div>
                </div>
                
                <div class="form-row mt-3 mb-2">
                    <div class="col-md-5">
                        <label for="inscestadual">Inscrição Estadual</label>
                        <input type="text" class="form-control" maxlength="15" id="inscestadual" name="inscestadual">
                    </div>
                    <div class="col-md-5 ml-auto">
                        <label for="inscmunicipal">Inscrição Municipal</label>
                        <input type="text" class="form-control" maxlength="15" id="inscmunicipal" name="inscmunicipal">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-md-7">
                        <label for="contato">Contato</label>
                        <input type="text" class="form-control" maxlength="50" id="contato" name="contato">
                    </div>
                    <div class="col-md-5">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" maxlength="100" id="email" name="email">
                    </div>
                </div>
                
                <h5 class="mt-5">Endereço empresarial</h5>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control is-valid" maxlength="9" id="cep" name="cep">
                    </div>
                    <div class="col-md-4 ml-auto">
                        <label for="codmun">Cód. de Município do IBGE</label>
                        <input type="text" class="form-control" maxlength="9" id="codmun" name="codmun">
                        <div class="small text-muted">Nome do município - UF</div>
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="form-group col-md-9">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" maxlength="40" id="endereco" name="endereco">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nro">Nro</label>
                        <input type="text" class="form-control" maxlength="5" id="nro" name="nro">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" maxlength="20" id="complemento" name="complemento">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" maxlength="40" id="bairro" name="bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" maxlength="20" id="cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" maxlength="2" id="uf" name="uf">
                    </div>
                </div>
                
                <div class="form-row">
                    <input type="submit" class="btn btn-warning mr-3" value="Salvar">
                    <input type="button" class="btn btn-warning mr-3" value="Excluir">
                </div>
            </form>
            
        </div>
    </div>
</div>

<div class="modal fade" id="addEndereco" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Novo Endereço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control is-valid" maxlength="9" id="cep" name="cep">
                        </div>
                        <div class="col-md-4 ml-auto">
                            <label for="codmun">Cód. de Município do IBGE</label>
                            <input type="text" class="form-control" maxlength="9" id="codmun" name="codmun">
                            <div class="small text-muted">Nome do município - UF</div>
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="form-group col-md-9">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" maxlength="40" id="endereco" name="endereco">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="nro">Nro</label>
                            <input type="text" class="form-control" maxlength="5" id="nro" name="nro">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" maxlength="20" id="complemento" name="complemento">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" maxlength="40" id="bairro" name="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" maxlength="20" id="cidade" name="cidade">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" maxlength="2" id="uf" name="uf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Adicionar Endereço</button>
                        <button type="button" class="btn" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verCompra" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ver compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col"># item</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Subtotal R$</th>
                        </tr>
                    </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>28</td>
                      <td>Brinco Pequeno Retangular</td>
                      <td>1</td>
                      <td>40,00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Total R$</td>
                        <td>40,00</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>