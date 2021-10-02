<?php

if (isset($_POST['alterar'])||isset($_POST['gravar'])){
    include_once('../config/conexao.php');
}
else{
    include_once('config/conexao.php');
}

if (isset($_POST['data_ped'])) {
    $data_ped = $_POST['data_ped'];
    $cod_tp_ex = $_POST['exame'];
    $cod_ped = $_POST['cod_ped'];
    $obs = $_POST['obs_ped'];
}

if (isset($_POST['gravar'])) {

    $conn = conexao();
    $stmt = $conn->prepare("insert into pedido (data_ped,exame,cod_pac,obs_ped) values (?,?,?,?)");
    $stmt->bindParam(1, $data_ped);
    $stmt->bindParam(2, $cod_tp_ex);
    $stmt->bindParam(3, $cod_pac);
    $stmt->bindParam(4, $obs);
    $stmt->execute();


} 

/* --------------------------- FUNÇÕES ---------------------- */

function localizarPedido() {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM pedido WHERE bio_resp = null");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>