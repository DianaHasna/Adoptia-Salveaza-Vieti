<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['id_administrator'])){
    header("location: ../index.php");
}
include("../include/inHeaderAdmin.php");
?>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">

<body background="../imagini/adopta.jpg" style="background-attachment: fixed">
<div class="content">



    <div class="gallery2">
        <a href="editProfile.php">
            <img src="../imagini/pisii.png" class="left" alt="Editeaza profilul"  >
        </a>
        <div class="desc">Editeaza profilul</div>
    </div>



    <div class="gallery2">
        <a href="adaugaAnimal.php">
            <img src="../imagini/anunt.jpg"  class="center "alt="AdaugareAnimal" width="600" height="400">
        </a>
        <div class="desc">Adaugare animal </div>

    </div>


    <div class="gallery2">
        <a href="vizualizareAnimale.php">
            <img src="../imagini/look2.png"  class="left" alt="VizualizareAnimale" width="600" height="400">
        </a>
        <div class="desc">Vizualizare animale </div>

    </div>


    <div class="gallery2">
        <a href="vizualizareAdoptii.php">
            <img src="../imagini/look2.png"  class="center" alt="Vizualizare adoptii" width="600" height="400">
        </a>
        <div class="desc">Vizualizare adoptii</div>

    </div>

    <div class="gallery2">
        <a href="creeareMedicament.php">
            <img src="../imagini/medicine.png" class="left" alt="Creeare Medicament" width="600" height="400">
        </a>
        <div class="desc">Adaugare medicament</div>

    </div>

    <div class="gallery2">
        <a href="creeareBoala.php">
            <img src="../imagini/deasease.png"  class="center" alt="Creeare Boala" width="600" height="400">
        </a>
        <div class="desc">Adaugare boala</div>

    </div>


    <div class="gallery2">
        <a href="mapareBM.php">
            <img src="../imagini/mapare.png"  class="left" alt="Asociere medicament cu boala" width="600" height="400">
        </a>
        <div class="desc">Asociere medicament-boala</div>

    </div>



    <div class="gallery2">
        <a href="vizualizareAnunturi.php">
            <img src="../imagini/look2.png" class="center" alt="VizualizareAnunturi" width="600" height="400">
        </a>
        <div class="desc">Vizualizare anunturi </div>

    </div>



    <div class="gallery2">
        <a href="vizualizareAnunturiProprii.php">
            <img src="../imagini/sterge.png" class="left" alt="Sterge anunt" >
        </a>
        <div class="desc">Sterge anunt</div>
    </div>





    <div class="gallery2">
        <a href="vizualizareSemnalari.php">
            <img src="../imagini/look2.png"  class="center" alt="VizualizareSemnalari" width="600" height="400">
        </a>
        <div class="desc">Vizualizare semnalari </div>

    </div>



    <div class="gallery2">
        <a href="vizualizareSemnalariProprii.php">
            <img src="../imagini/sterge.png" class="left" alt="Sterge anunt" >
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
