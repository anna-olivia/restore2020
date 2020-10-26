<?php //Verbindung zur Datenbank herstellen
//Name der DB voegel
//Name der DB tabelle user_bilder


include("config.php");
//leerer string für Text in textbox 
$text = "";

if (isset($_POST['upload'])){

	//Dateiname im Upload Feld
    $bild = $_FILES['bild']['name'];
	//Erlaubte Dateitypen
	$allowed_types = "(jpg|jpeg|png|gif)";

	//Wenn nicht die erlaubten Dateitypen, dann Upload nicht erlauben via preg_match
	if(!(preg_match("/\." . $allowed_types . "$/i", $_FILES["bild"]["name"]))){
		
		//Textausgabe
        $text = "Dateiformat leider für den Upload nicht erlaubt!";
    
   }else{
    //Titel ziehen
    $bildtitel = mysqli_real_escape_string($db, $_POST['bildtitel']);
    
    //Text ziehen
    $bild_text = mysqli_real_escape_string($db, $_POST['bild_text']);
    
    //username ziehen
    $username = mysqli_real_escape_string($db, $_POST['username']);
    
    //bilddatei pfad basname gibt den letzten namesteil zurück
    $pfad = "vogelbilder/".basename($bild);

    $sql ="INSERT INTO user_bilder (bild, bildtitel, bild_text, username) VALUES ('$bild', '$bildtitel', '$bild_text', '$username')";
    //Anfrage
    mysqli_query($db, $sql);
	
    //'tmp_name' temporary file also der zeitlich begrenzte name am ort bevor upload 
    if (move_uploaded_file($_FILES['bild']['tmp_name'], $pfad)){
		//Eroflgreich
        $textok = "Bild wurde erfolgreich hochgeladen!";
    }else{
		//Datei zu gross: siehe upload.php Zeile5: value="3000000", aktuell max ca. 3MB
        $text= "Upload fehlgeschlagen - Dateigröße überschritten!";
    }
	
 


}}

?>

<div class="container-sm">
      <?php if($text){
		  //Textausgabe wenn Upload fehlgeschlagen, Datei zu gross
          echo $text;
     }else{
		  //Textausgabe wenn alles OK
		  echo $textok."<br>";
		  //Bilderliste darstellen via $ergebnis
          include("bildausgabe.php"); 
	}
		  ?>
          
</div>

