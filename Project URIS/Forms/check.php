<?php
$rutaServer = $_SERVER['HTTP_HOST'];
$index = 'http://'.$rutaServer.'/index.php';
session_start();
if(isset($_SESSION['id_user'])){
 
}else{
    echo"<script type=\"text/javascript\">alert('Not logged in!, you will be redirected to index page $index'); window.location='$index';</script>";  
}
?>