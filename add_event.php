<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1" content="text/html"/>
    <title>Whatodo</title>
    <?PHP
    include 'classes/session.inc';
    include 'components/Css.php';
    echo Css::MATERIALIZE;
    echo Css::CLOCKPICKER;
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







<?php
if(isset($_SESSION['loged']) == null) header("Location: index.php");

if (empty($_POST)) {
    echo '<main>
    <div class="container">
        <div class="row center-align">
            <p class="flow-text">Anadir evento</p>
            <form class="custom-padding center-align" method="post">
                <div class="row custom-row-margin">
                    <div class="input-field">
                        <div class="switch">
                            <label>
                                P&uacute;blico
                                <input type="checkbox" id="public">
                                <span class="lever"></span>
                                Privado
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="category">
                            <option value="" disabled selected>Seleccione una categoria</option>
                            <option value="1">M&uacute;sica</option>
                            <option value="2">Deportes</option>
                            <option value="3">Cultura</option>
                            <option value="4">Gastronom&iacute;a</option>
                        </select>
                        <label>Categoria</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="name" name="name" type="text" class="validate" required>
                        <label for="name" data-error="Incorrecto" data-success="Correcto">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="address" name="address" type="text" class="validate" required>
                        <label for="address" data-error="Incorrecto" data-success="Correcto">Dirección</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="city" name="city" type="text" class="validate" required>
                        <label for="city" data-error="Incorrecto" data-success="Correcto">Ciudad</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="dateStart">Fecha inicio</label>
                        <input id="dateStart" name="dateStart" type="date" class="datepicker">
                    </div>
                    <div class="input-field col s6">
                        <label for="timeStart">Hora inicio</label>
                        <input id="timeStart" name="timeStart" class="timepicker" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="dateEnd">Fecha fin</label>
                        <input id="dateEnd" name="dateEnd" type="date" class="datepicker">
                    </div>
                    <div class="input-field col s6">
                        <label for="timeEnd">Hora fin</label>
                        <input id="timeEnd" name="timeEnd" class="timepicker" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="description" name="description" class="materialize-textarea"></textarea>
                        <label for="description">Descripción</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="img" name="img" type="text" class="validate">
                        <label for="name" data-error="Incorrecto" data-success="Correcto">Imagen</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="offer" name="offer" type="text" class="validate">
                        <label for="name" data-error="Incorrecto" data-success="Correcto">Promoción</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="submit">
                            Crear
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>';
} else {
//        * $c->insert("event", [
//"user"=>'1001',
//"category"=>'5',
//"name"=>'Un evento asociado a un usuario',
//"address"=>'Una direccion pa quedar',
//"city"=>'100',
//"description"=>'Barbacoa en mi casa este finde...',
//"dateStart"=>'2015-01-02 12:12:12',
//"dateEnd"=>'2015-10-10 12:12:12',
//"img"=>'100.jpg',
//"public"=>'1',
//"offer"=>'cerveza gratis!'], null);
    echo "MUNDOOOOOOOOOOOOOOOOOOOOOOO";
    $connection = Connection::get();
    $attributes =
        [
            'user' => $_SESSION['id'],
            'category' => $_POST['category'],
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'description' => $_POST['description'],
            'dateStart' => $_POST['dateStart'] . $_POST['timeStart'] . ':00',
            'dateEnd' => $_POST['dateEnd'] . $_POST['timeEnd'] . ':00',
            'img' => $_POST['img'],
            'public' => $_POST['public'],
            'offer' => $_POST['offer']
        ];
    print_r($attributes);
    echo $connection->insert('event', $attributes, null);
    header("Location: index.php");

}
?>
























<?php
include 'components/Footer.php';
?>

<?php
include 'components/Script.php';
echo Script::JQUERY;
echo Script::MATERIALIZE;
echo Script::CLOCKPICKER;
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

<script type="text/javascript">
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15,
        format: 'yyyy-mm-dd'// Creates a dropdown of 15 years to control year
    });
</script>

<script type="text/javascript">
    $('#timeStart').pickatime({
        twelvehour: false
    });
    $('#timeEnd').pickatime({
        twelvehour: false
    });
</script>

<script>
    var button = $('#submit');
    button.on('click', function () {
        data = $('user').getAttribute('value');
        console.log(data);
    });
</script>


</body>
</html>