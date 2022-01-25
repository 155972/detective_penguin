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
                <th></th>
            </tr>
            <?php
                require_once "../connect.php";
                session_start();

                $connect = @new mysqli($host, $db_user, $db_password, $db_name);

                $connect->set_charset('utf8');

                if ($connect->connect_errno!=0) {
                    echo "Error: ".$connect->connect_errno;
                }
                else { 
                    $uID = $_SESSION['userID'];
                    $emp = $connect->query("SELECT ID FROM employee WHERE ID_user = '$uID'")->fetch_assoc();
                    $eID = $emp['ID'];
                    $cases = $connect->query("SELECT * FROM cases INNER JOIN employee_in_cases ON cases.ID = ID_case WHERE ID_emp = '$eID'");
                    $rows = $cases->num_rows;

                    for($i=0; $i<$rows; $i++){
                        $row = $cases->fetch_assoc();
                        $ID = $row['ID'];
                        $casenumber = $row['casenumber'];
                        $date = $row['consultation'];

                        $clientID = $row['ID_client'];
                        $client = $connect->query("SELECT first_name, last_name FROM user INNER JOIN client ON user.ID=client.ID_user WHERE client.ID = $clientID")->fetch_assoc();
                        $cName = $client['first_name']." ".$client['last_name'];

echo<<<EOT
                <tr>
                <td>{$casenumber}</td>
                <td>{$cName}</td>
                <td>{$date}</td>
                <td onclick="$('.right').load('docs_in_case.php', { caseID: {$ID} });"><i class="far fa-edit" style="color:#3060f0"></i></td>
                </tr>
EOT;
                    }

                }
        ?>
        </table>
    </div>
    <script>
            $("header").load('empl.html');
    </script>
</body>
</html>