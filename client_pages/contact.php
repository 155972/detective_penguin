<?php
    session_start();
    $logged_in = false;
    if(isset($_SESSION['log_in']) && $_SESSION['log_in'])
        $logged_in = true;

    require_once "../connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    $connect->set_charset('utf8');

    if ($connect->connect_errno!=0) {
        echo "Error: ".$connect->connect_errno;
    }
    else { 
        $services = $connect->query("SELECT ID, name FROM service");
        $rows = $services->num_rows;
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
    <style>
        #contact{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <header></header>
    <div class="container col-md-12">
                    <div id="cont" style="float:left;">
                        <div class="container">
                            <h4>Skontaktuj się z nami!</h4>
                            <div id="cont-row" class="align-items-center">
                                <div id="cont-column">
                                    <div id="cont-box" class="col-md-12">
                                    <?php if($logged_in) {?>
                                    <form class="form" method="POST" action="add_case.php">
                                        <label class="text-dark" for="firstname">Imię:</label></br>
                                        <input class="form-control" type="text" name="firstname" value="<?php echo $_SESSION['fName']; ?>"></br>
                                        <label class="text-dark" for="lastname">Nazwisko:</label></br>
                                        <input class="form-control"  type="text" name="lastname" value="<?php echo $_SESSION['lName']; ?>"></br>
                                        <label class="text-dark" for="service">Temat konsultacji:</label></br>
                                        <select class="form-control" name="service">
                                        <?php
                                            for($i=0; $i<$rows; $i++){
                                                $row = $services->fetch_assoc();
                                                $ID = $row['ID'];
                                                $name = $row['name'];
                                                if(isset($_GET["chosen_service"]) && $_GET["chosen_service"] == $row['ID']){
                                                    echo "<option value='{$ID}' selected>{$name}</option>";
                                                }
                                                else
                                                    echo "<option value='{$ID}'>{$name}</option>";
                                            }
                                        ?>
                                        </select></br>
                                        <label class="text-dark" for="comment">Komentarz:</label></br>
                                        <textarea style="width:100%;" name="comment"></textarea></br>
                                        <label class="text-dark" for="date">Data konsultacji</label></br>
                                        <input class="form-control" type="date" name="date"></br>
                                        <label class="text-dark" for="time">Godzina konsultacji</label></br>
                                        <input class="form-control" type="time" name="time"></br>
                                        <label class="text-dark" for="phone">Numer kontaktowy</label></br>
                                        <input class="form-control" type="tel" name="phone" value="<?php echo $_SESSION['phone']; ?>"></br>
                                        <p><input class="btn btn-color btn-md" type="submit" value="wyslij"></p>
                                        </br>
                                    </form>
                                    <?php 
                                            if (isset($_SESSION['msg']) && $_SESSION['msg'] == 0){
                                                echo "<p style='color: green;'>Formularz został wysłany, nasz konsultant skontaktuje się w wyznaczonym terminie.</p>";
                                                unset($_SESSION['msg']);
                                            }
                                        } else { 
                                    ?>
                                        <p> <a href="log.php">Zaloguj się</a>, aby wysłać formularz zgłoszeniowy</p>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div style="text-align: right;">
                    <h3>Biuro&nbsp;detektywistyczne </br>Detektyw&nbsp;Pingwin</h3>
                    <p>
                    <i class="far fa-building"></i>&nbsp;ul.&nbsp;Słoneczna&nbsp;54</br>
                    10-710&nbsp;Olsztyn</br>
                    <i class="fas fa-phone-alt"></i>&nbsp;+48&nbsp;622&nbsp;000&nbsp;781 </br>
                    <i class="fas fa-at"></i>&nbsp;biuro@pingwin.net</br>
                    </p>
                </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2359.552651906696!2d20.453917615853523!3d53.744041780064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e27f4c552e8ff5%3A0x1bf53ea293a96035!2sS%C5%82oneczna%2054%2C%2010-710%20Olsztyn!5e0!3m2!1spl!2spl!4v1642716932896!5m2!1spl!2spl" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>

<?php } ?>