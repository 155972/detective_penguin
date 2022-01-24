<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "../connect.php";
        
        $connect = @new mysqli($host, $db_user, $db_password, $db_name);
        
        $connect->set_charset('utf8');
        
        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else {
            session_start();
            $services = array(1 => "KD", 2 => "OO", 3 => "UNP", 4 => "UWP", 5 => "BW", 6 => "UMN", 7 => "POZ", 8 => "UMZ", 9 => "OORP", 10 => "SS");

            $uID = $_SESSION['userID'];
            $fName = htmlspecialchars($_POST['firstname']);
			$lName = htmlspecialchars($_POST['lastname']);
			$service = $_POST['service'];
			$comment = htmlspecialchars($_POST['comment']);
			$date = $_POST['date'];
			$phone = htmlspecialchars($_POST['phone']);

            $caseno = $services[$service].date("dmy")."1";

			$connect->query("INSERT INTO cases(ID_client, casenumber, name, comment, add_date, paid) VALUES ('$uID', '$caseno', '$caseno', '$comment', CURRENT_DATE(), 0)");
            $cID = $connect->insert_id;
			$connect->query("INSERT INTO services_in_case(ID_case, ID_service) VALUES ('$cID', '$service')");
                
            $_SESSION['msg'] = 0;
            header('Location: contact.php');
        }
    }
    else header('Location: ../index.php');
?>