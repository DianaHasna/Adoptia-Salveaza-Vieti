<!DOCTYPE html>
<?php
session_start();
global $conn;
if(!isset($_SESSION['id_administrator'])){
    header("location: ../index.php");
}
include("../include/inHeaderAdmin.php");


echo "<link rel='stylesheet' type='text/css' href='../css/admin.css'>";

$id_animal = $_GET['id_animal'];
$id_fisa = $_GET['id_fisa'];

?>

<!--

adauga boala pentru animal

sterge boala pentru animal

-->

<?php


echo "<a href='mapareFB.php?id_fisa=" . $id_fisa . "'><input type='button' value='Adauga boala'></a>";

echo "<a href='stergeMapareFB.php?id_fisa=" . $id_fisa . "'><input type='button' value='Sterge boala'></a>";

include("../include/footer.php");