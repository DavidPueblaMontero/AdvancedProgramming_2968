<?php

$id_company = $_POST['id_company'];
$year = $_POST['year_company'];
$uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companiesfinancialreport/$id_company/$year";
$data = json_decode(file_get_contents($uri), true);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Financial</title>
</head>

<body>
    <h3 align="center">Report Company with id: <?php echo $id_company?></h3>
    <table class="egt" border="1px" align="center">
        <tr>
             
            <td>Sales</td>  
            <td>Sales Cost</td>  
            <td>Gross Profit</td>  
            <td>Expenses Administrative Sales</td>  
            <td>Depreciations</td>  
            <td>Interest Paid</td>  
            <td>Profit Before Taxes</td>  
            <td>Taxes</td>  
            <td>Exercise Utility</td>  
        </tr>
            <?php 
            
                
                echo ("<td><p>{$data['sales']}</p></td>");
                echo ("<td><p>{$data['salesCost']}</p></td>");
                echo ("<td><p>{$data['grossProfit']}</p></td>");
                echo ("<td><p>{$data['expensesAdmiSales']}</p></td>");
                echo ("<td><p>{$data['depreciations']}</p></td>");
                echo ("<td><p>{$data['interestPaid']}</p></td>");
                echo ("<td><p>{$data['profitBeforeTaxes']}</p></td>");
                echo ("<td><p>{$data['taxes']}</p></td>");
                echo ("<td><p>{$data['exerciseUtility']}</p></td></tr>");
        
            
            ?>
    </table>
</body>
<?php
    echo "<BR><BR>";
    echo "<center><a href='MenuCompany.html'>RETURN MENU</a></center>"
?>

</html>