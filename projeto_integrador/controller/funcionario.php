<?php

if (isset($_POST['editar'])||isset($_POST['gravar'])){
    include_once('../config/conexao.php');
}
else{
    include_once('config/conexao.php');
}

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $crm = $_POST['crm'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $login_nome = $_POST['login_nome'];
    $senha = $_POST['senha'];
    $tp_funcionario = $_POST['tp_funcionario'];
    $especializacao_med = $_POST['especializacao_med'];
    $cargo_bio = $_POST['cargo_bio'];
    $cod_fun = $_POST['cod_fun'];

}

if (isset($_POST['gravar'])) {
try{
    $conn = conexao();
    $stmt = $conn->prepare("insert into funcionario (nome_f,tel_f,crm,endereco,cep,rg,cpf,data_nasc) values (?,?,?,?,?,?,?,?)");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $telefone);
    $stmt->bindParam(3, $crm);
    $stmt->bindParam(4, $endereco);
    $stmt->bindParam(5, $cep);
    $stmt->bindParam(6, $rg);
    $stmt->bindParam(7, $cpf);
    $stmt->bindParam(8, $data_nasc);
    if($stmt->execute()){
        $cod = $conn->lastInsertId();//retorna ultimo id inserido
        
        $stmt2 = $conn->prepare("insert into login(nome_login,senha,tp_usuario,cod_fun) values(?,?,?,?)");
        $stmt2->bindParam(1,$login_nome);
        $stmt2->bindParam(2,$senha);
        $stmt2->bindParam(3,$tp_funcionario);
        $stmt2->bindParam(4,$cod);
        $stmt2->execute();
        
        if($tp_funcionario == "med"){
            $stmt3 = $conn->prepare("insert into medico(especializacao_med,cod_fun) values(?,?)");
            $stmt3->bindParam(1,$especializacao_med);
            $stmt3->bindParam(2,$cod);
            $stmt3->execute();
        }else{
            $stmt3 = $conn->prepare("insert into biomedico(cargo_bio,cod_fun) values(?,?)");
            $stmt3->bindParam(1,$cargo_bio);
            $stmt3->bindParam(2,$cod);
            $stmt3->execute();
        }
    }
    header('location: ../cadastro_fun.php');
}catch(PDOException $erro){
    echo 'ocorreu um erro'; 
    $erro->getMessage();
}

} else 
    if (isset($_POST['excluir'])) {
    header('location: ../registro_fun.php');
} else 
    if (isset($_POST['cod_fun'])) {

    $conn = conexao();
    $stmt = $conn->prepare("update funcionario set nome_f=?,tel_f=?,crm=?,endereco=?,cep=?,rg=?,cpf=?,data_nasc=? where cod_fun=?");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $telefone);
    $stmt->bindParam(3, $crm);
    $stmt->bindParam(4, $endereco);
    $stmt->bindParam(5, $cep);
    $stmt->bindParam(6, $rg);
    $stmt->bindParam(7, $cpf);
    $stmt->bindParam(8, $data_nasc);
    $stmt->bindParam(9, $cod_fun);
    $stmt->execute();
        
        $stmt2 = $conn->prepare("update login set nome_login=?, senha=?, tp_usuario=?, cod_fun=? where cod_fun=?");
        $stmt2->bindParam(1,$login_nome);
        $stmt2->bindParam(2,$senha);
        $stmt2->bindParam(3,$tp_funcionario);
        $stmt2->bindParam(4,$cod_fun);
        $stmt2->execute();
        
        if($tp_funcionario == "med"){
            $stmt3 = $conn->prepare("update medico set especializacao_med=? where cod_fun=?");
            $stmt3->bindParam(1,$especializacao_med);
            $stmt3->bindParam(2,$cod_fun);
            $stmt3->execute();
        }else{
            $stmt3 = $conn->prepare("update biomedico set cargo_bio=? where cod_fun=?");
            $stmt3->bindParam(1,$cargo_bio);
            $stmt3->bindParam(2,$cod_fun);
            $stmt3->execute();
        }
    }



/* --------------------------- FUNÇÕES ---------------------- */

function localizarFuncionario($nome_f) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM funcionario f inner join login l on f.cod_fun=l.cod_fun".
            " WHERE f.nome_f LIKE '%" . $nome_f . "%' ORDER BY f.cod_fun;");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function excluirFuncionario($id) {
        $conn = conexao();
        $stmt = $conn->prepare("DELETE FROM login WHERE cod_fun = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
        
        $conn2 = conexao();
        $stmt2 = $conn2->prepare("DELETE FROM biomedico WHERE cod_fun = ?");
        $stmt2->bindParam(1, $id);
        $stmt2->execute();
        
        $conn3 = conexao();
        $stmt3 = $conn3->prepare("DELETE FROM medico WHERE cod_fun = ?");
        $stmt3->bindParam(1, $id);
        $stmt3->execute();
        
        $conn4 = conexao();
        $stmt4 = $conn4->prepare("DELETE FROM funcionario WHERE cod_fun = ?");
        $stmt4->bindParam(1, $id);
        $stmt4->execute();
        //header("location: registro_fun.php");
}
 

function localizarFuncionarioID($id) {

    $conn = conexao();
    $stmt = $conn->prepare("SELECT * FROM funcionario WHERE funcionario.cod_fun =" . $id . ";");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
