<?php
include 'conexion_sql_server.php';
$uri = "http://financialreport.ddns.net/verticalanalisys/data/companiesfinancialdata";
$financial_json = file_get_contents($uri);
$financial_array = json_decode($financial_json, true);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <h3 align="center">All Users</h3>
    <table class="egt" border="1px" align="center">
        <tr>
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
            <?php 
            foreach ($financial_array as $financial){
                echo ("<tr><td><p>{$financial['id_finanacialData']}</p></td>");
                echo ("<td><p>{$financial['id_company']}</p></td>");
                echo ("<td><p>{$financial['year']}</p></td>");
                echo ("<td><p>{$financial['sales']}</p></td>");
                echo ("<td><p>{$financial['salesCost']}</p></td>");
                echo ("<td><p>{$financial['grossProfit']}</p></td>");
                echo ("<td><p>{$financial['expensesAdmiSales']}</p></td>");
                echo ("<td><p>{$financial['depreciations']}</p></td>");
                echo ("<td><p>{$financial['interestPaid']}</p></td>");
                echo ("<td><p>{$financial['profitBeforeTaxes']}</p></td>");
                echo ("<td><p>{$financial['taxes']}</p></td>");
                echo ("<td><p>{$financial['quexerciseUtilityantity']}</p></td></tr>");
        
            }
            ?>
    </table>
</body>

</html>