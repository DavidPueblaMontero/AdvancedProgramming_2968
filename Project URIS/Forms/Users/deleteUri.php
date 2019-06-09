<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php
$id = $_POST['id'];
$company_uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users/$id";
$company_json = file_get_contents($company_uri);
$company_array = json_decode($company_json, true);

if (!isset($company_array['id_user'])) {
  echo "<script type=\"text/javascript\">alert('Incorrect ID!'); window.location='http://$rutaServer';</script>";
}

?>


<?php

$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users/$id";

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
    <?php echo "<script type=\"text/javascript\">alert('Delete Successful'); window.location='http://$rutaServer';</script>";?>
</body>

</html>