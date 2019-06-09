<?php
       
        $id_company = $_POST['id_company'];
        $uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companies/$id_company";
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
    <h3 align="center">Company with id: <?php echo $id_company?></h3>
    <table class="egt" border="1px" align="center">
        <tr>
            <td>ID Company</td>
            <td>Name Company</td>
            <td>Description Company</td>
            <td>Address Company</td>
            <td>Phone Company</td>
        </tr>
        <tr>
            <td><?php echo ("<p>{$data['id_company']}</p>");?></td>
            <td><?php echo ("<p>{$data['name_company']}</p>");?></td>
            <td><?php echo ("<p>{$data['description_company']}</p>");?></td>
            <td><?php echo ("<p>{$data['address_company']}</p>");?></td>
            <td><?php echo ("<p>{$data['phone_company']}</p>");?></td>
        </tr>
    </table>
</body>
<?php
    echo "<BR><BR>";
    echo "<center><a href='MenuCompany.html'>RETURN MENU</a></center>"
?>
</html>

        

        
    

     


