<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Register Data financial  - Formoid javascript forms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">

<!-- Start Formoid form-->
<link rel="stylesheet" href="registerfinancial_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="registerfinancial_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#cbffc2;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Register Data financial </h2></div>
	<div class="element-number" title="Id"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number11" required="required" placeholder="Id" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select" title="Select Company"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">
	<?php $sql = "SELECT * FROM company" ; 
		$result = mysql_query ($sql);
  	while ($finacial= mysql_fetch_row($result)){
		   <option value=".$financial[0].">".$financial[1]."</option>"; }?>
	</select><i></i><span class="icon-place"></span></span></div></div></div>
		 /span></label><div class="item-cont"><input class="large" type="text" min="1500" max="2019" name="number1" required="required" placeholder="Year" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number2" required="required" placeholder="Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Sales Cost"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number3" required="required" placeholder="Sales Cost" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Gross Profit"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number4" required="required" placeholder="Gross Profit" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Expenses Admi Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number5" required="required" placeholder="Expenses Admi Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Depreciations"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number6" required="required" placeholder="Depreciations" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Interest Paid"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number7" required="required" placeholder="Interest Paid" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Profit Before Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number8" required="required" placeholder="Profit Before Taxes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number9" required="required" placeholder="Taxes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number" title="Exercise Utility"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number10" required="required" placeholder="Exercise Utility" value=""/><span class="icon-place"></span></div></div>
	
	
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap forms</a> Formoid.com 2.9</p><script type="text/javascript" src="registerfinancial_files/formoid1/formoid-solid-green.js"></script>
<!-- Stop Formoid form-->



{{Formoid}}

</body>
</html>