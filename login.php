<?php session_start(); ?>
<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>


<!--login-->
<?php 
include("inc/config.php");
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwort = $_POST['passwort'];
    
    $statement = $db->prepare("SELECT * FROM users WHERE username = :username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['username'];
        header("location:registriert.php");
    } else {
        $errorMessage = '<div class="container-sm" style="margin-top: 200px;color: lightgrey; font-size: 26px;">E-Mail oder Passwort war ungültig!</div><br>';
    }
    
}
?>
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post" id="login">
<label for="email" class="text-info">Deine E-Mail:</label>
<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

<label for="username" class="text-info">Dein Username:</label>
<br>
<input type="text" size="40" maxlength="250" name="username"><br><br>

<label for="password" class="text-info">Dein Passwort:</label>
<br>
<input type="password" size="40"  maxlength="250" name="passwort">
<br> <br>
<button type="submit" value="Abschicken" class="btn btn-outline-info">Absenden</button>
 <br><br>
<p>Noch nicht dabei?</p>
<a href="regist.php" class="btn btn-outline-info" type="button">REGISTRIERE DICH!</a>
</form> 

<?php include("inc/footer.php"); ?>