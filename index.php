<?php
    session_start();
    require_once "connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    $connect->set_charset('utf8');

    if ($connect->connect_errno!=0) {
        echo "Error: ".$connect->connect_errno;
    }
    else { 
        if(!(isset($_SESSION['log_in']) && $_SESSION['log_in']))
            header("Location: client_pages/home.html");
        else{
            $uID = $_SESSION['UserID'];
            $client = $connect->query("SELECT ID FROM client WHERE ID_user='$uID'")->num_rows;
    
            if($client >= 1)
                header("Location: client_pages/home.html");
            else
                header("Location: empl/account.php");
        }
    }
?>