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
    <script type="text/javascript" src='script.js'></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <style>
        #services{
            background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
            border-radius: 100px;
        }
    </style>
</head>
<body onload="hg();">
    <header></header>
    <section>
        <?php
            require_once "../connect.php";

            $connect = @new mysqli($host, $db_user, $db_password, $db_name);

            $connect->set_charset('utf8');

            if ($connect->connect_errno!=0) {
                echo "Error: ".$connect->connect_errno;
            }
            else { 
                $services = $connect->query("SELECT ID, name, description FROM service");
                $rows = $services->num_rows;

                for($i=0; $i<$rows; $i++){
                    $row = $services->fetch_assoc();
                    $ID = $row['ID'];
                    $name = $row['name'];
                    $description = $row['description'];
echo<<<EOT
                    <div class="container" id="{$ID}">
                    <h3 class="service_name" style="float:left; margin-top:20px;">{$name}</h3>
                    <a class="b_check_price" style="margin-top:20px;" href="price_list.php#{$ID}">sprawdź cenę</a>
                    <table>
                        <tr>
                            <td style="width: 85%;">
                                <p style="padding-right:15%;">
                                {$description}
                                </p>
                            </td>
                        </tr>
                    </table>

                    </div>
EOT;
                }

            }
        ?>
    </section>

    <script>
        $("header").load('menu.php');
    </script>
</body>
</html>