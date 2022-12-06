<?php
$hostName = 'localhost';
$database = 'carbondatabase';
$user = 'root';
$password = '';

$mysql =  new mysqli($hostName, $user, $password, $database);
if($mysql->connect_errno){
    echo("Falha ao connectar (" . $mysql->connect_errno . ")" . $mysql->connect_error);
}
?>