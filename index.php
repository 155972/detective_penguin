<?php
    session_start();
    $logged_in = false;
    if(isset($_SESSION['log_in']) && $_SESSION['log_in'])
        $logged_in = true;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="detektyw, pingwin">
	<meta name="author" content="Agata Grymuła, Patryk Biel, Igor Boradyn, Adrian Bonisławski">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <title>Detektyw Pingwin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
            <nav class="navbar bg-light navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navabar" id="mainmenu">
                    <ul class="navbar-nav justify-content-between">
                        <li class="nav-item navbar-brand">
                            <img class="d-inline-block mr-1 align-bottom" src="logo.PNG" alt="Detekwy Pingwin">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cennik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usługi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">O&nbsp;nas</a>
                        </li>
                        <li class="nav-item">
                            <?php if($logged_in){ ?>
                                <a class="nav-link" href="logout.php">Wyloguj&nbsp;się</a>
                            <?php }else{ ?>
                                <a class="nav-link" href="log.php">Zaloguj&nbsp;się</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+48622000781">+48&nbsp;622&nbsp;000&nbsp;781</a>
                    </ul>
                </div>
            </nav>
    </header>  
    
    <section>
<?php

?>
    </section>

</body>
</html>