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
        <div class="row">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">person_pin</i>Mis datos</div>
                    <div class="collapsible-body">
                        <form class="custom-padding">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="name" type="text" class="validate" required>
                                    <label for="name" data-error="Incorrecto" data-success="Correcto">Nombre</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate" required>
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Apellidos</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="email" type="email" class="validate" required>
                                    <label for="email" data-error="Incorrecto" data-success="Correcto">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="password" type="password" class="validate" required>
                                    <label for="password">Contrasenya</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">error</i>Darse de baja</div>
                    <div class="collapsible-body">
                        <p>Al darse de baja, no podr&aacute; volver a acceder a sus datos.</p>
                        <div class="custom-padding">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                Confirmar
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
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