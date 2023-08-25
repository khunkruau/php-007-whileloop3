<html>
    <head>
        <title>การใช้ loop ควบคุม html</title>
    </head>
    <body>
        <?php
            $refname = $_POST['fname'];
            $relname = $_POST['lname'];
            $recicle = $_POST['cicle'];
        ?>
        <center>
        <table width='50%' border='1' cellspacing='0'>
            <tr align='center'><td width='5%'><b>ลำดับที่</b></td><td width='25%'><b>ชื่อ</b></td><td width='25%'><b>นามสกุล</b></td></tr>
        <?php
                $i = 1;
                while ($i<=$recicle) {
                    echo("<tr><td align='center'>$i</td><td>$refname</td><td>$relname</td><tr>");
                    $i++;
                }
        ?>
        </table>
        </center>
    </body>
</html>