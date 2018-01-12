<?php
$x_min = $_POST["x_min"];
$x_max = $_POST["x_max"];
$y_max = $_POST["y_max"];
$y_min = $_POST["y_min"];
$z_max = $_POST["z_max"];
$z_min = $_POST["z_min"];
$x = $_POST["x"];
$y = $_POST["y"];

if($x_min>0 and $x_max>0 and $y_max>0 and $y_min>0 and $z_max>0 and $z_min>0 and $x>0 and $y >0){
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Logika Fuzzy</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet"> 
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Logika <span class="lite">Fuzzy</span></a>
            <!--logo end-->      
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li >
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="tsukamoto.php">
                          <i class="icon_genius"></i>
                          <span>Metode Tsukamoto</span>
                      </a>
                  </li>
                  <li class="active">                     
                      <a class="" href="program.php">
                          <i class="icon_piechart"></i>
                          <span>Contoh Program</span>     
                      </a>                       
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">Contoh Program </h3>
          
        </div>
      </div>
              
            <div class="row">
                  <div class="col-lg-12">
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                            Aplikasi Fuzzy dengan Metode Tsukamoto
                          </header>
                          <div class="panel-body">
      

      <fieldset>

        <legend>[1] Pembentukan Himpunan Fuzzy (Fuzzyfication)</legend>

        <table border='1'>

          <tr>

            <th colspan='4'>Pemintaan</th>

          </tr>

          <tr>

            <td rowspan='3'>&micro;<sub>permintaan NAIK</sub>(x)</td>

            <td>1 , x<<?=$x_min?></td>

            <td rowspan='3'>&micro;<sub>permintaan TURUN</sub>(x)</td>

            <td>0 , x<<?=$x_min?></td>

          </tr>

          <tr>

            <td>(<?=$x_max?>-x)/<?=($x_max-$x_min)?> , <?=$x_min?> &le; x &le;<?=$x_max?></td><td>(x-<?=$x_min?>)/<?=($x_max-$x_min)?> , <?=$x_min?> &le; x &le;<?=$x_max?></td>

          </tr>

          <tr>

            <td>0 , x><?=$x_max?></td><td>1 , x><?=$x_max?></td>

          </tr>

          <tr>

            <th colspan='4'>Persediaan</th>

          </tr>

          <tr>

            <td rowspan='3'>&micro;<sub>persediaan BANYAK</sub>(y)</td>

            <td>1 , y<<?=$y_min?></td>

            <td rowspan='3'>&micro;<sub>persediaan SEDIKIT</sub>(y)</td>

            <td>0 , y<<?=$y_min?></td>

          </tr>

          <tr>

            <td>(<?=$y_max?>-y)/<?=($y_max-$y_min)?> , <?=$y_min?> &le; y &le;<?=$y_max?></td><td>(y-<?=$y_min?>)/<?=($y_max-$y_min)?> , <?=$y_min?> &le; y &le;<?=$y_max?></td>

          </tr>

          <tr>

            <td>0 , y><?=$y_max?></td><td>1 , y><?=$y_max?></td>

          </tr>

          <tr>

            <th colspan='4'>Produksi</th>

          </tr>

          <tr>

            <td rowspan='3'>&micro;<sub>produksi BERTAMBAH</sub>(z)</td>

            <td>1 , z<<?=$z_min?></td>

            <td rowspan='3'>&micro;<sub>produksi BERKURANG</sub>(z)</td>

            <td>0 , z<<?=$z_min?></td>

          </tr>

          <tr>

            <td>(<?=$z_max?>-z)/<?=($z_max-$z_min)?> , <?=$z_min?> &le; z &le;<?=$z_max?></td><td>(z-<?=$z_min?>)/<?=($z_max-$z_min)?> , <?=$z_min?> &le; z &le;<?=$z_max?></td>

          </tr>

          <tr>

            <td>0 , z><?=$z_max?></td><td>1 , z><?=$z_max?></td>

          </tr>

          <tr>

            <td colspan='4'>

              Permintaan: x=<?=$x?>;<br />

              <?php

              $ux_turun=($x_max-$x)/($x_max-$x_min);

              $ux_naik=($x-$x_min)/($x_max-$x_min);

              ?>

              &micro;<sub>permintaan TURUN</sub>(<?=$x?>)=(<?=$x_max?>-<?=$x?>)/<?=($x_max-$x_min)?>=<?=$ux_turun?>;<br />

              &micro;<sub>permintaan NAIK</sub>(<?=$x?>)=(<?=$x?>-<?=$x_min?>)/<?=($x_max-$x_min)?>=<?=$ux_naik?>;<br />

              Persediaan: y=<?=$y?>;<br />

              <?php

              $uy_sedikit=($y_max-$y)/($y_max-$y_min);

              $uy_banyak=($y-$y_min)/($y_max-$y_min);

              ?>            

              &micro;<sub>persediaan SEDIKIT</sub>(<?=$y?>)=(<?=$y_max?>-<?=$y?>)/<?=($y_max-$y_min)?>=<?=$uy_sedikit?>;<br/>

              &micro;<sub>persediaan BANYAK</sub>(<?=$y?>)=(<?=$y?>-<?=$y_min?>)/<?=($y_max-$y_min)?>=<?=$uy_banyak?>;<br/>

            </td>

          </tr>

   

        </table>

      </fieldset>

      <fieldset>

        <legend>[2] Penerapan Fungsi Implikasi</legend>

        <p>Nilai &alpha;-predikat dan Z dari setiap aturan</p>

        <p><strong>Rule 1 :</strong><em>        IF permintaan TURUN and persediaan BANYAK THEN produksi barang BERKURANG</em><br />

        <?php

        $a_pred1=min($ux_turun,$uy_banyak);

        $z1=$z_max-$a_pred1*($z_max-$z_min);

        ?>

        &alpha;-predikat<sub>1</sub>=&micro;<sub>permintaan TURUN</sub> <big>&cap;</big> &micro;<sub>persediaan BANYAK</sub><br />

          =min(&micro;<sub>permintaan TURUN</sub>(<?=$x?>) <big>&cap;</big> &micro;<sub>persediaan BANYAK</sub>(<?=$y?>))<br />

          =min(<?=$ux_turun?>,<?=$uy_banyak?>)<br />

          =<?=$a_pred1?><br />

        Dari himpunan produksi barang BERKURANG: (<?=$z_max?>-z<sub>1</sub>)/<?=($z_max-$z_min)?>=<?=$a_pred1?><br/>

        diperoleh <strong>z<sub>1</sub></strong>=<?=$z1?>

        </p>

        <p><strong>Rule 2 :</strong><em>IF permintaan TURUN and persediaan SEDIKIT THEN produksi barang BERKURANG</em><br />

        <?php

        $a_pred2=min($ux_turun,$uy_sedikit);

        $z2=$z_max-$a_pred2*($z_max-$z_min);

        ?>

        &alpha;-predikat<sub>2</sub>=&micro;<sub>permintaan TURUN</sub> <big>&cap;</big> &micro;<sub>persediaan SEDIKIT</sub><br />

          =min(&micro;<sub>permintaan TURUN</sub>(<?=$x?>) <big>&cap;</big> &micro;<sub>persediaan SEDIKIT</sub>(<?=$y?>))<br />

          =min(<?=$ux_turun?>,<?=$uy_sedikit?>)<br />

          =<?=$a_pred2?><br />

        Dari himpunan produksi barang BERKURANG: (<?=$z_max?>-z<sub>2</sub>)/<?=($z_max-$z_min)?>=<?=$a_pred2?><br/>

        diperoleh <strong>z<sub>2</sub></strong>=<?=$z2?>

        </p>

        <p><strong>Rule 3 :</strong><em>IF permintaan NAIK and persediaan BANYAK THEN produksi barang BERTAMBAH</em><br />

        <?php

        $a_pred3=min($ux_naik,$uy_banyak);

        $z3=$a_pred3*($z_max-$z_min)+$z_min;

        ?>

        &alpha;-predikat<sub>2</sub>=&micro;<sub>permintaan NAIK</sub> <big>&cap;</big> &micro;<sub>persediaan BANYAK</sub><br />

          =min(&micro;<sub>permintaan NAIK</sub>(<?=$x?>) <big>&cap;</big> &micro;<sub>persediaan BANYAK</sub>(<?=$y?>))<br />

          =min(<?=$ux_naik?>,<?=$uy_banyak?>)<br />

          =<?=$a_pred3?><br />

        Dari himpunan produksi barang BERTAMBAH: (z<sub>3</sub>-<?=$z_min?>)/<?=($z_max-$z_min)?>=<?=$a_pred3?><br/>

        diperoleh <strong>z<sub>3</sub></strong>=<?=$z3?>

        </p>

        <p><strong>Rule 4 :</strong><em>IF permintaan NAIK and persediaan SEDIKIT THEN produksi barang BERTAMBAH</em><br />

        <?php

        $a_pred4=min($ux_naik,$uy_sedikit);

        $z4=$a_pred4*($z_max-$z_min)+$z_min;

        ?>

        &alpha;-predikat<sub>2</sub>=&micro;<sub>permintaan NAIK</sub> <big>&cap;</big> &micro;<sub>persediaan SEDIKIT</sub><br />

          =min(&micro;<sub>permintaan NAIK</sub>(<?=$x?>) <big>&cap;</big> &micro;<sub>persediaan SEDIKIT</sub>(<?=$y?>))<br />

          =min(<?=$ux_naik?>,<?=$uy_sedikit?>)<br />

          =<?=$a_pred4?><br />

        Dari himpunan produksi barang BERTAMBAH: (z<sub>4</sub>-<?=$z_min?>)/<?=($z_max-$z_min)?>=<?=$a_pred4?><br/>

        diperoleh <strong>z<sub>4</sub></strong>=<?=$z4?>

        </p>

      </fieldset>

  

  

  

 

  

  

  

      <fieldset>

        <legend>Defuzzyfication</legend>

        <?php

        $n=$a_pred1*$z1+$a_pred2*$z2+$a_pred3*$z3+$a_pred4*$z4;

        $d=$a_pred1+$a_pred2+$a_pred3+$a_pred4;

        $z=$n/$d;

        ?>

        <p>Menghitung z akhir dengan merata-rata semua z berbobot</p>

      <p>z=(&alpha;-predikat<sub>1</sub>*z<sub>1</sub>+&alpha;-predikat<sub>2</sub>*z<sub>2</sub>+&alpha;-predikat<sub>3</sub>*z<sub>3</sub>+&alpha;-predikat<sub>4</sub>*z<sub>4</sub>)/(&alpha;-predikat<sub>1</sub>+&alpha;-predikat<sub>2</sub>+&alpha;-predikat<sub>3</sub>+&alpha;-predikat<sub>4</sub>)<br/>

        =(<?=$a_pred1?>*<?=$z1?>+<?=$a_pred2?>*<?=$z2?>+<?=$a_pred3?>*<?=$z3?>+<?=$a_pred4?>*<?=$z4?>)/(<?=$a_pred1?>+<?=$a_pred2?>+<?=$a_pred3?>+<?=$a_pred4?>)<br/>

        =<?=$n?>/<?=$d?><br/>

        =<?=$z?></p>

        <p>Jadi jumlah yang harus diproduksi (<strong>z</strong>) =<strong><?=$z?></strong></p>

      </fieldset>

 

                          </div>
                      </section>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
          <div class="text-right">
          <div class="credits">

                <a href="#">Logika fuzzy ST-INTEN 2018</a> by <a href="#">Kelompok1</a>
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
  </body>
</html>

<?php

}
else
{
  header("Location: program.php");
}
?>  
