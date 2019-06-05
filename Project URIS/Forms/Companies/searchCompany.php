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
<body body class="blurBg-false" style="background-color:#EBEBEB">
  <div align="center">                        
    <p>SEARCH COMPANY:</p>
    <p>Companies:
      <select>
        <option value="0">NameCompany:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM company");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.$valores[name_company].'</option>';
          }
        ?>
      </select>
      <button>Submit</button>
    </p>
  </div>
</body>
 
</html>