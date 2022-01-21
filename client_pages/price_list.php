<style>
    #price_list{
        background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
        border-radius: 100px;
    }
    tr{
        border-bottom: 1px solid #000;
    }
</style>

<div class="container">
    <table>
        <tr id="consult">
            <td style="width: 70%;">Konsultacja detektywistyczna</br>
                <button class="b_check_price" onclick="contentChange('client_pages/services.php')" style="font-size: 16px; float:left;">Dowiedz się więcej</button>
            </td>
            <td style="width: 15%;">bezpłatnie</td>
            <td style="width: 15%;">
                <button class="b_check_price" onclick="contentChange('client_pages/contact.php')" style="font-size: 16px;">Wybierz usługę</button>
            </td>
        </tr>
        <tr id="wiariograf">
            <td style="width: 70%;">Badanie wariografem (wykrywacz kłamstw)</br>
                <button class="b_check_price" onclick="contentChange('client_pages/services.php')" style="font-size: 16px; float:left;">Dowiedz się więcej</button>
            </td>
            <td style="width: 15%;">od 1500 zł</td>
            <td style="width: 15%;">
                <button class="b_check_price" onclick="contentChange('client_pages/contact.php')" style="font-size: 16px;">Wybierz usługę</button>
            </td>
        </tr>
        <tr id="observation">
            <td style="width: 70%;">Obserwacja osoby</br>
            <button class="b_check_price" onclick="contentChange('client_pages/services.php')" style="font-size: 16px; float:left;">Dowiedz się więcej</button>
            </td>
            <td style="width: 15%;">od 800 zł</td>
            <td style="width: 15%;">
                <button class="b_check_price" onclick="contentChange('client_pages/contact.php')" style="font-size: 16px;">Wybierz usługę</button>
            </td>
        </tr>
        <tr id="pesel">
            <td style="width: 70%;">Ustalenie numeru PESEL</br>
            <button class="b_check_price" onclick="contentChange('client_pages/services.php')" style="font-size: 16px; float:left;">Dowiedz się więcej</button>
            </td>
            <td style="width: 15%;">od 750 zł</td>
            <td style="width: 15%;">
                <button class="b_check_price" onclick="contentChange('client_pages/contact.php')" style="font-size: 16px;">Wybierz usługę</button>
            </td>
        </tr>
        <tr id="lost_people">
            <td style="width: 70%;">Poszukiwanie osób zaginionych</br>
            <button class="b_check_price" onclick="contentChange('client_pages/services.php')" style="font-size: 16px; float:left;">Dowiedz się więcej</button>
            </td>
            <td style="width: 15%;">indywidualna wycena</td> <!-- cost=NULL w bazie-->
            <td style="width: 15%;">
                <button class="b_check_price" onclick="contentChange('client_pages/contact.php')" style="font-size: 16px;">Wybierz usługę</button>
            </td>
        </tr>
    </table>
</div>