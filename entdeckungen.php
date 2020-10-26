<?php
session_start();

?>
<?php include("inc/header.php"); 
include("inc/nav.php");?>
<?php
if(!isset($_SESSION['userid'])) {
    echo "<div class='container-sm'>";
    echo "<a  id='mehr-teilen' class='text-info' href='login.php'>Entdeckungen teilen!</a>";
//Bilderliste darstellen via $ergebnis
        include_once("inc/bildausgabe.php"); 
  echo "</div>";
    }else{
        $userid = $_SESSION['userid'];
    echo "<div class='container-sm' id='meldung_reg2'>Hallo $userid </div>";
    echo "<a  id='mehr-teilen' class='text-info' href='registriert.php'> Mehr Entdeckungen teilen!</a>";
    echo "</div>";

    include("inc/kontrolle.php"); 
    }
    ?>
    <?php include("inc/footer.php"); ?>