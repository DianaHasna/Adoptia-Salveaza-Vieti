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

$id_semnalare = $_GET['id_semnalare'];

$check_semnalari = $conn->prepare("select * from semnalari where id_semnalare=?");
$check_semnalari->execute(array($id_semnalare));

$infoSemnalari = $check_semnalari->fetch();

echo "<center><h2>" . $infoSemnalari['tip_semnalare'] . "</h2></center><br><br>";
echo "<p>Descriere: </p><br>";
echo "<p>" . $infoSemnalari['descriere'] . "</p>";

echo "<p>Locatie: " . $infoSemnalari['locatie'] . "</p>";
echo "<p>Tipul animalului: " . $infoSemnalari['tip_animal'] . "</p>";


include("../include/footer.php");