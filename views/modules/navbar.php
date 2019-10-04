<div class="navbar-fixed">
    <nav class="blue">
        <div class="nav-wrapper">
            <div class="padding-left">
                <a href="index.php" class="brand-logo">PHP Page</a>
            </div>
            <div class="pointer-cursor">
                <a class="sidenav-trigger" data-target="responsive-menu">
                    <i class="material-icons">
                        menu
                    </i>
                </a>
            </div>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio<i class="material-icons right">home</i></a></li>
                <li><a href="index.php?link=about">Información<i class="material-icons right">info</i></a></li>
            </ul>
        </div>
    </nav>
</div>

<?php
    #Incluyendo el sidenav del navbar
    include "./views/modules/sidenav.php";
?>
