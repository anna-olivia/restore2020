<?php
session_start();

?>
<?php include("inc/header.php"); 
include("inc/nav.php");?>

<?php
if(!isset($_SESSION['userid'])) {
    echo "<div class='container-sm'>";
    echo " <div class='container-sm float-right'><button type='button' class='btn btn-info quiz' data-toggle='modal' data-target='#gast'>
    Gästebuch
</button>";
echo "
<div class='modal fade' id='gast' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
            <div class='modal-content'>
                    <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Du interessierst dich für Vögel?</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>
                    <div class='modal-body text-dark'>
                    Dann bist du hier genau richtig! Wir sind ein paar Vogelbeobachter, die ihre Entdeckungen teilen wollen. Wir sind gespannt, welche Vögel du beobachtet hast!
                  </div></div></div>";
                  echo "</div>";
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