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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>
    <header>
            <nav class="navbar bg-light navbar-expand-lg">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navabar" id="mainmenu">
                    <ul class="navbar-nav justify-content-between">
                        <li class="nav-item navbar-brand" onclick="contentChange('client_pages/home.html')">
                            <img class="d-inline-block mr-1 align-bottom" src="logo.PNG" alt="Detektyw Pingwin">
                        </li>
                        <li class="nav-item" id="FAQ" onclick="contentChange('client_pages/FAQ.html')">
                            <a class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item" id="price_list" onclick="contentChange('client_pages/price_list.php')">
                            <a class="nav-link">Cennik</a>
                        </li>
                        <li class="nav-item" id="services" onclick="contentChange('client_pages/services.php')">
                            <a class="nav-link">Usługi</a>
                        </li>
                        <li class="nav-item" id="contact" onclick="contentChange('client_pages/contact.php')">
                            <a class="nav-link">Kontakt</a>
                        </li>
                        <li class="nav-item" id="about_us" onclick="contentChange('client_pages/about_us.html')">
                            <a class="nav-link">O&nbsp;nas</a>
                        </li>
                        <li class="nav-item" id="sign_in" onclick="contentChange('log.php')">
                            <a class="nav-link">Zaloguj&nbsp;się</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+48622000781">+48&nbsp;622&nbsp;000&nbsp;781</a>
                    </ul>

                </div>

            </nav>
    </header>
    <script>
        function contentChange(path){
            $("#includedContent").load(path);
        }
    </script>
    <div id="includedContent">
        <script>$("#includedContent").load('client_pages/home.html');</script>
    </div>

</body>
</html>