<?php
    session_start(); 
        
    if (isset($_SESSION['log_in']) && $_SESSION['log_in'])
        header('Location: ../index.php');
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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script type="text/javascript" src='script.js'></script>
</head>
<body>
    <header></header>  
    <section>
    <div id="reg">
        <div class="container">
            <div id="reg-row" class="row justify-content-center align-items-center">
                <div id="reg-column" class="col-md-6">
                    <div id="reg-box" class="col-md-12">
                        <form id="reg-form" class="form" action="regCHCK.php" method="post">
                            <h3 class="text-center text-dark">Rejestracja</h3>
                            <div class="form-group">
                                <label for="email" class="text-dark">*Email:</label><br>
                                <input type="text" name="email" required id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">*Hasło:</label><br>
                                <input type="password" name="password" required id="password" onkeyup="haslo();" onfocusout="haslo();" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">*Powtórz hasło:</label><br>
                                <input type="password" name="password"  required id="password2" onkeyup="haslo();" onfocusout="haslo();" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fName" class="text-dark">*Imię:</label><br>
                                <input type="text" name="fName" required id="fName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lName" class="text-dark">*Nazwisko:</label><br>
                                <input type="text" name="lName" required id="lName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-dark">*Telefon:</label><br>
                                <input type="tel" name="phone" required id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="city" class="text-dark">Miasto:</label><br>
                                <input type="text" name="city" id="city" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postcode" class="text-dark">Kod pocztowy:</label><br>
                                <input type="text" name="postcode" id="postcode" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="street" class="text-dark">Ulica:</label><br>
                                <input type="text" name="street" id="street" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="apartnumber" class="text-dark">Numer mieszkania:</label><br>
                                <input type="text" name="apartnumber" id="apartnumber" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-color btn-md" value="submit" disabled>
                                <?php
                                    if(isset($_SESSION['msg'])){
                                        if($_SESSION['msg'] == 0)
                                            echo "<p style='color: green;'>*Rejestracja wykonana, sprawdź maila</p>";
                                        else if($_SESSION['msg'] == 1)
                                            echo "<p style='color: red;'>*Podany email już ma przypisane konto</p>";
                                        unset($_SESSION['msg']);
                                    }
                                    else 
                                        echo "<p style='color: red;'></p>";
                                ?>
                            </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>