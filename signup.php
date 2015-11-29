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
    <div class="container">
        <?php
        if (isset($_SESSION['loged']) && $_SESSION['loged'] == 1) header("Location: index.php");

        if (!empty($_POST)) {
            $connection = Connection::get();
            $data =
                [
                    'name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'password' => $_POST['password'],
                    'email' => $_POST['email']
                ];
            if ($connection->insert('user', $data) == 1) {
                header("Location: login.php");
            } else {
                echo '<h5 class="center-align" style="color:red;">Error, comprueba que la información es correcta</h5>';
            }
        }
        ?>
        <div class="row">
            <form method="post" action="signup.php" class="col s12 m10 push-m1 l8 push-l2 center-align">
                <div class="row">
                    <p class="flow-text center-align">Reg&iacute;strate en un solo paso</p>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" name="name" type="text" class="validate" required>
                        <label for="name" data-error="Incorrecto" data-success="Correcto">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="surname" name="surname" type="text" class="validate" required>
                        <label for="surname" data-error="Incorrecto" data-success="Correcto">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email" data-error="Incorrecto" data-success="Correcto">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Contrasenya</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>
                            <input type="checkbox" id="rememberMe" name="conditions"/>
                            <label for="rememberMe">He le&iacute;do y acepto los <a href="#">t&eacute;rminos y
                                    condiciones</a>.</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Registrarse
                        </button>
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
<script type="application/javascript">
    //todo validate checkbox
</script>
</body>
</html>