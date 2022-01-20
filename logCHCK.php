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
                            <a class="nav-link" href="#">Zaloguj&nbsp;się</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+48622000781">+48&nbsp;622&nbsp;000&nbsp;781</a>
                    </ul>
    
                </div>
    
            </nav>
    </header>  
    <section>
<?php

$login=$_POST['username'];
$haslo=$_POST['password'];

$polaczenie = mysqli_connect("", "","", "") or die("brak połączenia z serwerem - log");
mysqli_select_db($polaczenie, "")or die("Nie połączono z bazą - log");
$pytanie = "SELECT login AND haslo FROM user WHERE login='".$login."'AND haslo='".$haslo."';"
$wynik = mysqli_query($polaczenie,$pytanie);
$tabela_wyniku = mysqli_fetch_row($wynik);
if(empty($tabela_wyniku))
{
?>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="logCHCK.php" method="post">
                            <h3 class="text-center text-dark">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-dark">Email:</label><br>
                                <input type="text" name="username" required id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Hasło:</label><br>
                                <input type="password" name="password" required id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-color btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <br><a href="#" class="text-dark">Zarejestruj się</a>
                            </div>
                        </form>
                        <h3 style="color:red;">Błąd logowania! Sprawdź login i hasło</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
else
	{
        $_SESSION["user"] = $login;
	    $_SESSION["passwd"] = $haslo;
		header('Location: index.php');
		}
	mysqli_close($polaczenie);
?>
    </section>
</body>
</html>