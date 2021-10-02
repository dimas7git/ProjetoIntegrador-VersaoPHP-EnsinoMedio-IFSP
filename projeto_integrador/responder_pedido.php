<?php
include_once ('config/header.php');
include ('controller/paciente.php');
?>

<div class="corpo_geral">
    <center><h1>Responder pedido</h1></center>
    <form>
        <div class="row form-group">
            <div class=" col-md-1">
                    <label>Pedidos ativos:</label>
            </div>
            <div class="col-md-11">
                <select name="pedido" class="form-control">
                    <option value="0">escolha o paciente</option>
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
                 <label>Laudo:</label>
            </div>
            <div class="col-md-11">
              <input class="form-control" name="dados_ex" style="height: 200px;">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" name="gravar" value="Gravar" class="btn  button btn-primary">
                <input type="button" name="cancelar" value="Cancelar" class="btn  button btn-primary">
            </div>
        </div>
    </form>
</div>
<?php
include_once 'config/footer.php';
?>
