<?php
    session_start();
    $logged_in = false;
    if(isset($_SESSION['log_in']) && $_SESSION['log_in'])
        $logged_in = true;
?>

<nav class="navbar bg-light navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji" >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navabar" id="mainmenu">
        <ul class="navbar-nav justify-content-between">
            <li class="nav-item navbar-brand">
                <a href="home.html"><img class="d-inline-block mr-1 align-bottom" src="../logo.PNG" alt="Detektyw Pingwin"></a>
            </li>
            <li class="nav-item" id="FAQ">
                <a href="FAQ.html" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item" id="price_list">
                <a href="price_list.php" class="nav-link">Cennik</a>
            </li>
            <li class="nav-item" id="services">
                <a href="services.php" class="nav-link">Usługi</a>
            </li>
            <li class="nav-item" id="contact">
                <a href="contact.php" class="nav-link">Kontakt</a>
            </li>
            <li class="nav-item" id="about_us">
                <a href="about_us.html" class="nav-link">O&nbsp;nas</a>
            </li>
            <li class="nav-item" id="sign_in">
                <?php if($logged_in){ ?>
                    <a class="nav-link" href="../logout.php">Wyloguj&nbsp;się</a>
                <?php }else{ ?>
                    <a class="nav-link" href="log.php">Zaloguj&nbsp;się</a>
                <?php } ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tel:+48622000781"><i class="fas fa-phone-alt"></i>&nbsp;+48&nbsp;622&nbsp;000&nbsp;781</a>
        </ul>

    </div>
</nav>