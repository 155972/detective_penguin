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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <style>
        #price_list{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
        tr{
            border-bottom: 1px solid #000;
        }
        a{
            color: blue;
        }
    </style>
</head>
<body>
    <header></header>
    <div class="container">
        <table>
            <tr id="consult">
                <td style="width: 70%;">
                    Konsultacja detektywistyczna</br>
                    <a class="b_check_price" href="services.php" style="font-size: 16px; float:left;">Dowiedz się więcej</a>
                </td>
                <td style="width: 15%;">bezpłatnie</td>
                <td style="width: 15%;">
                    <a class="b_check_price" href="contact.php" style="font-size: 16px;">Wybierz usługę</a>
                </td>
            </tr>
            <tr id="wiariograf">
                <td style="width: 70%;">
                    Badanie wariografem (wykrywacz kłamstw)</br>
                    <a class="b_check_price" href="services.php" style="font-size: 16px; float:left;">Dowiedz się więcej</a>
                </td>
                <td style="width: 15%;">od 1500 zł</td>
                <td style="width: 15%;">
                    <a class="b_check_price" href="contact.php" style="font-size: 16px;">Wybierz usługę</a>
                </td>
            </tr>
            <tr id="observation">
                <td style="width: 70%;">
                    Obserwacja osoby</br>
                    <a class="b_check_price" href="services.php" style="font-size: 16px; float:left;">Dowiedz się więcej</a>
                </td>
                <td style="width: 15%;">od 800 zł</td>
                <td style="width: 15%;">
                    <a class="b_check_price" href="contact.php" style="font-size: 16px;">Wybierz usługę</a>
                </td>
            </tr>
            <tr id="pesel">
                <td style="width: 70%;">
                    Ustalenie numeru PESEL</br>
                    <a class="b_check_price" href="services.php" style="font-size: 16px; float:left;">Dowiedz się więcej</a>
                </td>
                <td style="width: 15%;">od 750 zł</td>
                <td style="width: 15%;">
                    <a class="b_check_price" href="contact.php" style="font-size: 16px;">Wybierz usługę</a>
                </td>
            </tr>
            <tr id="lost_people">
                <td style="width: 70%;">
                    Poszukiwanie osób zaginionych</br>
                    <a class="b_check_price" href="services.php" style="font-size: 16px; float:left;">Dowiedz się więcej</a>
                </td>
                <td style="width: 15%;">indywidualna wycena</td> <!-- cost=NULL w bazie-->
                <td style="width: 15%;">
                    <a class="b_check_price" href="contact.php" style="font-size: 16px;">Wybierz usługę</a>
                </td>
            </tr>
        </table>
    </div>
    
    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>