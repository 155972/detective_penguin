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
            $comment = $_POST['comment'];

            $case = $connect->query("SELECT casenumber FROM cases WHERE ID = '$cID'")->fetch_assoc();
            $caseno = $case['casenumber'];

            $target_dir = "docs/".$caseno."/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            $file = basename($_FILES["file"]["name"]);
            $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

            // Allow certain file formats
            if($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg") {
                $type = "Zdjecie";
                $prefix = "Z";
            }
            else if ($fileType == "txt" || $fileType == "doc" || $fileType == "docx" || $fileType == "pdf"){
                $type = "Dokument";
                $prefix = "D";
            }
            else if ($fileType == "mp3" || $fileType == "wav"){
                $type = "Audio";
                $prefix = "A";
            }
            else if ($fileType == "mp4" || $fileType == "flv"){
                $type = "Wideo";
                $prefix = "W";
            }
            else{
                $type = "Inne";
                $prefix = "I";
            }

            $count = $connect->query("SELECT ID FROM document WHERE name = '$type' AND add_date = CURRENT_DATE()")->num_rows;
            $count++;
            $file_name = $prefix.date("dmy")."$count";
            $path = $target_dir.$file_name.".".$fileType;
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)) {
                $connect->query("INSERT INTO `document` (`ID`, `docnumber`, `name`, `comment`, `file`, `add_date`) VALUES (NULL, '$file_name', '$type', '$comment', '$path', CURRENT_DATE())");
                $dID = $connect->insert_id;
                $connect->query("INSERT INTO `used_docs`(`ID_case`, `ID_doc`) VALUES ('$cID','$dID')");
                $_SESSION['bdupload'] = 0;
            } else {
                $_SESSION['bdupload'] = 1;
            }
            header("Location: cases.php");
        }
    }
?>