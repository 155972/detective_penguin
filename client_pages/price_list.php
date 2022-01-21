<style>
    #price_list{
        background-image: linear-gradient(144deg, rgba(244, 180, 255, 0.6), rgba(146, 136, 215, 0.6));
        border-radius: 100px;
    }
    tr{
        border-bottom: 1px solid #000;
    }
    a{
        color: blue;
    }
</style>

<div class="container">
    <table>
        <tr id="consult">
            <td style="width: 85%;">Konsultacja detektywistyczna</br>
            <a onclick="contentChange('client_pages/services.php')">Dowiedz się więcej</a>
            </td>
            <td style="width: 15%;">bezpłatnie</td>
        </tr>
        <tr id="wiariograf">
            <td style="width: 85%;">Badanie wariografem (wykrywacz kłamstw)</br>
            <a onclick="contentChange('client_pages/services.php')">Dowiedz się więcej</a>
            </td>
            <td style="width: 15%;">od 1500 zł</td>
        </tr>
        <tr id="observation">
            <td style="width: 85%;">Obserwacja osoby</br>
            <a onclick="contentChange('client_pages/services.php')">Dowiedz się więcej</a>
            </td>
            <td style="width: 15%;">od 800 zł</td>
        </tr>
        <tr id="pesel">
            <td style="width: 85%;">Ustalenie numeru PESEL</br>
            <a onclick="contentChange('client_pages/services.php')">Dowiedz się więcej</a>
            </td>
            <td style="width: 15%;">od 750 zł</td>
        </tr>
        <tr id="lost_people">
            <td style="width: 85%;">Poszukiwanie osób zaginionych</br>
            <a onclick="contentChange('client_pages/services.php');">Dowiedz się więcej</a>
            </td>
            <td style="width: 15%;">indywidualna wycena</td> <!-- cost=NULL w bazie-->
        </tr>
    </table>
</div>