<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users";
$data = json_decode(file_get_contents($uri), true);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <h3 align="center">All Users</h3>
    <table class="egt" border="1px" align="center">
        <tr>
            <td>ID User</td>
            <td>Name User</td>
            <td>ID Company</td>
        </tr>
            <?php 
            foreach ($data as $d){
            echo ("<tr><td><p>{$d['id_user']}</p></td>");
            echo ("<td><p>{$d['name_user']}</p></td>");
            echo ("<td><p>{$d['id_company']}</p></td></tr>");
            }
            ?>
    </table>
</body>

</html>