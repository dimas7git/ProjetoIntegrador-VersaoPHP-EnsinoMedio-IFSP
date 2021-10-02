<?php
include_once('config/header.php');
?>
<div class="corpo_geral">
    <center><h1>Associar médico</h1></center>
    <form>
        <div class="row form-group">
            <div class=" col-md-2">
                <label>Código do Pedido:</label>
            </div>
            <div class="col-md-10">
                <input type="text" readonly name="cod_ped" style="width:50px;" class="form-control" > 
            </div>
        </div>
        <div class="row form-group ">
            <div class="col-md-1">
                <label>Pedido:</label>
            </div>
            <div class="col-md-11">
                <select name="cod_ped" class="form-control">
                    <option>aaaaaaa</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-1">
                <label>Novo médico:</label>
            </div>
            <div class="col-md-11">
                <select name="cod_fun" class="form-control">
                    <option>bbbbbbbbbbbbb</option>
                </select>
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

