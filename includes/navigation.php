<?php
    $page = basename($_SERVER['PHP_SELF']); // Returns the current PHP filename
?>

<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: inline-block !important;">
        <div class="row">
            <img src="img/logo.png" class="navbar-logo-top" alt="" />
            <div class="navbar-interior">
                <ul class="navbar-nav mr-auto navbar-ul">
                    <li id="nav-li1" class="nav-item <?php echo $page == "index.php" ? 'active' : ''; ?>">
                        <a class="nav-link" href="/verkkoauto">Etusivu <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="nav-li2" class="nav-item <?php echo $page == "cars.php" ? 'active' : ''; ?>">
                        <a class="nav-link" href="/verkkoauto/cars">Ajoneuvot</a>
                    </li>
                    <li id="nav-li3" class="nav-item <?php echo $page == "contact.php" ? 'active' : ''; ?>">
                        <a class="nav-link" href="/verkkoauto/contact">Yhteystiedot</a>
                    </li>
                </ul>
            </div>
            <a class="mobile-nav-icon"><i class="fas fa-bars"></i></a>
        </div>
    </div>
</nav>