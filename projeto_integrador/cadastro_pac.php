<?php
include_once('config/header.php');
?>
<div class="corpo_geral">
    <center><h1>Cadastro de Paciente </h1></center>
    <form action="controller/paciente.php" method="POST">
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Nome:</label>
            </div>
            <div class=" col-md-11 ">
                <input type="text" name="nome_p" id="nome_p" class="form-control">
            </div>  
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="gravar" value="Gravar" class="btn  button btn-primary">
                <input type="button" name="cancelar" value="Cancelar" class="btn  button btn-primary">
            </div>
        </div>
    </form>
        <?php
        include_once('config/footer.php');
        ?>  

