<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<?php
  $mysqli = new mysqli('financialreport.ddns.net', 'root', '11023650', 'verticalanalisys');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Company</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset=utf-8" />
</head>

<body body class="blurBg-false" style="background-color:#EBEBEB" >
<form method="post" action="dataPutCompany.php">
  <div align="center">                        
    <p>SEARCH COMPANY:</p>
    <p>Companies:
      <select name="id_company">
        <option value="0">NameCompany:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM company");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_company].'">'.$valores[name_company].'</option>';            
          }
          
                    
        ?>        
      </select>      
    </p>
  </div>
  <input type="submit" value="Submit">
  </form> 
</body>
 
</html>