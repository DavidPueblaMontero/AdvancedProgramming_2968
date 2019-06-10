<?php
//include 'conexion_sql_server.php';
  $mysqli = new mysqli('financialreport.ddns.net', 'root', '11023650', 'verticalanalisys');
  $id_financialData = $_POST['id_financialData'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Update Register - Formoid javascript form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

<?php
			
            //$id_company = $_POST['id_company'];
            $company_uri = "http://financialreport.ddns.net:1024/verticalanalisys/data/companiesfinancialdata/$id_financialData";         
            $company_json = file_get_contents($company_uri);
			$company_array = json_decode($company_json, true);
			
			$year=$company_array["year"];
			$sales=$company_array["sales"];
			$salesCost=$company_array["salesCost"];
			$grossProfit=$company_array["grossProfit"];
			$expensesAdmiSales=$company_array["expensesAdmiSales"];
			$depreciations=$company_array["depreciations"];
			$interestPaid=$company_array["interestPaid"];
			$profitBeforeTaxes=$company_array["profitBeforeTaxes"];
			$taxes=$company_array["taxes"];
			$exerciseUtility=$company_array["exerciseUtility"];
    
         ?>

<!-- Start Formoid form-->
<link rel="stylesheet" href="registerfinancial_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="registerfinancial_files/formoid1/jquery.min.js"></script>
<form action="updateUri.php?id_financialData=<?php echo $id_financialData?>" class="formoid-solid-green" style="background-color:#cbffc2;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Register Data financial </h2></div>
	<div class="element-number" title="Id"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="id_finanacialData" value="<?php echo $id_financialData;?>" placeholder="Id" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select" title="Select Company"><label class="title">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">
	<option value="-1">Select Company</option>
	<?php
          $query = $mysqli -> query ("SELECT * FROM company");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_company].'">'.$valores[name_company].'</option>';            
          }
          
                    
        ?> 
		
	</select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-number" title="Year"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="1500" max="2019" name="year" value="<?php echo $year;?>" placeholder="Year" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="sales" value="<?php echo $sales;?>" placeholder="Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Sales Cost"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="salesCost" value="<?php echo $salesCost;?>" placeholder="Sales Cost" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Gross Profit"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="grossProfit" value="<?php echo $grossProfit;?>"  placeholder="Gross Profit" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Expenses Admi Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="expensesAdmiSales" value="<?php echo $expensesAdmiSales;?>" placeholder="Expenses Admi Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Depreciations"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="depreciations" value="<?php echo $depreciations;?>" placeholder="Depreciations" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Interest Paid"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="interestPaid" value="<?php echo $interestPaid;?>"  placeholder="Interest Paid" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Profit Before Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="profitBeforeTaxes" value="<?php echo $profitBeforeTaxes;?>" placeholder="Profit Before Taxes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="taxes"   value="<?php echo $taxes;?>"  placeholder="Taxes"value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Exercise Utility"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="exerciseUtility" value="<?php echo $exerciseUtility;?>" placeholder="Exercise Utility" value=""/><span class="icon-place"></span></div></div>
	
	<div class="submit"><input type="submit" value="Update"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript forms</a> Formoid.com 2.9</p><script type="text/javascript" src="registerfinancial_files/formoid1/formoid-solid-green.js"></script>




</body>
</html>
