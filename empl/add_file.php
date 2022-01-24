<?php
    session_start();
	if(!(isset($_SESSION['log_in']) && $_SESSION['log_in']))
		header('Location: ../index.php');
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <table width="30%">
        <tr>
            <td><label for="docnumber">Numer dokumentu: </label></td>
            <td style="text-align: right;"><input type="text" name="docnumber"></td>
        </tr>
        <tr>
            <td><label for="name">Nazwa: </label></td>
            <td style="text-align: right;"><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label for="comment">Komentarz: </label></td>
            <td style="text-align: right;"><input type="text" name="comment"></td>
        </tr>
        <tr>
            <td><label for="file">Plik: </label></td>
            <td style="text-align: right;"><input type="file" name="file"></td>
        </tr>
        <tr>
            <td style="float:left"><a href="account.php"><button class="b_check_price">Powrót</button></a></td>
            <td><input type="submit" class="b_check_price" value="Zapisz dane"></td>
        </tr>
    </table>
</form>