<?php 
$rutaServer = $_SERVER['DOCUMENT_ROOT'];
include $rutaServer.'/check.php'; ?>

<html>
    <body>
    <form method="post" action="putCompany.php">
        <?php
       
            $id_company = $_POST['id_company'];
            $company_uri ="http://financialreport.ddns.net:1024/verticalanalisys/data/companies/$id_company";            
            $company_json = file_get_contents($company_uri);
            $company_array = json_decode($company_json, true);
        
            $name_company=$company_array["name_company"];            
            $description_company=$company_array["description_company"];            
            $address_company=$company_array["address_company"];            
            $phone_company=$company_array["phone_company"];     

        
         ?>
        Id_Company:  <input type="text" name="id_company" value="<?php echo $id_company ?>" readonly="readonly"><br> 
        Company Name: <input type="text" name="name_company" value="<?php echo $name_company ?>"><br>
        Company Description: <input type="text" name="description_company" value="<?php echo $description_company ?>"><br>
        Company Address: <input type="text" name="address_company" value="<?php echo $address_company ?>"><br>
        Company Phone: <input type="text" name="phone_company" value="<?php echo $phone_company ?>"><br>
        <input type="submit" value="Submit">
</form>    

</body>

</html>