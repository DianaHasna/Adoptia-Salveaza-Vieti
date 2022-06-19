<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['id_administrator'])){
    header("location: ../index.php");
}
include("../include/inHeaderAdmin.php");
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
        <a href="adaugaAnimal.php">
            <img src="../imagini/adaugaAnimal.png" alt="AdaugareAnimal" width="600" height="400">
        </a>
        <div class="desc">Adaugare animal </div>

    </div>

    <div class="gallery2">
        <a href="vizualizareSemnalari.php">
            <img src="../imagini/adaugaTest2.png" alt="VizualizareSemnalari" width="600" height="400">
        </a>
        <div class="desc">Vizualizare semnalari </div>

    </div>

    <div class="gallery2">
        <a href="vizualizareAnimale.php">
            <img src="../imagini/adaugaTest2.png" alt="VizualizareAnimale" width="600" height="400">
        </a>
        <div class="desc">Vizualizare animale </div>

    </div>


    <div class="gallery2">
        <a href="creeareBoala.php">
            <img src="../imagini/adaugaTest2.png" alt="Creeare Boala" width="600" height="400">
        </a>
        <div class="desc">Creeare boala</div>

    </div>


    <div class="gallery2">
        <a href="creeareMedicament.php">
            <img src="../imagini/adaugaTest2.png" alt="Creeare Medicament" width="600" height="400">
        </a>
        <div class="desc">Creeare medicament</div>

    </div>

    <div class="gallery2">
        <a href="mapareBM.php">
            <img src="../imagini/adaugaTest2.png" alt="Asociere medicament cu boala" width="600" height="400">
        </a>
        <div class="desc">Asociere medicament-boala</div>

    </div>

    <div class="gallery2">
        <a href="vizualizareSemnalariProprii.php">
            <img src="../imagini/abuz.png" class="left" alt="Sterge anunt" >
        </a>
        <div class="desc">Sterge semnalare</div>
    </div>




</div>

</body>


<br>
<br>
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
