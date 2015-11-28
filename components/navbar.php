<ul id="categories" class="dropdown-content">
<?php
    include 'classes/Connection.php';
    $c = new Connection();
    $results = $c->select("select * from Categories");
    while($category = $results->fetch_assoc()){
        echo "<li><a href='#!'>{$category['name']}</a></li>";
    }
?>
</ul>

<ul id="userOptions" class="dropdown-content">
    <li><a href="#!">Mis eventos</a></li>
    <li><a href="user_profile.php">Mi perfil</a></li>
    <li><a href="#!">Salir</a></li>
</ul>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">Whatodo <span style="color:greenyellow">In Menorca</span> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Buscar</a></li>
                    <li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="categories">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
                        <?php
                        if(isset($_SESSION['Name'])) {
                            echo '<li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="userOptions">' . $_SESSION['Name'] . '<i class="material-icons right">arrow_drop_down</i></a></li>';
                        } else {
                            echo '<li><a href="login.php">Entrar</a></li>';
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
