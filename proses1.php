<?php
$x_min = $_POST["x_min"];
$x_max = $_POST["x_max"];
$y_max = $_POST["y_max"];
$y_min = $_POST["y_min"];
$z_max = $_POST["z_max"];
$z_min = $_POST["z_min"];
$x = $_POST["x"];
$y = $_POST["y"];

if(isset($_POST["x_min"]) AND isset($_POST["x_max"]) AND isset($_POST["y_max"]) AND isset($_POST["y_min"]) AND isset($_POST["z_max"]) AND isset($_POST["z_min"]) AND isset($_POST["x"]) AND isset($_POST["y"])){
//if($x_min>0 and $x_max>0 and $y_max>0 and $y_min>0 and $z_max>0 and $z_min>0 and $x>0 and $y >0){
?>

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



<?php

}
else
{
  header("Location: program.php");
}
?>  
