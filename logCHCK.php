<?php
    session_start();
    
	if (isset($_SESSION['log_in']) && $_SESSION['log_in'])
		header('Location: index.php');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "connect.php";
		
		$connect = @new mysqli($host, $db_user, $db_password, $db_name);
		
		$connect->query('SET NAMES utf8');
		$connect->query('SET CHARACTER_SET utf8_unicode_ci');
		
		if ($connect->connect_errno!=0) {
			echo "Error: ".$connect->connect_errno;
		}
		else {
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $rows_email = $connect->query("SELECT email FROM user WHERE email='$email'")->num_rows;
            
            if ($rows_email<1) header('Location: log.php?bdlgin=1');
        
            $user = $connect->query("SELECT * FROM user WHERE email='$email'")->fetch_assoc();
            
            if ($user['passwd'] == $pass) {
                $_SESSION['log_in'] = true;
                $_SESSION['UserID'] = $user['ID'];
                $_SESSION['Email'] = $user['email'];
                $_SESSION['FName'] = $user['first_name'];
                $_SESSION['LName'] = $user['last_name'];
                $_SESSION['Phone'] = $user['phone'];
                
                $connect->query("UPDATE user WHERE email='$email'");
                header('Location: index.php');
            }
            header('Location: log.php?bdlgin=1');
		}
	}
    header('Location: index.php');
?>