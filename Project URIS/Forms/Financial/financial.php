<?php

$id_finanacialData=$_POST['id_finanacialData'];
$uri ="http://financialreport.ddns.net/verticalanalisys/data/companiesfinancialdata/$id_finanacialData";
$financial_json = file_get_contents($uri);
$financial_array = json_decode($financial_json, true);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Financial</title>
</head>

<body>
    <h3 align="center">Financial with id: <?php echo $id?></h3>
    <table class="egt" border="1px" align="center">
        <tr>
            <td>id_finanacialData</td>
            <td>id_company</td>  
            <td>year</td>  
            <td>sales</td>  
            <td>salesCost</td>  
            <td>grossProfit</td>  
            <td>expensesAdmiSales</td>  
            <td>depreciations</td>  
            <td>interestPaid</td>  
            <td>profitBeforeTaxes</td>  
            <td>taxes</td>  
            <td>exerciseUtility</td>  
            
        </tr>
        <tr>
         <td ><?php echo ("<p>{$financial_array ['id_finanacialData']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['id_company']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['year']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['sales']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['salesCost']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['grossProfit']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['expensesAdmiSales']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['depreciations']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['interestPaid']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['profitBeforeTaxes']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['taxes']}</p>");?></td>
          <td ><?php echo ("<p>{$financial_array ['quexerciseUtilityantity']}</p>");?></td>
            
        </tr>
    </table>
</body>

</html>