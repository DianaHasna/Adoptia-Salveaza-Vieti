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

$id_animal = $_GET['id_animal'];

$check_animal = $conn->prepare("select * from animale where id_animal=?");
$check_animal->execute(array($id_animal));

$infoAnimal = $check_animal->fetch();

echo "<center><h2>" . $infoAnimal['nume'] .  "</h2></center><br><br>";
echo "<p>Descriere: </p><br><br>";
echo "<p>" . $infoAnimal['descriere'] . "</p>";

if($infoAnimal['imagine_ref'] !== "../incarcari/no_image.jpg"){
    echo "<img src='" . $infoAnimal['imagine_ref'] . "'>";
}

echo "<p>Rasa: " . $infoAnimal['rasa'] . "</p>";
echo "<p>Gen: " . $infoAnimal['gen'] . "</p>";
echo "<p>Varsta: " . $infoAnimal['varsta'] . " ani</p>";
echo "<p>Mediu de viata: " . $infoAnimal['mediu_viata'] . "</p>";
echo "<p>Acomodabil cu alte animale: " . $infoAnimal['acomodabil'] . "</p>";

$check_fisa = $conn->prepare("select * from fisa_medicala where id_animal=?");
$check_fisa->execute(array($id_animal));

$rows = $check_fisa->rowCount();

if(isset($_SESSION['id_administrator'])){

    if($rows == 0) {
        echo "<form action='' method='post'>";
        echo "<button class='submit' type='submit' name='submit'>Creeaza fisa</button>";
        echo "</form>";
    }
}
if($rows == 1) {
    echo "<a href='vizualizareFisa.php?id_animal=" . $id_animal . "'>Vezi fisa medicala a animalului</a>";
}
if(isset($_SESSION['id_utilizator'])){
    echo "<br><a href='adoptaAnimal.php?id_animal=" . $id_animal . "'>Adopta animalul curent</a>";
}


include("../include/footer.php");



if(isset($_POST['submit'])){
    $id_max = $conn->prepare("select * from fisa_medicala");


    $id_max->execute();

    $maxim_id = -1;


    while ($result2 = $id_max->fetch()) {
        if ((int)$result2["id_fisa"] > $maxim_id) {
            $maxim_id = (int)$result2["id_fisa"];
        }
    }

    if ($maxim_id == -1) {

        $fisa_id = "1";

    } else {
        $fisa_id = $maxim_id + 1;
        $fisa_id = (string)$fisa_id;

    }

    $insert_fisa = $conn->prepare("insert into fisa_medicala values(?,?)");
    $res = $insert_fisa->execute(array($fisa_id,$id_animal));
    if($res){
        echo "<script>alert('Fisa medicala a fost creata')</script>";
        echo "<script>window.open('vizualizareAnimal.php?id_animal=" . $id_animal . "','_self')</script>";
    }
    else{
        echo "<script>alert('Fisa medicala nu s-a putut crea, va rugam sa reveniti mai tarziu!')</script>";
    }

}

