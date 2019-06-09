<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '11023650', 'verticalanalisys');

if($mysqli->connect_error){
    die("Conection Error!". $mysqli->connect_error);
}
$id_user = $_POST['id_user'];
$pass = $_POST['pass'];

$sql = "SELECT * from user where id_user='$id_user'";

$result = $mysqli->query($sql);

if($result->num_rows > 0){

}
$row = $result->fetch_array(MYSQLI_ASSOC);

if ($pass==$row['pass_user']){
    $_SESSION['loggedin'] = true;
    $_SESSION['id_user'] = $id_user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5*60);

    header('Location: global.php');
} else {
    echo"<script type=\"text/javascript\">alert('Incorrect Username or Password!, you will be redirected to index page'); window.location='index.php';</script>";  
}
