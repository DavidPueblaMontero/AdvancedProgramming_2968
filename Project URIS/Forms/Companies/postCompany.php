<?php

    $url= "http://financialreport.ddns.net:1024/verticalanalisys/data/companies";
    $companyName = $_POST['input'];
    $companyDescription = $_POST['input1'];
    $companyAddress = $_POST['input2'];
    $companyPhone = $_POST['phone'];

    $data = array( 'name_company' => $companyName, 'description_company' => $companyDescription, 'address_company' => $companyAddress, 'phone_company' => $companyPhone);
    $cli=curl_init($url);
    curl_setopt($cli,CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt ($cli, CURLOPT_POST, true);
    curl_setopt ($cli, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($cli,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($cli);
    if($response)
        echo "COMPANY ADDED";
    else
        echo "Error";
    curl_close($cli);




    echo "<BR><BR>";
    echo "<center><a href='MenuCompany.php'>RETURN MENU</a></center>"
?>