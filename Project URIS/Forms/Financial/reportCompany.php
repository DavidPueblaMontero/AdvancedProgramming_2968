<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

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
    $salesCost= intval($data['salesCost']);
    $grossProfit= intval($data['grossProfit']);
    $expensesAdmiSales=intval($data['expensesAdmiSales']);
    $depreciations=intval($data['depreciations']);
    $interestPaid=intval($data['interestPaid']);
    $profitBeforeTaxes=intval($data['profitBeforeTaxes']);
    $taxes=intval($data['taxes']);
    $exerciseUtility=intval($data['exerciseUtility']);
    if($salesCost== 0){
        echo "<script type=\"text/javascript\">alert('Incorrect ID!'); window.location='http://$rutaServer';</script>";
    }

    echo "ANALISIS<br><br>";
    echo "SALES COST.<br>";
    echo "For every dollar that the company invoiced in {$year} approximately {$salesCost} cents destined to the purchase of merchandise.<br><br>";
    echo "GROSS PROFIT.<br>";
    echo "For every dollar that the company invoiced in {$year} approximately {$grossProfit} cents obtained the sale of utility.<br><br>";
    echo "EXPENSES ADMINISTRATIVE SALES.<br>";
    echo "For every dollar that the company invoiced in {$year} it spent approximately {$expensesAdmiSales} cents on administrative and sales expenses.<br> 
    Based on this:<br>
    In a commercial enterprise it must fluctuate between 15% to 20%.<br>
    In manufacturing, it must fluctuate between 8% to 12%.<br> 
    In a service company, it must fluctuate between 10% to 14%.<br><br>";
    echo "DEPRECIATIONS.<br>";
    echo "For every dollar that the company invoiced in {$year} approximately {$depreciations} cents destined to the purchase of fixed assets.<br><br>";
    echo "INTEREST PAID.<br>";
    echo "For every dollar that the company invoiced in {$year} approximately {$interestPaid} cents destined to the payment of interest owed.<br><br>";
    echo "PROFIT BEFORES TAXES.<br>";
    echo "For every dollar that the company invoiced in {$year} obtained approximately {$profitBeforeTaxes} cents of profit before taxes.<br><br>";
    echo "TAXES.<br>";
    echo "For every dollar that the company invoiced in {$year} approximately {$taxes} cents destined o the payment of taxes.<br><br>";
    echo "EXERCISE UTILITY.<br>";
    echo "For every dollar that the company invoiced in {$year} it obtained approximately {$exerciseUtility} cents of profit available to shareholders.<br><br>";
    echo "<BR><BR>";
    echo "<center><a href='menufinancial.php'>RETURN MENU</a></center>";
?>

</html>