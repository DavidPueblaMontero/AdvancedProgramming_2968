<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php
  $mysqli = new mysqli('localhost', 'root', '11023650', 'verticalanalisys');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Register User - Formoid javascript form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="registeruser_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="registeruser_files/formoid1/jquery.min.js"></script>
<form action="reguser.php" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Register User</h2></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="id" placeholder="Id User"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="name" placeholder="Name User"/><span class="icon-place"></span></div></div>
	<div class="element-password"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="password" value="" placeholder="Password"/><span class="icon-place"></span></div></div>
	<div class="element-select"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >
	<option value="-1">Select Company</option>
	<?php
          $query = $mysqli -> query ("SELECT * FROM company");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_company].'">'.$valores[name_company].'</option>';            
          }
          
                    
        ?> 
		
	</select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Register"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">javascript form</a> Formoid.com 2.9</p><script type="text/javascript" src="registeruser_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
