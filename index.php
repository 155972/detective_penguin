<?php
    session_start();
    
    if(isset($_SESSION['isEmployee']) && $_SESSION['isEmployee'])
        header("Location: empl/account.php");
    else
        header("Location: client_pages/home.html");
?>