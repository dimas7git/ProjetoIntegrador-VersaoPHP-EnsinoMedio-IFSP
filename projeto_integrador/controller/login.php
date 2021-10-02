<?php

if (isset($_POST['login']) || isset($_POST['gravar']) || isset($_POST['usuario'])){
    include_once('../config/conexao.php');
}
else{
    include_once('../config/conexao.php');

}

if (isset($_POST['login'])) {
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    
}

// ***** comandos CRUD
if (isset($_POST['gravar'])) {
    $conn = conexao();
    $stmt = $conn->prepare("insert into login (nome_login, senha,cod_fun) values (?,?,?)");
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $senha);
    $stmt->bindParam(3, $cod_fun);
    $stmt->execute();


} else if (isset($_POST['usuario'])) {
   
    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conn = conexao();

    //$stmt = $conn->prepare("SELECT l.*, f.cargo ".
      //      " FROM login u left outer join funcionario f on l.cod_log = f.cod_fun ".
        //    " WHERE login = ? and senha = ?");
    $stmt = $conn->prepare("select * from login where nome_login = ? and senha=?");
    $stmt->bindParam(1, $usuario);
    $stmt->bindParam(2, $senha);
    $stmt->execute();


    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($res != null) {
        //Gravando valores dentro da sessão aberta:
        $_SESSION['login'] = $res[0]['nome_login'];
        $_SESSION['senha'] = $res[0]['senha'];
        $_SESSION['tp_usuario'] = $res[0]['tp_usuario'];
        $_SESSION['cod_fun'] = $res[0]['cod_fun'];
        
        //redirecionamento por usuario
        if($_SESSION['tp_usuario']=='fun'){
            header('location:../pedidos_pendentes.php');
        }else{
            if($_SESSION['tp_usuario']=='adm'){
            header('location:../cadastro_fun.php');
        }else{
            if($_SESSION['tp_usuario']=='med'){
            header('location:../pedido.php');
            }  
        
        }
        }
    }
}

?>
