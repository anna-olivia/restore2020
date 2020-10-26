<?php include("inc/header.php"); ?>

<?php include("inc/nav.php"); ?>

<div id="vogel"class="container-fluid">
<h4>Die Bezirke Alt-Treptow, Baumschulenweg und Plänterwald....</h4> 
<div class="row">
    <strong style="color: red;">Die Seite ist in Bearbeitung. Hier soll später ein Belegungskalendar zu sehen sein, den man für die Buchung einer Vogelwanderung benutzen kann. Eine interaktive Grafik/Karte der Bezirke Baumschulenweg, Alt-Treptow und Plänterwald soll die Seite abrunden.</strong>
<!--Belegungskalender noch reinbringen-->

<!-- einfacher Kalender als Platzhalter für Belegungskalender-->
	<div class="col-sm-4">
        <div class="span12">
    		<table class="table-condensed table-bordered table-striped">
                <thead>
                    <tr>
                      <th colspan="7">
                        <span class="btn-group">
                            <a class="btn"><i class="icon-chevron-left"></i></a>
                        	<a class="btn active">Oktober 2020</a>
                        	<a class="btn"><i class="icon-chevron-right"></i></a>
                        </span>
                      </th>
                    </tr>
                    <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="muted">29</td>
                        <td class="muted">30</td>
                        <td class="muted">31</td>
                        <td>1</td>
                        <td class="btn-info"><strong>2</strong></td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td class="muted">1</td>
                        <td class="muted">2</td>
                        <td class="muted">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
	</div>

<!--Kalender ende-->

<!-- Grafik -->
<div id="grafik"class="col-sm-4">
  
          
   
    <svg width="210mm" height="297mm" version="1.1" viewBox="0 0 210 297" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
     
    <g>
     <a xlink:href="https://de.wikipedia.org/wiki/Berlin-Alt-Treptow" alt="Alt-Treptow" title="Alt-Treptow">
      <polygon transform="matrix(1.6619 0 0 1.4818 -1209.6 -875.19)" points="776.61 609.44 778.75 610.5 776.92 613 782.23 617.07 790.63 621.23 796.02 622.88 797.19 623.08 800.86 625.65 802.58 627.17 805.56 631.18 805.78 633.47 807.34 636.19 808.03 634.59 808.76 633.53 809.77 633.37 812.79 634.09 814.02 635.01 815.14 639.03 797.83 656.33 770.5 626.33 769.83 638.33 767.83 640.33 767.41 640.7 767.17 640.42 763.02 645.58 753.23 637.17 748.35 633.36 744.61 630.15 739.97 635.19 731.65 628.21 730.53 627 730.61 625.9 731.52 624.45 732.85 623.04 742.13 611.49 746.12 611.32 749.82 607.02 752.23 604.21 753.64 603.37 755.72 602.78 756.26 602.62 757.22 602.7 758.54 602.58 761.46 603.21 767.27 605.06 769.8 605.86 774.89 609.14"/>
     </a>


     <a xlink:href="https://de.wikipedia.org/wiki/Berlin-Baumschulenweg" alt="Plänterwald" title="Plänterwald">
      <polygon transform="matrix(1.6619 0 0 1.4818 -1209.6 -875.19)" points="802.34 720.01 804.02 717.6 805.15 715.92 806.16 713.52 806.88 712.06 807.39 710.42 807.46 708.07 806.45 705.53 803.75 701.72 800.82 697.29 797.65 692.86 810.5 689 816.5 689 821.83 689 819.17 681.67 825.83 677.67 833.83 693.67 840.83 686.33 841.01 684.13 843.5 688.33 846.83 689.67 836.5 709.67 851.17 724.33 845.17 731.67 833.83 731.67 823.17 726.33 814.5 729.67 809.17 729.67 802.5 739 814.5 750.33 843.17 762.33 832.5 779.67 829.83 779.67 820.5 788.33 820.06 788.9 818.26 787.5 810.67 781.68 807.93 779.41 807.33 778.91 805.12 777.09 790.31 765.41 780.38 757.24 778.31 754.77 776.5 751.91 774.94 748.93 773.85 746.27 772.16 742.36 770.77 739.13 769.08 735.09 766.1 729.32 764.72 726.13 765.66 726.15 777.85 726.4 793.57 727.14 800.02 727.47 800.4 726.04 801.31 723.4 801.62 722.51 801.87 721.47"/>
    </a>

     <a xlink:href="https://de.wikipedia.org/wiki/Berlin-Pl%C3%A4nterwald" alt="Baumschulenweg" title="Baumschulenweg">
      <polygon transform="matrix(1.6619 0 0 1.4818 -1209.6 -875.19)" points="797.65 692.86 796.09 690.67 790.54 681.43 790.06 677.41 791.56 670.53 791.81 668.97 789.25 665.88 774.77 649.19 767.41 640.7 767.83 640.33 769.83 638.33 770.5 626.33 797.83 656.33 815.14 639.03 815.27 639.52 819.81 636.32 821.63 634.88 823.31 634.09 826.93 633.8 827.99 633.97 831.39 635.43 835.3 640.97 835.97 642.78 837.97 649.39 838.08 649.38 842.83 664 841.5 678.33 841.01 684.13 840.83 686.33 833.83 693.67 825.83 677.67 819.17 681.67 821.83 689 816.5 689 810.5 689"/>
    </a>
     </g>
    </svg>
 
</div>

</div>
</div>
    <!-- Optional JavaScript -->
    <script>
      //tooltip zeigen beim mouseover
        //$('#alt').tooltip('show')
    </script>
  <?php include("inc/footer.php"); ?>