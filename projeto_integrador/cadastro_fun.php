<?php
include_once 'config/header.php';
?>

<div class="corpo_geral">
    <center><h1>Cadastro de funcionários</h1></center>
    <form action="controller/funcionario.php" method="POST">
        <div class="row form-group">
            <div class=" col-md-1">
                <label >Cod:</label>
            </div>
            <div class=" col-md-11">
                
                <input type="text" name="cod_fun" class="form-control" readonly  style="width:50px;"/><br/>
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Nome:</label>
            </div>
            <div class=" col-md-11 ">
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Telefone:</label>
            </div>
            <div class=" col-md-5 ">
                <input type="text" name="telefone" id="telefone" class="form-control">
            </div>
            <div class=" col-md-1">
                <label>CRM:</label>
            </div>
            <div class=" col-md-5">
                <input type="text" name="crm" id="crm" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Endereço:</label>
            </div>
            <div class=" col-md-3 ">
                <input type="text" name="endereco" id="endereco" class="form-control">
            </div>
            <div class=" col-md-1">
                <label>CEP:</label>
            </div>
            <div class=" col-md-3 ">
                <input type="text" name="cep" id="cep" class="form-control">
            </div>
            <div class=" col-md-1">
                <label>Data de nascimento:</label>
            </div>
            <div class=" col-md-3 ">
                <input type="text" name="data_nasc" id="data_nasc" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>CPF:</label>
            </div>
            <div class=" col-md-5 ">
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>

            <div class=" col-md-1">
                <label>RG:</label>
            </div>         
            <div class=" col-md-5">
                <input type="text" name="rg" id="rg" class="form-control">
            </div>
        </div>
       <div class="row form-group">
        <div class=" col-md-1">
            <label>Login: </label>
        </div>
        <div class=" col-md-5">
            <input type="text" name="login_nome" id="login_nome" class="form-control">
        </div>
        <div class=" col-md-1">
            <label>Senha: </label>
        </div>
        <div class=" col-md-5">
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        </div>
        <div class="row form-group">          
            <div class=" col-md-12 ">
                <input type="radio" name="tp_funcionario" value="med"> Médico Hospitalar
                <input type="radio" name="tp_funcionario" value="fun"> Biomédico
                <input type="radio" name="tp_funcionario" value="adm"> Administrador
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Cargo:</label>
            </div>
            <div class=" col-md-5 ">
                <input type="text" name="cargo_bio" id="cargo_bio" placeholder="Biomédico" class="form-control">
            </div>
            <div class=" col-md-2">
                <label>Especialização:</label>
            </div>
            <div class=" col-md-4">
                <input type="text" name="especializacao_med" id="especializacao_med" placeholder="Médico hospitalar" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="gravar" value="Gravar" class="btn  button btn-primary">
                <input type="button" name="cancelar" value="Cancelar" class="btn  button btn-primary">
                <input type="button" name="editar" value="Editar" class="btn btn-primary button">
                <input type="button" name="excluir" value="Excluir" class="btn btn-primary button">
            </div>
        </div>
    </form>
</div>
<?php
include_once 'config/footer.php';
?>

