<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "connect.php";

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

                header('Location: index.php');
            }
            $_SESSION['bdlgin'] = 1;
            header('Location: log.php');
		}
	}
    else header('Location: index.php');
?>