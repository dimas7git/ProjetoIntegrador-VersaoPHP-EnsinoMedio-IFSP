<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['login'] == null) {
    header('location: index.php');
}

if (isset($_REQUEST['sair'])) {
    $_SESSION['login'] = null;
    header('location: index.php');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>projeto</title>
        <link href="css/estilo_geral.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/jquery.mask.min.js" type="text/javascript"></script>

        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
            body{
                font-family:"courier";
                background-color: #a9a9a9;

                

            }
            .button{
               color:white; 

            }
        </style>
        <script>
            $(function () {
                $("#data_nasc").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
                    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });
            });
            $(document).ready(function () {
                $('#data_nasc').mask('99/99/9999');
                $('#telefone').mask('(99)99999-9999');
            });
        </script>
    </head>
    <body>
        <nav class="menu  navbar-dark bg-primary" ><!--style="background-color: #212529;"-->
            <div class="navbar-header">

                <a class="navbar-brand"style="color:#ffffff;" href="index.php">AstraDD</a>
            </div>

            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class=" btn-primary dropdown-toggle " data-toggle="dropdown" 
                           role="button" aria-haspopup="true" aria-expanded="false"style="color:#ffffff;" >
                            Admnistrador <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro_fun.php">Cadastro de funcionário</a></li>
                            <li><a href="registro_fun.php">Registro de Funcionário</a></li>
                            <li><a href="cadastro_exame.php">Cadastro de exame</a></li>
                            <li><a href="registro_exame.php">Registro de exame</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class=" btn-primary dropdown-toggle" style="color:#ffffff;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Médico hospitalar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro_pac.php">Cadastro de Paciente</a></li>
                            <li><a href="novo_pedido.php">Pedido do exame</a></li>
                            <li><a href="ver_exame.php">Ver exame</a></li>
                            <li><a href="associar_medico.php">Associar médico</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class=" btn-primary dropdown-toggle"style="color:#ffffff;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Biomédico <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pedidos_pendentes.php">Pedidos pendentes</a></li>
                            <li><a href="responder_pedido.php">Responder pedidos</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href=""class=" btn-primary dropdown-toggle" style="color:#ffffff;"> Logout <span class="fas fa-sign-out-alt"></span></a> 
                    </li>
                </ul>
            </div> 
        </nav>
        <div class="container-fluid">

