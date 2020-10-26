<?php session_start();

 ?>
<?php include("inc/header.php"); 
include("inc/nav.php");?>

<?php

if(!isset($_SESSION['userid'])) {
header("location: login.php");
}else{
    $userid = $_SESSION['userid'];
echo "<div class='container-sm' id='meldung_reg2'>Hallo $userid </div>";
include("inc/upload.php");
}

//upload bilder und gästebucheinträge
//include("inc/upload.php");
?>

<?php include("inc/footer.php"); ?>