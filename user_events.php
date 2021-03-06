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
        if($_POST['action'] == "delete"){
            $connection = Connection::get();
            $connection->delete("event",['id'=>$_POST['id']],null);
        }
        if($_POST['action'] == "update"){
            $connection = Connection::get();
            $dateStart = $_POST['dateStart'] . " " . $_POST['timeStart'] . ":00";
            $dateEnd = $_POST['dateEnd'] . " " . $_POST['timeEnd'] . ":00";
            $results = $connection->select("select id from Cities where name = '{$_POST['city']}'");
            $city = $results->fetch_assoc()['id'];
            $values =
                [
                    'id'=> $_POST['id'],
                    'user' => $_SESSION['id'],
                    'category' => $_POST['category'],
                    'name' => $_POST['name'],
                    'address' => $_POST['address'],
                    'city' => $city,
                    'description' => $_POST['description'],
                    'dateStart' => $dateStart,
                    'dateEnd' => $dateEnd,
                    'img' => $_POST['image'],
                    'public' => 1,
                    'offer' => $_POST['offer'],
                ];
            $connection->update("event",$values,["id"=>$_POST['id']]);
        }
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
        selectYears: 15,
        format: 'yyyy-mm-dd'// Creates a dropdown of 15 years to control year
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
