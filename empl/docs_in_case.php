<div id="popup" style="position: fixed; display: none; padding: 20px; background-color: white; border: 1px solid black;"></div>
<table width="40%">
    <tr style="border-bottom: 1px solid #777;">
        <th style="width:30%">Numer dokumentu</th>
        <th>Typ</th>
        <th>Data dodatnia</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td>Z2509211</td>
        <td>Zdjęcie</td>
        <td>25-09-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td>D2509211</td>
        <td>Dokument</td>
        <td>25-09-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td>A2709211</td>
        <td>Audio</td>
        <td>25-09-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td>W2909211</td>
        <td>Wideo</td>
        <td>29-09-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td>D0210211</td>
        <td>Dokument</td>
        <td>25-09-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td>I0210211</td>
        <td>Inne</td>
        <td>02-10-2021</td>
        <td><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
    <tr>
        <td style="float:left"><a href="cases.php"><button class="b_check_price">Powrót</button></a></td>
        <td colspan=4>
        <button id="add_doc" class="b_check_price">Dodaj plik</button></td> <!-- tu by się przydał jakiś pop up, na dodawanie pliku-->
    </tr>
</table>

<script>
    $("#add_doc").click(function(){
        $('#popup').load('edit_empl.php');
        $('#popup').css("display", "block");
    });

    $("#popup").focusout(function(){
        $('#popup').css("display", "none");
    });
</script>