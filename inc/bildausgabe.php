<div class="row">

<?php
//
$db = new mysqli("localhost", "test", "test", "test");

if (!$db->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $db->error);
    } else {
        $db->character_set_name();
    }
?>
    <?php  $ergebnis = mysqli_query($db, "SELECT * FROM user_bilder");
        while ($row = mysqli_fetch_array($ergebnis)) {
            echo "<div class='card'>";
              echo "<img src='vogelbilder/".$row['bild']."' class='card-img-top' alt='Vogel' >";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title text-white'>".$row['bildtitel']."</h5>";  
            echo "<p  class='card-text text-dark'>".$row['bild_text']."</p>";
            echo "<p  class='card-text text-dark'>von <u>".$row['username']."</u></p>";
            echo "</div>";  
          echo "</div>";
         
         
    
        }
      ?>
     
    </div>