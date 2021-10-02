<?php
include_once('config/header.php');
?>
<div class="corpo_geral">
    <center><h1>Cadastro de exame</h1></center>
    <form action="controller/exame.php" method="POST">
        <div class="row form-group">
            <div class=" col-md-1">
                <label >Cod:</label>
            </div>
            <div class=" col-md-11">
                
                <input type="text" name="cod_tp_ex" class="form-control" readonly  style="width:50px;"/><br/>
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Nome do exame:</label>
            </div>
            <div class=" col-md-11 ">
                <input type="text" name="nome_ex" id="nome_ex" class="form-control">
            </div>
            
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Quantidade de amostra: </label>
            </div>
            <div class=" col-md-4 ">
                <input type="text" name="qtd_amostra" id="qtd_amostra" class="form-control">
            </div>  

            <div class=" col-md-3">
                <label>Material a ser analisado:</label>
            </div>
            <div class=" col-md-4 ">
                <input type="text" name="material_analise" id="material_analise" class="form-control">
            </div>  
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="submit" name="gravar" value="Gravar" class="btn btn-primary button">
                <input type="button" name="cancelar" value="Cancelar" class="btn btn-primary button">
                <input type="button" name="editar" value="Editar" class="btn btn-primary button">
            </div>
        </div>
    </form>
</div>
<?php
include_once('config/footer.php');
?>  

