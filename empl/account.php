<?php
    session_start();
	if(!(isset($_SESSION['log_in']) && $_SESSION['log_in']))
		header('Location: ../index.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "../connect.php";

        $connect = @new mysqli($host, $db_user, $db_password, $db_name);

        $connect->set_charset('utf8');

        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else {
            $uID = $_SESSION['userID'];
            $fName = $_POST['firstname'];
            $lName = $_POST['surname'];
            $pesel = $_POST['PESEL'];
            $phone = $_POST['phonenumber'];
            $email = $_POST['email'];
            $licence = $_POST['licence'];

            $_SESSION['fName'] = $_POST['firstname'];
            $_SESSION['lName'] = $_POST['surname'];
            $_SESSION['PESEL'] = $_POST['PESEL'];
            $_SESSION['phone'] = $_POST['phonenumber'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['licence_number'] = $_POST['licence'];

            $connect->query("UPDATE `user` SET `first_name` = '$fName', `last_name` = '$lName', `phone` = '$phone' WHERE `user`.`ID` = '$uID'");
            $connect->query("UPDATE employee SET PESEL = '$pesel', licence_number = '$licence' WHERE ID_user = '$uID'");
        }
    }
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
    #account{
        background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
        border-radius: 100px;
    }
    </style>
</head>
<body>
    <div style="float:left;">
        <header>
        </header>

    </div>
    <div class="right">
        <table style="width:30vw; min-width:400px;">
            <tr>
                <td>Imię: </td>
                <td style="text-align: right;"><?php echo $_SESSION['fName'] ?></td>
            </tr>
            <tr>
                <td>Nazwisko: </td>
                <td style="text-align: right;"><?php echo $_SESSION['lName'] ?></td>
            </tr>
            <tr>
                <td>PESEL: </td>
                <td style="text-align: right;"><?php echo $_SESSION['PESEL'] ?></td>
            </tr>
            <tr>
                <td>Nr Tel: </td>
                <td style="text-align: right;"><?php echo $_SESSION['phone'] ?></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td style="text-align: right;"><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <td>Nr licencji: </td>
                <td style="text-align: right;"><?php echo $_SESSION['licence_number'] ?></td>
            </tr>
            <tr>
                <td colspan=2><button class="b_check_price" onclick="$('.right').load('edit_empl.php');">Edytuj dane</button></td>
            </tr>
        </table>
    </div>
    <script>
            $("header").load('empl.html');
    </script>
</body>
</html>