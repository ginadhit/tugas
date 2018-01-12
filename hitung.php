

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

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

    <div id='container'>


      <fieldset style='display:none'>

        <legend>Kasus</legend>

        <!-- reserved //-->

      </fieldset>


      <form action="proses.php" method='post' onSubmit="validasi()">

        <fieldset>
            

                        <div class="panel panel-info">
                          <div class="panel-heading">Batasan</div>

                        </div>



          <div class="table-responsive">
          <table class="table">

            <tr><th>Variabel</th><th>Min Value</th><th>Max Value</th></tr>

            <tr>

              <td>Permintaan (x)</td>

              <td><input type='text' class='inptxt' name='x_min' id="x_min" onkeypress="return hanyaAngka(event)"/></td>

              <td><input type='text' class='inptxt' name='x_max' id="x_max" onkeypress="return hanyaAngka(event)"/></td>

            </tr>

            <tr>

              <td>Persediaan (y)</td>

              <td><input type='text' class='inptxt' name='y_min' id="y_min" onkeypress="return hanyaAngka(event)"/></td>

              <td><input type='text' class='inptxt' name='y_max' id="y_max" onkeypress="return hanyaAngka(event)"/></td>

            </tr>

            <tr>

              <td>Produksi (z)</td>

              <td><input type='text' class='inptxt' name='z_min' id="z_min" onkeypress="return hanyaAngka(event)"/></td>

              <td><input type='text' class='inptxt' name='z_max' id="z_max" onkeypress="return hanyaAngka(event)"/></td>

            </tr>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            </tr>

          </table>
 
                        <div class="panel panel-info">
                          <div class="panel-heading">Inputan</div>

                        </div>


          <table class="table">

            <tr>

              <td>Permintaan yang diinginkan (x)</td>

              <td><input type='text' class='inptxt' name='x' id="x" onkeypress="return hanyaAngka(event)"/></td>

            </tr>

            <tr>

              <td>Persediaan di gudang (y)</td>

              <td><input type='text' class='inptxt' name='y' id="y" onkeypress="return hanyaAngka(event)"/></td>

            </tr>
            <tr>
            <td></td>
            <td></td>
            </tr>

          </table>

        </fieldset>

        <input class="btn btn-success" type='submit' name='proses' value='proses' />

        <a  href="http://localhost/programFUZZY/program.php"><button class="btn btn-danger">reset</button></a>

      </form>
      </div>

<script type="text/javascript">
  function validasi() {
    var x_min = document.getElementById("x_min").value;
    var x_max = document.getElementById("x_max").value;
    var y_min = document.getElementById("y_min").value;
    var y_max = document.getElementById("y_max").value;
    var z_min = document.getElementById("z_min").value;
    var z_max = document.getElementById("z_max").value;
    var x = document.getElementById("x").value;
    var y = document.getElementById("y").value;
    if (x_min != "" && x_max!="" && y_min !="" && y_max!="" && z_min!="" && z_max!="" && x!="" && y!="") {
      return true;
    }else{
      alert('Data tidak boleh kosong !!!');
    }
  }
</script>

<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
  </body>

</html>