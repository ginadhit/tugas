<!DOCTYPE html>
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
                  <li class="active">
                      <a class="" href="tsukamoto.php">
                          <i class="icon_genius"></i>
                          <span>Metode Tsukamoto</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="program.php">
                          <i class="icon_genius"></i>
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
          <h3 class="page-header">Metode Tsukamoto </h3>
          
        </div>
      </div>
              
            <div class="row">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-10">
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                            Apa itu Metode Tsukamoto
                          </header>
                          <div class="panel-body">
                            &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Sistem  Inferensi  Fuzzy  merupakan suatu  kerangka  komputasi  yang didasarkan
                            pada  teori  himpunan  fuzzy,  aturan  fuzzy  berbentuk IF-THEN,  dan penalaran   fuzzy.
                            Secara  garis besar,  diagram blok  proses  inferensi fuzzy (Kusumadewi, 2003).<br>
                            <center><img src="img/tsukamoto.jpg" width="60%" align="center" height=" auto"></center><br>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Sistem inferensi fuzzy menerima input crisp. Input ini kemudian dikirim ke basis pengetahuan yang berisi n aturan fuzzy dalam bentuk IF-THEN. Fire strength akan dicari pada setiap aturan. Apabila jumlah aturan lebih dari satu, maka akan dilakukan agregasi dari semua aturan. Selanjutnya, pada hasil agregasi akan dilakukan defuzzy untuk mendapatkan nilai crisp sebagai output sistem.
<br><br>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Pada dasarnya, metode tsukamoto mengaplikasikan penalaran monoton pada setiap aturannya. Kalau pada penalaran monoton, sistem hanya memiliki satu aturan, pada metode tsukamoto, sistem terdiri atas beberapa aturan. Karena menggunakan konsep dasar penalaran monoton, pada metode tsukamoto, setiap konsekuen pada aturan yang berbentuk IF-THEN harus direpresentasikan dengan suatu himpunan fuzzy dengan fungsi keanggotaan yang monoton. Output hasil inferensi dari tiap-tiap aturan diberikan secara tegas (crisp) bedasarkan α-predikat (fire strength). Proses agregasi antar aturan dilakukan, dan hasil akhirnya diperoleh dengan menggunakan defuzzy dengan konsep rata-rata terbobot.
<br><br>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Misalkan ada variabel input, yaitu x dan y, serta satu variabel output yaitu z. Variabel x terbagi atas 2 himpunan yaitu A1 dan A2, variabel y terbagi atas 2 himpunan juga, yaitu B1 dan B2, sedangkan variabel output Z terbagi atas 2 himpunan yaitu C1 dan C2. Tentu saja himpunan C1 dan C2 harus merupakan himpunan yang bersifat monoton. Diberikan 2 aturan sebagai berikut:
<br>
<ol>
<li><b>IF x is A1 and y is B2 THEN z is C1</b></li>
<br>
<li><b>IF x is A2 and y is B2 THEN z is C1</b></li>
</ol>
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

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  </script>

  </body>
</html>
