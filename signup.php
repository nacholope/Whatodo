<!DOCTYPE html>
<html>
<head>
    <title>Whatodo</title>
    <?PHP include 'components/Css.php';
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
        <form class="col s12 m10 push-m1 l8 push-l2 center-align">
            <div class="row">
                <p class="flow-text center-align">Please, sign up</p>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="name" type="text" class="validate" required>
                    <label for="name" data-error="Incorrect" data-success="Correct">Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="surname" type="text" class="validate" required>
                    <label for="surname" data-error="Incorrect" data-success="Correct">Surname</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="email" type="email" class="validate" required>
                    <label for="email" data-error="Incorrect" data-success="Correct">Email</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p>
                        <input type="checkbox" id="rememberMe" />
                        <label for="rememberMe">I have read and agree to the <a href="#">terms and conditions</a>.</label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Sign up
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
</body>
</html>