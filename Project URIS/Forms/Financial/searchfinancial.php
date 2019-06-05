<?php
  
        
  if(isset($_GET['id_finanacialData']))
  {      
  $id_finanacialData = $_GET['id_finanacialData'];
  $uri ="http://financialreport.ddns.net/verticalanalisys/data/companiesfinancialdata/$id_finanacialData";
  $financial_json = file_get_contents($uri);
  $financial_array = json_decode($financial_json, true);
 
        #echo "Se ha ingresado un id " . $id_company;
		$id_finanacialData=($financial_array["id_finanacialData"]);
		$id_company=($financial_array["id_company"]);
		$year=($financial_array["year"]);
		$sales=($financial_array["sales"]);
		$salesCost=($financial_array["salesCost"]);
		$grossProfit=($financial_array["grossProfit"]);
		$expensesAdmiSales=($financial_array["expensesAdmiSales"]);
		$depreciations=($financial_array["depreciations"]);
		$interestPaid=($financial_array["interestPaid"]);
		$profitBeforeTaxes=($financial_array["profitBeforeTaxes"]);
		$taxes=($financial_array["taxes"]);
		$exerciseUtility=($financial_array["exerciseUtility"]);
    echo "<br> " ;  
    echo "<br> " ;  
    echo "<br> " ; 
      echo '<table align="left" border="6px" width="500px"height="100px">';
        echo'<tr>';
            echo '<td>id_finanacialData</td>';
            echo '<td>id_company</td>';
            echo '<td>year</td>';
            echo '<td>sales</td>';
			echo '<td>salesCost</td>';
            echo '<td>grossProfit</td>';
			echo '<td>expensesAdmiSales</td>';
			echo '<td>depreciations</td>';
            echo '<td>interestPaid</td>';
            echo '<td>profitBeforeTaxes</td>';
			echo '<td>taxes</td>';
            echo '<td>exerciseUtility</td>';

		
        echo '</tr>';
        echo "<br> " ;
        echo'<tr>';
		
            echo ' <td bgcolor="skyblue">'.$id_finanacialData.'</td>';
            echo '<td bgcolor="skyblue">'.$id_company.'</td>';
            echo '<td bgcolor="skyblue">'.$year.'</td>';
			echo '<td bgcolor="skyblue">'.$sales.'</td>';
			echo ' <td bgcolor="skyblue">'.$salesCost.'</td>';
            echo '<td bgcolor="skyblue">'.$grossProfit.'</td>';
            echo '<td bgcolor="skyblue">'.$expensesAdmiSales.'</td>';
			echo '<td bgcolor="skyblue">'.$depreciations.'</td>';
			echo ' <td bgcolor="skyblue">'.$interestPaid.'</td>';
            echo '<td bgcolor="skyblue">'.$profitBeforeTaxes.'</td>';
            echo '<td bgcolor="skyblue">'.$taxes.'</td>';
			echo '<td bgcolor="skyblue">'.$quexerciseUtilityantity.'</td>';
			
        echo '</tr>';
		echo '</table>';
        echo "<br> " ;
        echo "<br> " ;
        echo "<br> " ;
  }   
    
     
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Search Financial Data - Formoid bootstrap forms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

{{Formoid}}

</body>
</html>
