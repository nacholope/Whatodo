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
<?php include 'components/navbar.php'; ?>
<main>
    <div class="container">
        <div class="row">
            <?php
            function displayContent($condition = null)
            {
                include 'classes/Event.php';
                $connection = Connection::get();

                $sentenceSQL = "select * from Events";
                if($condition != null) $sentenceSQL .= " where category = " . $condition ;
                $sentenceSQL .= " limit 15";
                $results = $connection->select($sentenceSQL);
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
            }

            if (!empty($_GET)) {
                displayContent($_GET['category']);
            } else {
                displayContent();
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
