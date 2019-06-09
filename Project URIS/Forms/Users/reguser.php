<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/users";
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['password'];
$select=$_POST['select'];

    $data =array('id_user' => $id, 'name_user' => $name, 'pass_user'=>$pass, 'id_company' => $select);    

    $cli=curl_init($uri);
    curl_setopt($cli, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($cli, CURLOPT_POST,true);
    curl_setopt($cli, CURLOPT_POSTFIELDS,json_encode($data));
    curl_setopt($cli, CURLOPT_RETURNTRANSFER, true);
    $respone = curl_exec($cli);
    curl_close($cli);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requister User</title>
</head>
<body>
    <?php echo"<script type=\"text/javascript\">alert('Register Successful!'); window.location='http://$rutaServer';</script>";?>
</body>
</html>