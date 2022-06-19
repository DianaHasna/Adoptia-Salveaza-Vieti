<!DOCTYPE html>
<?php
session_start();
global $conn;
if(!isset($_SESSION['id_administrator'])){
    header("location: ../index.php");
}
include("../include/inHeaderAdmin.php");


echo "<link rel='stylesheet' type='text/css' href='../css/admin.css'>";

$id_fisa = $_GET['id_fisa'];


$boli = $conn->prepare("select * from boli");
$boli->execute();
echo "<form action='' method='post' enctype='multipart/form-data'>";
echo "<p>Bolile existente in baza de date sunt:";

while($boala = $boli->fetch()){
    echo "<br><input type='radio' name='id_boala' value='" . $boala['id_boala'] . "'/>" . $boala['nume_boala'] ;
}

echo "</p>";

echo "<input type='submit' value='Adauga boala la animalul curent' name='submit'/> </form>";


if(isset($_POST['submit'])){
    $id_boala = $_POST['id_boala'];


    $check_mapare = $conn->prepare("select * from mapare_fisa_boala where id_fisa=? and id_boala=?");
    $check_mapare->execute(array($id_fisa,$id_boala));
    $rows = $check_mapare->rowCount();

    if($rows != 0){
        die("<script>alert('Animalul curent are deja asociata boala selectata!')</script>");
    }


    $id_max = $conn->prepare("select * from mapare_fisa_boala");

    $id_max->execute();

    $maxim_id = -1;


    while ($result2 = $id_max->fetch()) {
        if ((int)$result2["id_mapare"] > $maxim_id) {
            $maxim_id = (int)$result2["id_mapare"];
        }
    }

    if ($maxim_id == -1) {

        $id_mapare = "1";

    } else {
        $id_mapare = $maxim_id + 1;
        $id_mapare = (string)$id_mapare;
    }

    $insert_mapare = $conn->prepare("insert into mapare_fisa_boala values(?,?,?)");
    $res = $insert_mapare->execute(array($id_mapare,$id_fisa,$id_boala));

    if(!$res){
        die("<script>alert('Ne pare rau, nu s-a putut realiza adaugarea bolii pentru animalul curent, va rugam sa reveniti mai tarziu!')</script>");
    }
    echo "<script>alert('Adaugarea bolii pentru animalul curent s-a realizat cu succes!')</script>";

}



?>
