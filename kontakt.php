<?php include("inc/header.php"); ?>

<div class="container-fluid">

  <?php include("inc/nav.php"); ?>


<div class="row">

   <!--Karteikarte-->
   <div class="card" id="elfriede">
    <img src="vogelbilder/katze.jpg" class="card-img-top" alt="Elfriede Berger">
      <!-- Button trigger modal -->
  <button type="button" class="btn btn-info quiz" data-toggle="modal" data-target="#katze">
       Quizfrage?
         </button>
          <!-- Modal von Quizfrage-->
      <div class="modal fade" id="katze" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
                <div class="modal-content">
         <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Wie viel Vögel fallen jährlich der Hauskatze in Dtld. zum Opfer?</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                </button>
       </div>
                             <div class="modal-body">
                               <!-- antwort a.) button -->
                           <!-- leider reagiert zweites modal nur auf id's deswgen leider zweimal id="falsch"  genutzt-->
                     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch">a) nicht der Rede wert </button> <br> <br>
                   <!-- antwort b.) button-->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#falsch">b) bis zu 1 Millionen</button> <br> <br>
                      <!-- antwort c.) button-->
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#richtig">c) bis zu 200 Millionen </button> <br> <br>
                        
                       
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
                                  <h5 class="card-title">Elfriede Berger</h5>
                                  <p class="card-text text-dark">
                                  Ich bin Elfriede. Ich sehne mich regelmäßig nach Natur, nach Tieren und nach Landleben. Vielen gehts genauso wie mir. Das weiß ich. 
                                  Vor allem, wenn die Stadt wie ein unermüdlicher Motor nicht mal nachts zur Ruhe kommen will. 
                                  Um nicht in eine umschweifende philosophische Diskussion zu fallen von "Was ist Natur? Gehören wir Menschen etwa nicht dazu?". Möchte ich hier nur die  
                                 besonders vielfältige und artenreiche Flora und Fauna in Berlin erwähnen. Dabei ist auch interessant, dass die "Stadtnatur" vielfältiger, weniger bedroht und geringeren Belastungen ausgesetzt ist.
                                 Warum also sich woanders hinsehnen? Es gibt viel zu entdecken!    
                           
                                  </p>
                                  <a href="https://www.nabu.de/tiere-und-pflanzen/voegel/gefaehrdungen/katzen/15537.html" class="btn btn-info">Mehr zur Quizfrage</a>
                          </div>
</div>
<div class="col-sm-4 float-right">
<br>
<h3>IMPRESSUM</h3>
<p>
    ELFRIEDEBERGER.DE</p>
    
 <p>   Elfriede Berger, Apfel Str. 4, 12455 Berlin/Deutschland </p>
    
   <p> E-Mail: <br>
    elfriede@berger.de </p>
    
   <p> Mobil: <br>
    Tel: +49 176 / 422 22 22 </p>
    
   <p> Umsatzsteuer:
    UStd-IdNr. gemäß §27 a Umsatzsteuergesetz:
    DE2211+++ </p>
    
  <p>  Vertreten durch:
    Elfriede Berger </p>
    
  <p>  Verantwortlich für den Inhalt
    nach § 55 Abs. 2 RStV: </p>
  <p>  Elfriede Berger, Apfel Str. 4, 12455 Berlin/Deutschland </p>
    
   <p> Streitschlichtung </p>
  <p> Die europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: https://ec.europa.eu/consumers/odr. </p>
   <p> Die E-Mail-Adresse von Elfriede Berger finden Sie im Impressum. </p>
    
    <p>Elfriede Berger ist nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen. </p>
    
   <p> Alle verwendeten Bilder, Grafiken und Texte unterliegen dem Urheberrecht und dürfen nur mit Zustimmung des Herausgebers verwendet werden. </p>
    
   <p> Bildquelle: PIXABAY </p>
    <p> Informationen zu Nutzungsbedingungen bei PIXABAY </p>
    
   
   
    </div>
    </div>

</div>

<?php include("inc/footer.php"); ?>