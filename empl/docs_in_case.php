<div id="popup" style="position: fixed; display: none; z-index: 1; padding-top: 200px; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);">
    <div id="popup-content" style="position: relative; width: fit-content; margin: auto; padding: 20px; background-color: white; border: 1px solid black; border-radius: 25px;"></div>
</div>
<table style="width:50vw; min-width:400px;">
    <tr style="border-bottom: 1px solid #777;">
        <th style="width:30%">Numer dokumentu</th>
        <th>Typ</th>
        <th>Data dodatnia</th>
        <th></th>
        <th></th>
    </tr>
    <?php
        require_once "../connect.php";
        session_start();

        $connect = @new mysqli($host, $db_user, $db_password, $db_name);

        $connect->set_charset('utf8');

        if ($connect->connect_errno!=0) {
            echo "Error: ".$connect->connect_errno;
        }
        else { 
            $caseID = $_POST['caseID'];
            $_SESSION['caseID'] = $caseID;
            $docs = $connect->query("SELECT * FROM document INNER JOIN used_docs ON document.ID = ID_doc WHERE ID_case = '$caseID'");
            $rows = $docs->num_rows;

            for($i=0; $i<$rows; $i++){
                $row = $docs->fetch_assoc();
                $docnumber = $row['docnumber'];
                $type = $row['name'];
                $date = $row['add_date'];

echo<<<EOT
    <tr>
        <td>{$docnumber}</td>
        <td>{$type}</td>
        <td>{$date}</td>
        <td id="edit_doc"><i class="far fa-edit" style="color:#3060f0"></i></td>
        <td id="delete_doc"><i class="fas fa-trash" style="color:#f0304a"></i></td>
    </tr>
EOT;
            }

        }
    ?>
    <tr>
        <td style="float:left"><a href="cases.php"><button class="b_check_price">Powrót</button></a></td>
        <td colspan=4>
        <button id="add_doc" class="b_check_price">Dodaj plik</button></td> <!-- tu by się przydał jakiś pop up, na dodawanie pliku-->
    </tr>
</table>

<script>
    $("#add_doc").click(function(){
        $('#popup-content').load('add_file_popup.php', function(){
            $('#popup').css("display", "block");
        });
    });

    $(window).click(function(event) {
        if (event.target == $("#popup").get(0)) {
            $("#popup").css("display", "none");
        }
    });

    $("#edit_doc").click(function(){
        var docno = $(this).siblings().eq(0).get(0).textContent;
        $('#popup-content').load('add_file_popup.php', { docnumber: docno }, function(){
            $('#popup').css("display", "block");
        });
    });

    $("#delete_doc").click(function(){
        var docno = $(this).siblings().eq(0).get(0).textContent;
        $.post('del_doc.php',{
            docnumber: docno,
        }, function(){
            location.reload();
        });
    });
</script>