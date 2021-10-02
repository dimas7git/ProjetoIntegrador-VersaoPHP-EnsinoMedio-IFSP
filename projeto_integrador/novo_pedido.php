<?php
include_once('config/header.php');
include_once('controller/exame.php');
include_once('controller/paciente.php');
?>
<div class="corpo_geral">
    <center><h1>Pedido de exame</h1></center>
    <form >
        <div class="row form-group">
            <div class=" col-md-2">
                <label>Código do Pedido:</label>
            </div>
            <div class="col-md-10">
                <input type="text" readonly name="cod_ped" style="width:50px;" class="form-control" > 
            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Data do Pedido</label>
            </div>
            <div class=" col-md-3 ">
                <input type="text" name="data_ped" id="data_nasc" class="form-control">            
            </div>
            <div class="col-md-1">
                <label>Tipo de exame:</label>
            </div>
            <div class="col-md-7">
                <select name="exame" class="form-control">
                    <option value="0">Escolha um exame</option>
                    <?php
                    $exames = localizarExamePed();
                    foreach ($exames as $key => $value) {
                    echo "<option value=\" " . $value['cod_tp_ex'] . "\">" . $value['nome_ex'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-1">
                <label>Paciente:</label>
            </div>
            <div class="col-md-11">
                <select name="cod_pac" class="form-control">
                    <option value="0">Escolha um paciente</option>
                    <?php
                    $nomes = localizarPacientePed();
                    foreach ($nomes as $key => $value) {
                    echo "<option value=\" " . $value['cod_pac'] . "\">" . $value['nome_p'] . "</option>";
                    }
                    ?>
                </select>

            </div>
        </div>
        <div class="row form-group">
            <div class=" col-md-1">
                <label>Observações:</label>
            </div>
            <div class="col-md-11">
                <input type="text" name="obs_ped" class="form-control" > 
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="gravar" value="Gravar" class="btn  button btn-primary">
                <input type="button" name="cancelar" value="Cancelar" class="btn  button btn-primary">
            </div>
        </div>
    </form>
</div>
<?php
include_once('config/footer.php');
?>  

