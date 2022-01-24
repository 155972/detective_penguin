<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "../connect.php";

		$connect = @new mysqli($host, $db_user, $db_password, $db_name);

		$connect->set_charset('utf8');

		if ($connect->connect_errno!=0) {
			echo "Error: ".$connect->connect_errno;
		}
		else {
            session_start();

            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['password']);
            $rows_email = $connect->query("SELECT email FROM user WHERE email='$email'")->num_rows;

            if ($rows_email<1){
                $_SESSION['bdlgin'] = 1;
                header('Location: log.php');
            }

            $user = $connect->query("SELECT * FROM user WHERE email='$email'")->fetch_assoc();

            if ($user['passwd'] == $pass) {
                $uID = $user['ID'];
                $_SESSION['log_in'] = true;
                $_SESSION['UserID'] = $uID;
                $_SESSION['Email'] = $user['email'];
                $_SESSION['FName'] = $user['first_name'];
                $_SESSION['LName'] = $user['last_name'];
                $_SESSION['Phone'] = $user['phone'];

                $connect->query("UPDATE user SET last_accessed = CURRENT_DATE() WHERE ID = '$uID'");
                
                $client = $connect->query("SELECT ID FROM client WHERE ID_user='$uID'")->num_rows;

                if($client >= 1){
                    $client = $connect->query("SELECT * FROM client WHERE ID_user='$uID'")->fetch_assoc();
                    $_SESSION['postcode'] = $client['postcode'];
                    $_SESSION['city'] = $client['city'];
                    $_SESSION['street'] = $client['street'];
                    $_SESSION['apartnumber'] = $client['apartnumber'];
                }
                else{
                    $client = $connect->query("SELECT * FROM employee WHERE ID_user='$uID'")->fetch_assoc();
                    $_SESSION['isEmployee'] = true;
                    $_SESSION['PESEL'] = $client['PESEL'];
                    $_SESSION['salary'] = $client['salary'];
                    $_SESSION['position'] = $client['position'];
                    $_SESSION['licence_number'] = $client['licence_number'];
                    $_SESSION['postcode'] = $client['postcode'];
                    $_SESSION['city'] = $client['city'];
                    $_SESSION['street'] = $client['street'];
                    $_SESSION['apartnumber'] = $client['apartnumber'];
                }

                header('Location: ../index.php');
            }
            $_SESSION['bdlgin'] = 1;
            header('Location: log.php');
		}
	}
    else header('Location: ../index.php');
?>