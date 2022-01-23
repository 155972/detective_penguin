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
        <table width="30%">
            <tr>
                <td>Imię: </td>
                <td style="text-align: right;">Jan</td>
            </tr>
            <tr>
                <td>Nazwisko: </td>
                <td style="text-align: right;">Talerz</td>
            </tr>
            <tr>
                <td>PESEL: </td>
                <td style="text-align: right;">91042156481</td>
            </tr>
            <tr>
                <td>Nr Tel: </td>
                <td style="text-align: right;">600821732</td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td style="text-align: right;">jtalerz@gmail.com</td>
            </tr>
            <tr>
                <td>Nr licencji: </td>
                <td style="text-align: right;">0003621</td>
            </tr>
            <tr>
                <td colspan=2><button class="b_check_price" onclick="$('.right').load('edit.php');">Edytuj dane</button></td>
            </tr>
        </table>
    </div>
    <script>
            $("header").load('empl.html');
    </script>
</body>
</html>