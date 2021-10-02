<?php
       
if (isset($_POST['alterar']) || isset($_POST['gravar'])){
    include_once('../config/conexao.php');
}
else{
    include_once('config/conexao.php');

}

if (isset($_POST['nome_ex'])) {
    $nome_ex = $_POST['nome_ex'];
    $qtd_amostra = $_POST['qtd_amostra'];
    $material_analise = $_POST['material_analise'];
    $cod_tp_ex = $_POST['cod_tp_ex'];
}

if (isset($_POST['gravar'])) {

    $conn = conexao();
    $stmt = $conn->prepare("INSERT INTO tipo_exame (nome_ex,qtd_amostra,material_analise) values (?,?,?);");
    $stmt->bindParam(1, $nome_ex);
    $stmt->bindParam(2, $qtd_amostra);
    $stmt->bindParam(3, $material_analise);

    $stmt->execute();
        header('location: ../cadastro_exame.php');
             
} else
if (isset($_POST['excluir']) || isset($_POST['localizar'])) {
    header('location: ../registro_exame.php');
} else
if (isset($_POST['alterar'])) {

    $conn = conexao();
    $stmt = $conn->prepare("UPDATE tipo_exame set nome_ex = ?, qtd_amostra = ?, material_analise = ? WHERE cod_tp_ex = ?;");
    $stmt->bindParam(1, $nome_ex);
    $stmt->bindParam(2, $qtd_amostra);
    $stmt->bindParam(3, $material_analise);
    $stmt->bindParam(3, $cod_tp_ex);
    $stmt->execute();

}

/* --------------------------- FUNÇÕES ---------------------- */

function localizarExame($nome) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM tipo_exame WHERE nome_ex LIKE '%" . $nome . "%' ORDER BY cod_tp_ex;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function excluirExame($id) {
    try {
        $conn = conexao();
        $stmt = $conn->prepare("DELETE FROM tipo_exame WHERE cod_tp_ex = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
    } catch (PDOException $ex) {
        echo "<script language='javascript'> alert('Ocorreu um erro ao tentar excluir!') </script>";
        echo $ex ->getMessage();
    }
}

function localizarExameID($id) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM tipo_exame WHERE cod_tp_ex =" . $id . ";");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function localizarExamePed() {
    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM tipo_exame;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

