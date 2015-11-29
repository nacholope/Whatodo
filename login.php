<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1" content="text/html"/>
    <title>Whatodo</title>
    <?PHP
    include 'classes/session.inc';
    include 'components/Css.php';
    echo Css::MATERIALIZE;
    echo Css::MAIN;
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include 'components/navbar.php' ?>
<main>

    <?php

    if(isset($_SESSION['loged']) && $_SESSION['loged'] == 1) header("Location: index.php");

    if (!empty($_POST)) {

        $connection = Connection::get();

        $sentenceSQL = "select *
                        from Users
                        where email = '{$_POST['email']}'
                        and
                        password = '{$_POST['password']}';";
        echo $sentenceSQL;
        $results = $connection->select($sentenceSQL);
        if($results->num_rows == 1){
            $data = $results->fetch_assoc();
            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['surname'] = $data['surname'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['loged'] = 1;
            header("Location: index.php");
        }
        else{
            echo '<h5 class="center-align" style="color:red;">Error invalid user or password</h5>';
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <form method="post" action="login.php" class="col s12 m10 push-m1 l8 push-l2 center-align">
                <div class="row">
                    <p class="flow-text center-align">Identif&iacute;cate para entrar</p>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email" data-error="Incorrecto" data-success="Correcto">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Contrasenya</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            <input type="checkbox" id="rememberMe"/>
                            <label for="rememberMe">Recu&eacute;rdame</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Entrar
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p class="center-align">No tienes una cuenta? <a href="signup.php">Reg&iacute;strate gratis aqu&iacute;.</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include 'components/Footer.php';
?>

<?php include 'components/Script.php';
echo Script::JQUERY;
echo Script::MATERIALIZE;
?>
</body>
</html>