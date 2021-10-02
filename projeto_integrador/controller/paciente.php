<?php
       
if (isset($_POST['gravar'])){
    include_once('../config/conexao.php');
}
else{
    include_once('config/conexao.php');

}

if (isset($_POST['nome_p'])) {
    $nome_p = $_POST['nome_p'];
}

if (isset($_POST['gravar'])) {

    $conn = conexao();
    $stmt = $conn->prepare("INSERT INTO paciente (nome_p) values (?);");
    $stmt->bindParam(1, $nome_p);
    $stmt->execute();
        header('location: ../cadastro_pac.php');
             
} 


/* --------------------------- FUNÇÕES ---------------------- */

function localizarPaciente($nome) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM paciente WHERE nome_p LIKE '%" . $nome . "%' ORDER BY cod_pac;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function localizarPacienteID($id) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM paciente WHERE cod_pac =" . $id . ";");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function localizarPacientePed() {
    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM paciente;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>


