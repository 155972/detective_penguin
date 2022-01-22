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
        #services{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <header></header>
    <section>
        <div class="container" id="consult">
            <h3 class="service_name">Konsultacja detektywistyczna</h3>
            <table>
                <tr>
                    <td style="width: 85%;">
                        <p>
                        Umów się na bezpłatną konsultację telefoniczną i opowiedz o swojej sytuacji. Dopasujemy się do Twoich możliwości i znajdziemy najlepsze rozwiązanie.
                        </p>
                    </td>
                    <td class="t_check_price">
                        <a class="b_check_price" href="price_list.php">sprawdź cenę</a>
                    </td>
                </tr>
            </table>

        </div>

        <div class="container" id="wiariograf">
            <h3 class="service_name">Badanie wariografem (wykrywacz kłamstw)</h3>
            <table>
                <tr>
                    <td style="width: 85%;">
                        <p>
                        Istnieją sytuacje, w których dotarcie do prawdy jest niezwykle trudne. Dotyczy to zarówno życia prywatnego, jak i zawodowego. Właśnie dlatego tak dużo osób decyduje się podpiąć pod wariograf. Cena w porównaniu do korzyści, jakie można zyskać, jest naprawdę przystępna. Należy podkreślić, że badanie wariografem ukazuje prawdę, a nieraz pozwala oczyścić się z zarzutów.
                        </p>
                    </td>
                    <td class="t_check_price">
                        <a class="b_check_price" href="price_list.php">sprawdź cenę</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container" id="observation">
            <h3 class="service_name">Obserwacja osoby</h3>
            <table>
                <tr>
                    <td style="width: 85%;">
                        <p>
                        Udowodnienie komuś bliskiemu nielojalności lub zdrady nie jest sprawą łatwą. Dla tych, którzy chcą dojść prawdy, śledzenie na własną rękę męża lub żony jest dodatkowo bardzo obciążające psychicznie i emocjonalnie. Dlatego obserwację osób, względem których żywimy silne uczucia i równie silne podejrzenia warto powierzyć profesjonalistom.
                        </p>
                    </td>
                    <td class="t_check_price">
                        <a class="b_check_price" href="price_list.php">sprawdź cenę</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container" id="pesel">
            <h3 class="service_name">Ustalenie numeru PESEL</h3>
            <table>
                <tr>
                    <td style="width: 85%;">
                        <p>
                        Wymagane dodatkowe informacje (np. imiona rodziców, miejsce urodzenia, adres zameldowania).
                        </p>
                    </td>
                    <td class="t_check_price">
                        <a class="b_check_price" href="price_list.php">sprawdź cenę</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container" id="lost_people">
            <h3 class="service_name">Poszukiwanie osób zaginionych</h3>
            <table>
                <tr>
                    <td style="width: 85%;">
                        <p>
                        Każdego roku policja odnotowuje kilkanaście tysięcy zaginięć. Każdego z nas może spotkać taka sytuacja, gdy ktoś z rodziny, znajomych zaginie z dnia na dzień. Zaginąć może każdy niezależnie od płci, wieku, wykształcenia. Najważniejsze, by w takich sytuacjach zacząć jak najszybciej działać.
                        </p>
                    </td>
                    <td class="t_check_price">
                        <a class="b_check_price" href="price_list.php">sprawdź cenę</a>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>