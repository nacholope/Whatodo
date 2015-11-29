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
<?php
include 'components/navbar.php';
?>
<main>
    <div class="container">
        <div class="row">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Nombre del evento</div>
                    <div class="collapsible-body">
                        <form class="custom-padding">
                            <div class="row">
                                <div class="input-field col s6">
                                    <div class="switch">
                                        <label>
                                            P&uacute;blico
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                            Privado
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Seleccione una categoria</option>
                                        <option value="1">M&uacute;sica</option>
                                        <option value="2">Deportes</option>
                                        <option value="3">Cultura</option>
                                        <option value="4">Gastronom&iacute;a</option>
                                    </select>
                                    <label>Categoria</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate" required>
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Nombre</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate" required>
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Direcci&oacute;n</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate" required>
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Ciudad</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="dateStart">Inicio</label>
                                    <input id="dateStart" type="date" class="datepicker">
                                </div>
                                <div class="input-field col s6">
                                    <label for="dateFinish">Fin</label>
                                    <input id="dateFinish" type="date" class="datepicker">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="description" class="materialize-textarea"></textarea>
                                    <label for="description">Descripci&oacute;n</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate">
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Imagen</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="surname" type="text" class="validate">
                                    <label for="surname" data-error="Incorrecto" data-success="Correcto">Promoci&oacute;n</label>
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
            </ul>
        </div>
    </div>
</main>

<?php
include 'components/Footer.php';
?>

<?php
include 'components/Script.php';
echo Script::JQUERY;
echo Script::MATERIALIZE;
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>

<script type="text/javascript">
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>

</body>
</html>
