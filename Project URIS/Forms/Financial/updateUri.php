<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php

$id_financialData = $_GET['id_financialData'];
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companiesfinancialdata/$id_financialData";
$id_finanacialData=$_POST['id_finanacialData'];
$select=$_POST['select'];
$year=$_POST['year'];
$sales=$_POST['sales'];
$salesCost=$_POST['salesCost'];
$grossProfit=$_POST['grossProfit'];
$expensesAdmiSales=$_POST['expensesAdmiSales'];
$depreciations=$_POST['depreciations'];
$interestPaid=$_POST['interestPaid'];
$profitBeforeTaxes=$_POST['profitBeforeTaxes'];
$taxes=$_POST['taxes'];
$exerciseUtility=$_POST['exerciseUtility'];

$data =array('id_finanacialData' => $id_finanacialData, 'id_company' => $select, 'year'=> $year, 'sales' => $sales, 
'salesCost' => $salesCost, 'grossProfit' => $grossProfit, 'expensesAdmiSales' => $expensesAdmiSales, 
'depreciations' => $depreciations, 'interestPaid' => $interestPaid, 'profitBeforeTaxes' => $profitBeforeTaxes, 'taxes' => $taxes,
'exerciseUtility' => $exerciseUtility);  
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
    <title>Register Financial</title>
</head>

<body>
    Updated Successfull!!
</body>

</html>