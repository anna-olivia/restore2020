<?php
header("Content-Type: text/html; charset=utf-8");
?>
<?php
//
include("inc/config.php");
?>

<?php include("inc/header.php") ?>
<?php include("inc/nav.php"); ?>

    <?php    echo " <div class='container-sm float-left'><br><button type='button' class='btn btn-info' data-toggle='modal' data-target='#info'>
    Erfahre mehr
</button>";
echo "
<div class='modal fade' id='info' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
            <div class='modal-content'>
                    <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Was ist STADT_NATUR?</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>
                    <div class='modal-body text-dark'>
             Man mag es kaum glauben, aber die Stadtnatur hat eine artenreiche, vielfältige Flora und Fauna. 
             Auf dieser Seite wollen wir nur einen kleinen Eindruck hinterlassen, wie divers alleine die Vögel in einer Stadt sind. 
             Hier findet ihr ein paar Exemplare typischer Vogelarten, die man in der Stadt beobachten kann. Viel Spaß! 
                  </div></div></div>";
                  echo "</div>"; ?>

<div class="container-fluid">



  <div class="row">

          <div class="col-sm-4">

                  <!--Karteikarte-->
                  <div class="card">
                          <img src="vogelbilder/amsel_kartei.jpg" class="card-img-top" alt="Amsel">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#amsel">
                                  Quizfrage?
                          </button>
                          <!-- Modal von Quizfrage-->
                          <div class="modal fade" id="amsel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wie alt kann eine Amsel werden?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                        <!-- leider reagiert zweites modal nur auf id's deswgen leider zweimal id="falsch"  genutzt-->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch">a) bis zu 5 Jahre alt</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch">b) bis zu 10 Jahre alt</button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig">c) bis zu 20Jahre alt </button> <br> <br>
                                                      

                                                       
                                                <!--antwort a.) b.) pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort c.) pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Amsel</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Amsel'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Amsel" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                          <?php /*
                                while ($row  = mysqli_fetch_array($ergebnis)) {
                                        echo "<div class='card-body' style='height: 300px; color: black;'>";
                                        echo "<h5 class='card-title' style='color: lightgrey;'>".$row  justify-content-md-center justify-content justify-content['vogelname']."</h5>";  
                                        echo "<p  style='margin-top: 50px; color: black;'>".$row ['groesse']."</p>";
                                        echo "<p  style='margin-top: 50px; color: black;'>".$row ['besonderheit']."</p>";
                                        echo "</div>";  } */?>
                  </div>
          </div>
          <br>


          <!--2.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <img src="vogelbilder/bachstelze_kartei.jpg" class="card-img-top" alt="Bachstelze">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#bachstelze">
                                  Quizfrage?
                          </button>
                          
                          <!-- Modal von Quizfrage-->
                          <div class="modal fade" id="bachstelze" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Woran kann man die Bachstelze gut erkennen?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig2">a) an ihrem wippenden Schwanz</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch2">b) an ihrem hüpfenden Gang </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch2">c) an ihrem ordentlichen Nest </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Bachstelze</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Bachstelze'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Bachstelze" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>

          <br>




          <!--3.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <img src="vogelbilder/blaumeise_kartei.jpg" class="card-img-top" alt="Blaumeise">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#blaumeise">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="blaumeise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wie groß soll das Einflugloch an einem Blaumeisen-Nistkasten sein?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch3">a) 16-18 mm</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig3">b) 26-28 mm </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch3">c) 36-38 mm </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Blaumeise</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Blaumeise'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Blaumeise" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>
          </div>
          <br>


          <div class="row">

          <!--4.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <img src="vogelbilder/buntspecht_kartei.jpg" class="card-img-top" alt="Buntspecht">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#buntspecht">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="buntspecht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Was bedeutet es, wenn der Buntspecht einen schnellen "Trommelwirbel" hören lässt</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch4">a) Er warnt seinen Trupp vor einer Gefahr</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig4">b) Er macht klar, dass hier sein Revier ist </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch4">c) Er hat eine üppige Nahrungsquelle gefunden </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Buntspecht</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Buntspecht'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Buntspecht" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>
          <br>

          <!--5.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <img src="vogelbilder/eichelhaeher_kartei.jpg" class="card-img-top" alt="Eichelhaeher">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#eichelhaeher">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="eichelhaeher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wie viele Eicheln kann ein Eichelhäher auf einmal transportieren?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch5">a) etwa 5 Eicheln</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig5">b) etwa 10 Eicheln </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch5">c) etwa 20 Eicheln </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Eichelhaeher</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Eichelhäher'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Eichelh%C3%A4her" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>

          <br>

          <!--6.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <img src="vogelbilder/elster_kartei.jpg" class="card-img-top" alt="Elster">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#elster">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="elster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Das Nest der elster hat die Form einer ...</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch6">a) ...Röhre</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch6">b) ...Schale</button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig6">c) ...Kugel </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch6" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Elster</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Elster'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Elster" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>
</div>
          <br>

         

          <!--7.Karteikarte-->
          <div class="row">
          <div class="col-sm-4">
                  <div class="card">
                          <!--<img src="vogelbilder/amsel_640_426.jpg" class="card-img-top" alt="Amsel">-->
                          <img data-src="vogelbilder/kuckuck_kartei.jpg" class="card-img-top lazy" alt="Kuckuck">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#kuckuck">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="kuckuck" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wie viele Eier legt das Kuckucksweibchen in ein fremdes Nest?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig7">a) immer nur ein Ei pro Nest</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch7">b) 2-3 Eier pro Nest</button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch7">c) 5-6 eier pro Nest </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch7" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Kuckuck</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Kuckuck'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Kuckuck" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>

          <br>

          <!--8.Karteikarte-->
          <div class="col-sm-4">
                  <div class="card">
                          <!--<img src="vogelbilder/amsel_640_426.jpg" class="card-img-top" alt="Amsel">-->
                          <img data-src="vogelbilder/rabenkraehe_kartei.jpg" class="card-img-top lazy" alt="Rabenkrähe">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#rabenkraehe">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="rabenkraehe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Die Rabenkrähe ist ein ...</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig8">a) ... Allesfresser</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch8">b) ... reiner Fleischfresser </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch8">c) ... Vegetarier </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch8" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                          <!--Karteikarten Text-->
                          <div class="card-body">
                                  <h5 class="card-title">Rabenkrähe</h5>
                                  <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Rabenkrähe'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                                  <a href="https://de.wikipedia.org/wiki/Aaskr%C3%A4he" class="btn btn-info">Mehr Erfahren</a>
                          </div>
                  </div>
          </div>

          <br>

          <!--9. Karteikarte-->
          <div class="col-sm-4">
          <div class="card">
                <!--<img src="vogelbilder/ringeltaube_kartei" class="card-img-top" alt="Amsel">-->
                <img data-src="vogelbilder/ringeltaube_kartei.jpg" class="card-img-top lazy" alt="Ringeltaube">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#ringeltaube">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="ringeltaube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Womit füttert die Ringeltaube ihre Küken?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch9">a) mit Taubenblut </button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch9">b) mit Taubenkot </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig9">c) mit Taubenmilch</button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch9" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                <!--Karteikarten Text-->
                <div class="card-body">
                        <h5 class="card-title">Ringeltaube</h5>
                        <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Ringeltaube'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                        <a href="https://de.wikipedia.org/wiki/Ringeltaube" class="btn btn-info">Mehr Erfahren</a>
                </div>
                </div>
        </div>
      
        <br>
        </div>


      

        <!-- 10.Karteikarte-->
        <div class="row">
        <div class="col-sm-4">
        <div class="card">
               <!-- <img src="vogelbilder/amsel_640_426.jpg" class="card-img-top" alt="Amsel"> -->
               <img data-src="vogelbilder/rotkehlchen_kartei.jpg" class="card-img-top lazy" alt="Rotkehlchen">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#rotkehlchen">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="rotkehlchen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wann kann man das Rotkehlchen beobachten?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch10">a) im Sommer</button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig10">b) ganzjährig</button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch10">c) im Winter </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch10" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                <!--Karteikarten Text-->
                <div class="card-body">
                        <h5 class="card-title">Rotkehlchen</h5>
                        <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Rotkehlchen'")
                                  or die( $db->error);
                          
                          
                          // while ($zeile = $erg->fetch_assoc()) {
                          while ($zeile = $erg->fetch_object()) {
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                        <a href="https://de.wikipedia.org/wiki/Rotkehlchen" class="btn btn-info">Mehr Erfahren</a>
                </div>
        </div>
        </div>
        <br>

        <!-- 11. Karteikarte-->
        <div class="col-sm-4">
        <div class="card">
              <!-- <img src="vogelbilder/amsel_640_426.jpg" class="card-img-top" alt="Amsel"> -->
               <img data-src="vogelbilder/star_kartei.jpg" class="card-img-top lazy" alt="Star">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#star">
                                  Quizfrage?
                          </button>
                         <!-- Modal von Quizfrage-->
                         <div class="modal fade" id="star" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                          <div class="modal-content">
                                                  <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Wie viele Stare kommen in einem Winterquartier unter?</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                          </button>
                                                  </div>
                                                  <div class="modal-body">
                                                        <!-- antwort a.) button -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch11">a) bis zu 10.000 </button> <br> <br>
                                                       <!-- antwort b.) button-->
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch11">b) bis zu 100.000 </button> <br> <br>
                                                        <!-- antwort c.) button-->
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig11">c) bis zu 1.000.000 </button> <br> <br>
                                                      

                                                       
                                                <!--antwort falsch pop-up-->
                                                <div class="modal fade bd-example-modal-sm" id="falsch11" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light bg-dark">
                                                              <div style="padding: 25px;"> Leider falsch : ( 
                                                              
                                                                </div>
                                                        </div>
                                                        </div>
                                                </div>

                                                 <!--antwort richitg pop-up-->
                                                 <div class="modal fade bd-example-modal-sm" id="richtig11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" style="margin-top: 200px;">
                                                        <div class="modal-content text-light" style="background-color: rgb(250,1,175);">
                                                                <div style="padding: 25px;">YEAAAHHHH! Richtig!</div>
                                                               
                                                                </div>
                                                        </div>
                                                </div>              

                                                </div>
                                                  <div class="modal-footer">
                                                          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                         
                                                  </div>
                                          </div>
                                  </div>
                          </div>
                <!--Karteikarten Text-->
                <div class="card-body">
                        <h5 class="card-title">Star</h5>
                        <p class="card-text text-dark">
                                  <?php
                                  $erg = $db->query("SELECT groesse, besonderheit FROM gartenvoegel WHERE vogelname = 'Star'")
                                  or die( $db->error);
                          
                          
                        
                          while ($zeile = $erg->fetch_object()){
                              
                              echo '<u>Größe:</u> '. $zeile->groesse;
                              echo '<br><br><u>Besonderheit:</u> <br>'. $zeile->besonderheit;
                          }
                          ?>
                           
                                  </p>
                        <a href="https://de.wikipedia.org/wiki/Star" class="btn btn-info">Mehr Erfahren</a>
                </div>
        </div>
        </div>
        <br>

        
 </div>
</div>

</div>
<?php include("inc/footer.php") ?>

   