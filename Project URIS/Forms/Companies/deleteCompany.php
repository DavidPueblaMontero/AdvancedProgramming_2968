<?php
       
        $id_company = $_POST['id_company'];
        $company_uri ="http://localhost:1024/verticalanalisys/data/companies/$id_company";
        
        $company_json = file_get_contents($company_uri);
        $company_array = json_decode($company_json, true);
       
        var_export($company_array["name_company"]);
        echo "<br> " ;
        var_export($company_array["description_company"]);
        echo "<br> " ;
        var_export($company_array["address_company"]);
        echo "<br> " ;
        var_export($company_array["phone_company"]);
        echo "<br> " ;
 ?>