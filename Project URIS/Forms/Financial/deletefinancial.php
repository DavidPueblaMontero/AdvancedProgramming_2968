<?php 
$id_finanacialData = $_POST['id_finanacialData'];
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companiesfinancialdata/$id_finanacialData";

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_URL, $uri);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Financial Data </title>
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

Delete Successfull!!

</body>
</html>

