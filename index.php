<!DOCTYPE html>
<html>
<head>
    <title>Whatodo</title>
    <?PHP
    include 'components/Css.php';
    echo Css::MATERIALIZE;
    echo Css::MAIN;
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php include 'components/navbar.php'; ?>
<main>
    <div class="container">
        <?php
        if (isset($_POST)) {
            function displayCategory()
            {
                // $conexion->Select("select * from categories where id = {$_POST['id']}");
            }
        }
        ?>
        <div class="row">
            <?php
            include 'classes/Event.php';
            $conec = new Connection();
            $results = $conec->select("select * from Events limit 30");

            while ($evt = $results->fetch_assoc()) {
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
                echo '<div class="col s12 m4">';
                $event->paintEvent();
                echo '</div>';

            }
            ?>
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
<script type="application/javascript">
    console.log("hi");
</script>
</body>
</html>
