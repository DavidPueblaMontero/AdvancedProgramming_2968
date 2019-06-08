<?php
$id = $_GET['id'];
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users/$id";
$name = $_POST['name'];
$pass = $_POST['password'];
$select = $_POST['select'];


$data = array('name_user' => $name, 'pass_user' => $pass, 'id_company' => $select);
$data_json = json_encode($data);

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requister User</title>
</head>

<body>
    Updated Successfull!!
</body>

</html>