<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='osis';


$connect =new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($connect-> connect_error){
    die('Error Koneksi : ' . $connect->connect_error);
}






?>
