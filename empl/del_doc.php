<?php
    session_start();
	if(!(isset($_SESSION['log_in']) && $_SESSION['log_in']))
		header('Location: ../index.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once "../connect.php";

        $connect = @new mysqli($host, $db_user, $db_password, $db_name);

        $connect->set_charset('utf8');

        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else {
            $cID = $_SESSION['caseID'];
            $docno = $_POST['docnumber'];

            $doc = $connect->query("SELECT ID FROM document WHERE docnumber = '$docno'")->fetch_assoc();
            $dID = $doc['ID'];

            $connect->query("DELETE FROM used_docs WHERE ID_case = '$cID' AND ID_doc = '$dID'");
        }
    }
?>