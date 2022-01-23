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
        #cases{
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
        <table width="50%">
            <tr style="border-bottom: 1px solid #777;">
                <th>Numer sprawy</th>
                <th>Klient</th>
                <th>Data otwarcia</th>
            </tr>
            <tr>
                <td>OO2109217</td>
                <td>Agata Męczywór</td>
                <td>21-09-2021</td>
            </tr>
            <tr>
                <td>SR1711205</td>
                <td>Mirosław Malinowski</td>
                <td>17-11-2021</td>
            </tr>
        </table>
    </div>
    <script>
            $("header").load('empl.html');
    </script>
</body>
</html>