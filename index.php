<!DOCTYPE html>
<html>
<head>
    <title>Whatodo</title>
    <?PHP include 'components/Css.php';
    echo Css::MATERIALIZE;
    echo Css::MAIN;
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'components/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <?php
            include 'classes/Event.php';

            $event = new Event("4", "deportes", "pepito", "vives llull 15", "mahon", "Lorem ipsum", "28-11-2015", "29-11-2015", "sant-joan.jpg", 14);
            $event->paintEvent();
            ?>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src='img/sant-joan.jpg'>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src='img/sant-joan.jpg'>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src='img/sant-joan.jpg'>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src='img/sant-joan.jpg'>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src='img/sant-joan.jpg'>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'components/Footer.php';
?>

<?php include 'components/Script.php';
echo Script::JQUERY;
echo Script::MATERIALIZE;
?>
</body>
</html>
