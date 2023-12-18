<?php

$host="localhost";
$user="id21684677_alpaxca";
$password="A4tech-=macro=-";
$db="id21684677_database1";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>