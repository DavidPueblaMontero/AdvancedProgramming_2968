<?php
$id = $_POST['id'];
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users/$id";
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
    <h3 align="center">User with id: <?php echo $id?></h3>
    <table class="egt" border="1px" align="center">
        <tr>
            <td>ID User</td>
            <td>Name User</td>
            <td>ID Company</td>
        </tr>
        <tr>
            <td><?php echo ("<p>{$data['id_user']}</p>");?></td>
            <td><?php echo ("<p>{$data['name_user']}</p>");?></td>
            <td><?php echo ("<p>{$data['id_company']}</p>");?></td>
        </tr>
    </table>
</body>

</html>