<?php

session_start();


if(!isset($_SESSION['id_administrator'])) {
    if(!isset($_SESSION['id_utilizator']))
        header("location: ../index.php");
    include("../include/inHeaderUser.php");
    $session_id = $_SESSION["id_utilizator"];
    $author = "user";
}
else{
    include("../include/inHeaderAdmin.php");
    $session_id = $_SESSION["id_administrator"];
    $author = "admin";
}

echo "<link rel='stylesheet' type='text/css' href='../css/admin.css'>";

global $conn;

$id_anunt = $_GET['id_anunt'];

$check_anunturi = $conn->prepare("select * from anunturi where id_anunt=?");
$check_anunturi->execute(array($id_anunt));

$infoAnunt = $check_anunturi->fetch();

echo "<center><h2>" . $infoAnunt['titlu'] .  "</h2></center><br><br>";
echo "<p>Descriere: </p><br><br>";
echo "<p>" . $infoAnunt['descriere'] . "</p>";

if($infoAnunt['imagine_ref'] !== "../incarcari/no_image.jpg"){
    echo "<img src='" . $infoAnunt['imagine_ref'] . "'>";
}

echo "<p>Locatie: " . $infoAnunt['locatie'] . "</p>";


include("../include/footer.php");