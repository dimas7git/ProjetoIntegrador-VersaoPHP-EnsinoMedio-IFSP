<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="css/estilo_geral.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.4.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/user.css">
    <script>
//        $(document).ready(function () {
//
//            // Click event of the showPassword button
//            $('#mostrarSenha').on('click', function () {
//
//                // Get the password field
//                var passwordField = $('#senha');
//
//                // Get the current type of the password field will be password or text
//                var passwordFieldType = passwordField.attr('type');
//
//                // Check to see if the type is a password field
//                if (passwordFieldType == 'password')
//                {
//                    // Change the password field to text
//                    passwordField.attr('type', 'text');
//                } else {
//                    // If the password field type is not a password field then set it to password
//                    passwordField.attr('type', 'password');
//                }
//            });
//        });
    </script>
</head>
<body>
    <div class="posi">
        <form action="controller/login.php" method="POST">
            <center> 
                <img src="https://www.heartinternet.uk/assets/img/login_icon.svg"atl="ata" style="width:200px;" >
            </center>
            <div class="form-group">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><a class="glyphicon glyphicon-eye-open" id="mostrarSenha" href="#"></a></span>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" /> 
                    </div>
            <div class="row">
                <div class=" col-md-3">
                    <input type="submit" name="btn_log" value="Login" class="btn btn-primary button">
                </div>
                <div class="col-md-3">
                    <input type="reset" name="btn_reset" value="Limpar" class="btn btn-primary button">
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

    <?php
    include_once('config/footer.php');
    ?>  