<?php 


$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'mistrz';

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);


if (!$conn) {
    die('Coś jest nie tak');
}