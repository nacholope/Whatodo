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
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">Whatodo <span style="color:greenyellow">In Menorca</span> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Search</a></li>
                    <li><a class="dropdown-button" href="#!" data-beloworigin="true" data-activates="categories">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
