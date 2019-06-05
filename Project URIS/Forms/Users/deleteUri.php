<?php
$id = $_POST['id'];
$uri = "http://financialreport.ddns.net/verticalanalisys/data/users/$id";


//$data = array('name_user' => $name, 'pass_user' => $pass, 'id_company' => $select);
//$data_json = json_encode($data);

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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