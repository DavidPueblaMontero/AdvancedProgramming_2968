<?php
function conectar_bd(){
    //global $conn_sis;
    $serverName = "localhost";
    $username = "root";
    $pass = "11023650";
    $connectionInfo = array("Database"=>"verticalanalisys", "UID"=>"root", "PWD"=>"11023650", "CharacterSet"=>"UTF-8");
    $conn = mysqli_connect($serverName, $username, $pass);
    if($conn_sis){
        echo "Funciona";
    }else{
        echo "fallo";
        die( print_r(mysqli_errors(), true));
    }
}
    $serverName = "localhost";
    $username = "root";
    $pass = "11023650";
    $connectionInfo = array("Database"=>"verticalanalisys", "UID"=>"root", "PWD"=>"11023650", "CharacterSet"=>"UTF-8");
    $conn = mysqli_connect($serverName, $username, $pass);
    /*if($conn){
        echo "Funciona";
    }else{
        echo "fallo";
        die( print_r(sqlsrv_errors(), true));
    }*/
?>