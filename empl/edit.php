<form>
    <table width="30%">
        <tr>
            <td><label for="firstname">Imię: </label></td>
            <td style="text-align: right;"><input type="text" name="firstname" value="Jan"></td>
        </tr>
        <tr>
            <td><label for="surname">Nazwisko: </label></td>
            <td style="text-align: right;"><input type="text" name="surname" value="Talerz"></td>
        </tr>
        <tr>
            <td><label for="PESEL">PESEL: </label></td>
            <td style="text-align: right;"><input type="text" name="PESEL" value="91042156481"></td>
        </tr>
        <tr>
            <td><label for="phonenumber">Nr Tel: </label></td>
            <td style="text-align: right;"><input type="text" name="phonenumber" value="600821732"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail: </label></td>
            <td style="text-align: right;"><input type="text" name="email" value="jtalerz@gmail.com"></td>
        </tr>
        <tr>
            <td><label for="licence">Nr licencji: </label></td>
            <td style="text-align: right;"><input type="text" name="licence" value="0003621"></td>
        </tr>
        <tr>
            <td colspan=2><button class="b_check_price" onclick="$('.right').load('account.php');">Zapisz dane</button></td>
        </tr>
    </table>
</form>