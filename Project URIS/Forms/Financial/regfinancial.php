<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php

$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companiesfinancialdata";
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

$data =array('id_finanacialData' => $id_finanacialData, 'id_company' => $select , 'year'=> $year, 'sales' => $sales, 
'salesCost' => $salesCost, 'grossProfit' => $grossProfit, 'expensesAdmiSales' => $expensesAdmiSales, 
'depreciations' => $depreciations, 'interestPaid' => $interestPaid, 'profitBeforeTaxes' => $profitBeforeTaxes, 'taxes' => $taxes,
'exerciseUtility' => $exerciseUtility);    

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
    <title>Register Financial Data</title>
</head>
<body>
    Enviado con exito!!
</body>
</html>