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
<main>
    <?php

    if (!empty($_POST)) {
        $connection = Connection::get();
        $sentence = "select id from Users WHERE email = '{$_POST['email']}';";
    }
    ?>
    <div class="container">
        <div class="row">
            <ul class="collapsible popout" data-collapsible="accordion">
                <?php
                include 'classes/Event.php';
                $connection = Connection::get();
                $results = $connection->select("select * from Events where user = {$_SESSION['id']}");
                while($evt = $results->fetch_assoc()){
                    $event = new Event(
                        $evt['id'],
                        $evt['user'],
                        $evt['category'],
                        $evt['name'],
                        $evt['address'],
                        $evt['city'],
                        $evt['description'],
                        $evt['dateStart'],
                        $evt['dateEnd'],
                        $evt['img'],
                        $evt['public'],
                        $evt['offer']
                    );
                    $event->paintUserEvents();
                }

                ?>
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
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>

<script type="text/javascript">
    $('#timeStart').pickatime({
        twelvehour: false
    });
    $('#timeFinish').pickatime({
        twelvehour: false
    });
</script>

</body>
</html>
