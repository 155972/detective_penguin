<?php
    // jeśli submit zostanie kliknięty
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "connect.php";
        
        $connect = @new mysqli($host, $db_user, $db_password, $db_name);
        
        $connect->set_charset('utf8');
        
        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else {
            session_start();

            $email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$fName = htmlspecialchars($_POST['fName']);
			$lName = htmlspecialchars($_POST['lName']);
			$phone = htmlspecialchars($_POST['phone']);
			$city = htmlspecialchars($_POST['city']);
			$postcode = htmlspecialchars($_POST['postcode']);
			$street = htmlspecialchars($_POST['street']);
			$apartnumber = htmlspecialchars($_POST['apartnumber']);
			
			$rows_login = $connect->query("SELECT email FROM user WHERE email='$email'")->num_rows;
			
			if ($rows_login>=1){
                $_SESSION['msg'] = 1;
                header('Location: reg.php');
            }
			else{
				$connect->query("INSERT INTO user(email, passwd, first_name, last_name, phone, verified) VALUES ('$email', '$password', '$fName', '$lName', '$phone', 1)");
                $uID = $connect->insert_id;
				$connect->query("INSERT INTO client(ID_user, postcode, city, street, apartnumber) VALUES ('$uID', '$postcode', '$city', '$street', '$apartnumber')");
                
                $_SESSION['msg'] = 0;
                header('Location: reg.php');
            }
        }
    }
    else header('Location: index.php');
?>