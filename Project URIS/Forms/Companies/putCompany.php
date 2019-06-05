<?php
    $companyId=$_POST['id_company'];
    $url= "http://financialreport.ddns.net/verticalanalisys/data/companies/$companyId";
    $companyName = $_POST['name_company'];
    $companyDescription = $_POST['description_company'];
    $companyAddress = $_POST['address_company'];
    $companyPhone = $_POST['phone_company'];

    $data = array( 'id_company' => $companyId, 'name_company' => $companyName, 'description_company' => $companyDescription, 'address_company' => $companyAddress, 'phone_company' => $companyPhone);
    $cli=curl_init($url);
    curl_setopt($cli,CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt ($cli, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt ($cli, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($cli,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($cli);
    if($response)
        echo "UPDATE COMPANY";
    else
        echo "Error";
    curl_close($cli);




    echo "<BR><BR>";
    echo "<center><a href='MenuCompany.html'>Volver a la carga de datos</a></center>"
?>