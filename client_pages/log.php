<?php
    session_start();
	if(isset($_SESSION['log_in']) && $_SESSION['log_in'])
		header('Location: home.html');
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <style>
        #sign_in{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <header></header>  
    <section>
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="logCHCK.php" method="post">
                                <h3 class="text-center text-dark">Login</h3>
                                <div class="form-group">
                                    <label for="email" class="text-dark">Email:</label><br>
                                    <input type="text" name="email" required id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-dark">Hasło:</label><br>
                                    <input type="password" name="password" required id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-color btn-md" value="submit">
                                </div>
                                <div id="register-link" class="text-right">
                                    <br><a href="reg.php" class="text-dark">Zarejestruj się</a>
                                </div>
                            </form>
                            <p id="form-err"></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $("header").load('menu.php');
    </script>

    <?php
        if(isset($_SESSION['bdlgin']) && htmlspecialchars($_SESSION['bdlgin']) == 1){
            echo '<script>document.getElementById("form-err").innerHTML = "*Błąd logowania - nieprawidłowe dane";</script>';
            unset($_SESSION['bdlgin']);
        }
    ?>
</body>
</html>