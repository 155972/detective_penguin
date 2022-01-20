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
    <SCRIPT type="text/javascript" src='haslo.js'></SCRIPT>
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
    <div id="reg">
        <div class="container">
            <div id="reg-row" class="row justify-content-center align-items-center">
                <div id="reg-column" class="col-md-6">
                    <div id="reg-box" class="col-md-12">
                        <form id="reg-form" class="form" action="reg.php" method="post">
                            <h3 class="text-center text-dark">Rejestracja</h3>
                            <div class="form-group">
                                <label for="email" class="text-dark">Email:</label><br>
                                <input type="text" name="email" required id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Hasło:</label><br>
                                <input type="password" name="password" required id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Powtórz hasło:</label><br>
                                <input type="password" name="password"  required id="password2" onkeyup="haslo();" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-color btn-md" value="submit">
                                <p id="form-err" style="color:red;"></p>
                            </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<?php
        // jeśli submit zostanie kliknięty
        {
            require_once "connect.php";
            
            $connect = @new mysqli($host, $db_user, $db_password, $db_name);
            
            $connect->query('SET NAMES utf8');
            $connect->query('SET CHARACTER_SET utf8_unicode_ci');
            
            if ($connect->connect_errno!=0) {
                echo "Error: ".$connect->connect_errno;
            }
            else {
                $email = $_GET['email'];
                $pass = $_GET['password'];
                $rows_email = $connect->query("SELECT email FROM user WHERE email='$email'")->num_rows;
                
                if ($rows_email<1) header('Location: log.php?bdlgin=1');
            
                $user = $connect->query("SELECT * FROM user WHERE email='$email'")->fetch_assoc();
                
                if ($user['passwd'] == $pass) {
                    $_SESSION['log_in'] = true;
                    $_SESSION['UserID'] = $user['ID'];
                    $_SESSION['Email'] = $user['email'];
                    $_SESSION['FName'] = $user['first_name'];
                    $_SESSION['LName'] = $user['last_name'];
                    $_SESSION['Phone'] = $user['phone'];
                    
                    $connect->query("UPDATE user WHERE email='$email'");
                    header('Location: index.php');
                }
                header('Location: reg.php?bdreg=1');
            }
        }
        echo '<script>document.getElementById("form-err").innerHTML = "Rejestracja wykonana, sprawdź maila";</script>';
?>
</body>
</html>