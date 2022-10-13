<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1>
        <tr>
            <td width="30">&nbsp;</td>
            <?PHP
            for ($cols = 1; $cols <= 9; $cols++)
                print "<td width='30' align='center'>$cols</td>"
            ?>
        </tr>
        <?PHP
        for ($rows = 1; $rows <= 9; $rows++) {
            print "<tr>";
            print "<td width='30' align='center'>$rows</td>";
            for ($cols = 1; $cols <= 9; $cols++)
                print "<td width='30' align='center'>" . $cols * $rows . "</td>";
            print "</tr>";
        }
        ?>
</body>

</html>