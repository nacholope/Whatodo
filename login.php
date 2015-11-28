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
<div class="container">
    <div class="row">
        <form class="col s12 m10 push-m1 l8 push-l2 center-align">
            <div class="row">
                <p class="flow-text center-align">Please, log in</p>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="Incorrect" data-success="right">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p>
                        <input type="checkbox" id="rememberMe" />
                        <label for="rememberMe">Remember me</label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                       Login
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p class="center-align">Don't have an account? <a href="signup.php">Sign up for free here.</a></p>
                </div>
            </div>
        </form>
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