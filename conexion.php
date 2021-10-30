<?php
function conectar(){
    $host="ckshdphy86qnz0bj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user="nxigc6de0c0eeqdh";
    $pass="	lm3rubq7gzasfqk3";

    $bd="ihfuw8gt8ymcenf5";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
