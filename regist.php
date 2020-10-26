<?php 
include("inc/config.php");

include("inc/header.php");
include("inc/nav.php");
?>    

 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;"> Bitte eine gültige E-Mail-Adresse eingeben</div><br>';
        $error = true;
    } 
    if(strlen($username) == 0) {
      echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;"> Bitte ein Username angeben</div><br>';
      $error = true;
  }    
    if(strlen($passwort) == 0) {
        echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;"> Bitte ein Passwort angeben</div><br>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;">Die Passwörter müssen übereinstimmen</div><br>';
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $db->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;">Diese E-Mail-Adresse ist bereits vergeben </div><br>';
            $error = true;
        }    
    }

    //Überprüfe, ob Username noch nicht registriert ist

    if(!$error) { 
      $statement = $db->prepare("SELECT * FROM users WHERE username = :username");
      $result = $statement->execute(array('username' => $username));
      $user = $statement->fetch();
      
      if($user !== false) {
          echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;">Dieser Username ist bereits vergeben </div><br>';
          $error = true;
      }    
  }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $db->prepare("INSERT INTO users (vorname, nachname, username, email, passwort) VALUES (:vorname, :nachname, :username, :email, :passwort)");
        $result = $statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'username' => $username, 'email' => $email, 'passwort' => $passwort_hash));
        
        if($result) {        
            header("location: login.php");
            $showFormular = false;
        } else {
            echo '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;"> Beim Abspeichern ist leider ein Fehler aufgetreten</div><br>';
        }
    } 
}
 
if($showFormular) {
?>
 <!-- Das Registrierungsformular ist ein schlichtes HTML-Formular
  welches die Daten an die eigene Seite sendet, 
  aber zusätzlich noch den GET-Parameter register=1 mit übergibt. 
  So können wir später leicht überprüfen,
  ob Daten für die Registrierung gesendet wurde -->

<form action="?register=1" method="post" id="regist">
    <label for="vorname" class="text-info">Dein Vorname:</label>
<br>
<input type="text" size="40" maxlength="250" name="vorname"><br><br>

<label for="nachname" class="text-info">Dein Nachname:</label>
<br>
<input type="text" size="40" maxlength="250" name="nachname"><br><br>

<label for="email" class="text-info">Deine E-Mail:</label>
<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

<label for="username" class="text-info">Dein Username:</label>
<br>
<input type="text" size="40" maxlength="250" name="username"><br><br>

 <label for="password" class="text-info">Dein Passwort:</label>
<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
<br> 
<label for="password" class="text-info">Passwort wiederholen:</label>
<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>
 
<button type="submit" value="Abschicken" class="btn btn-outline-info">Absenden</button>
 <br><br>
</form>
 
<?php
} //Ende von if($showFormular)
?>
 <?php include("inc/footer.php"); ?>