<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'Charity';
$link = mysqli_connect("$hostname", "$username", "$password", "$db");
if(mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
