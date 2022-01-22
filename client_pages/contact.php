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
        #contact{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <header></header>
    <div class="container">
        <table>
            <tr>
                <td>
                    <h4>Skontaktuj się z nami!</h4>
                        <form>
                            <label for="firstname">Imię:</label></br>
                            <input type="text" name="firstname"></br>
                            <label for="lastname">Nazwisko:</label></br>
                            <input type="text" name="lastname"></br>
                            <label for="service">Temat konsultacji:</label></br>
                            <select name="service">
                            <?php
                                require_once "../connect.php";

                                $connect = @new mysqli($host, $db_user, $db_password, $db_name);

                                $connect->set_charset('utf8');

                                if ($connect->connect_errno!=0) {
                                    echo "Error: ".$connect->connect_errno;
                                }
                                else { 
                                    $services = $connect->query("SELECT ID, name FROM service");
                                    $rows = $services->num_rows;

                                    for($i=0; $i<$rows; $i++){
                                        $row = $services->fetch_assoc();
                                        $name = $row['name'];
                                        if(isset($_GET["chosen_service"]) && $_GET["chosen_service"] == $row['ID']){
                                            echo "<option value='{$name}' selected>{$name}</option>";
                                        }
                                        else
                                            echo "<option value='{$name}'>{$name}</option>";
                                    }

                                }
                            ?>
                            </select></br>
                            <label for="comment">Komentarz:</label></br>
                            <textarea name="comment"></textarea></br>
                            <label for="date">Data konsultacji</label></br>
                            <input type="date" name="date"></br>
                            <label for="time">Godzina konsultacji</label></br>
                            <input type="time" name="time"></br>
                            <label for="phone">Numer kontaktowy</label></br>
                            <input type="tel" name="phone"></br>
                            <p><input type="submit" value="wyslij"></p>
                            </br>
                        </form>

                </td>
                <td style="text-align: right;">
                    <h3>Biuro&nbsp;detektywistyczne </br>Detektyw&nbsp;Pingwin</h3>
                    <p>
                    ul.&nbsp;Słoneczna&nbsp;54</br>
                    10-710&nbsp;Olsztyn</br>
                    tel:&nbsp;+48&nbsp;622&nbsp;000&nbsp;781 </br>
                    email:&nbsp;biuro@pingwin.net</br>
                    </p>
                </td>
            </tr>
        </table>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2359.552651906696!2d20.453917615853523!3d53.744041780064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e27f4c552e8ff5%3A0x1bf53ea293a96035!2sS%C5%82oneczna%2054%2C%2010-710%20Olsztyn!5e0!3m2!1spl!2spl!4v1642716932896!5m2!1spl!2spl" width="100%" height="400" style="border:1; border-radius:10px;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>