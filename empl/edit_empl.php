<?php
    session_start();
	if(!(isset($_SESSION['log_in']) && $_SESSION['log_in']))
		header('Location: ../index.php');
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <table style="width:30vw; min-width:400px;">
        <tr>
            <td><label for="firstname">Imię: </label></td>
            <td style="text-align: right;"><input type="text" name="firstname" value="<?php echo $_SESSION['fName'] ?>"></td>
        </tr>
        <tr>
            <td><label for="surname">Nazwisko: </label></td>
            <td style="text-align: right;"><input type="text" name="surname" value="<?php echo $_SESSION['lName'] ?>"></td>
        </tr>
        <tr>
            <td><label for="PESEL">PESEL: </label></td>
            <td style="text-align: right;"><input type="text" name="PESEL" value="<?php echo $_SESSION['PESEL'] ?>"></td>
        </tr>
        <tr>
            <td><label for="phonenumber">Nr Tel: </label></td>
            <td style="text-align: right;"><input type="text" name="phonenumber" value="<?php echo $_SESSION['phone'] ?>"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail: </label></td>
            <td style="text-align: right;"><input type="text" name="email" value="<?php echo $_SESSION['email'] ?>"></td>
        </tr>
        <tr>
            <td><label for="licence">Nr licencji: </label></td>
            <td style="text-align: right;"><input type="text" name="licence" value="<?php echo $_SESSION['licence_number'] ?>"></td>
        </tr>
        <tr>
            <td style="float:left"><a href="account.php"><button class="b_check_price">Powrót</button></a></td>
            <td><input type=submit class="b_check_price" value="Zapisz dane"></td>
        </tr>
    </table>
</form>