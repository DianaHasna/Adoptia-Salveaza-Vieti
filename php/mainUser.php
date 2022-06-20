<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['id_utilizator'])){
    header("location: ../index.php");
}

include("../include/inHeaderUser.php");



?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<body style="background-color:#ccd9ff">
<div class="content">


    <div class="gallery2">
        <a href="editProfile.php">
            <img src="../imagini/look.jpg" class="left" alt="Editeaza profilul"  >
        </a>
        <div class="desc">Editeaza profilul</div>
    </div>


    <div class="gallery2">
        <a href="addAnunt.php">
            <img src="../imagini/adoption.jpg" class="center" alt="Adauga anunt" >
        </a>
        <div class="desc">Adauga anunt </div>

    </div>


    <div class="gallery2">
        <a href="vizualizareAnunturiProprii.php">
            <img src="../imagini/abuz.png" class="left" alt="Sterge anunt" >
        </a>
        <div class="desc">Sterge anunt</div>
    </div>

    <div class="gallery2">
        <a href="vizualizareAnunturi.php">
            <img src="../imagini/adaugaTest2.png" alt="VizualizareAnunturi" width="600" height="400">
        </a>
        <div class="desc">Vizualizare anunturi </div>

    </div>





    <div class="gallery2">
        <a href="adaugaSemnalare.php">
            <img src="../imagini/adaugaSemnalare.png" alt="AdaugareSemnalare" width="600" height="400">
        </a>
        <div class="desc">Adaugare semnalare </div>

    </div>

    <div class="gallery2">
        <a href="vizualizareSemnalari.php">
            <img src="../imagini/adaugaTest2.png" alt="VizualizareSemnalari" width="600" height="400">
        </a>
        <div class="desc">Vizualizare semnalari </div>

    </div>

    <div class="gallery2">
        <a href="vizualizareSemnalariProprii.php">
            <img src="../imagini/abuz.png" class="left" alt="Sterge semnalare" >
        </a>
        <div class="desc">Sterge semnalare</div>
    </div>
    
    <div class="gallery2">
        <a href="formDetAnimal.php">
            <img src="../imagini/adaugaTest2.png" alt="VizualizareAnimale" width="600" height="400">
        </a>
        <div class="desc">Vizualizare animale </div>

    </div>



</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include("../include/footer.php");
?>
