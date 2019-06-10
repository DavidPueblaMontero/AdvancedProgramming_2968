<?php
       
        $id_company = $_POST['id_company'];
        $uri ="http://financialreport.ddns.net:1024/verticalanalisys/data/companies/$id_company";
        
        $ch = curl_init($uri);
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        if($response)
            echo "DELETE COMPANY";
        else
            echo "Error";
    
        curl_close($ch);

        echo "<BR><BR>";
        echo "<center><a href='MenuCompany.php'>RETURN MENU</a></center>"

 ?>