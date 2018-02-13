<?php
$conn = mysqli_connect("localhost","root","K!ller.21896#","master");

$diamond  = "SELECT * FROM `diamonds` WHERE diamond_shape_id = 2 AND `diamond_size` >= 0.90 LIMIT 50";
$sql = mysqli_query($conn, $diamond);


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DSM | Certified</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-bordered table-striped table-dark">
      <thead class="table-inverse">
        <th>LOT NO #</th>
        <th>LOC</th>
        <th>SHAPE</th>
        <th>CARAT</th>
        <th>LAB</th>
        <th>CERTIFICATE</th>
        <th>CLR</th>
        <th>CLA</th>
        <th>FLR</th>
        <th>FCUT</th>
        <th>POL</th>
        <th>SYM</th>
        <th>INS</th>
        <th>AINS</th>
        <th>MEASUREMENT L*B*H</span></th>
        <th>ORIGINAL RAPNET</th>
        <th>ORGINAL DISCOUNT</th>
        <th>ORIGINAL P/C </th>
        <th>ORIGINAL TOTAL</th>
        <th>REVALUATED DISCOUNT</th>
        <th>REVALUATED P/C</th>
        <th>REVALUATED TOTAL</th>
        <th>FINAL RAPNET</th>
        <th>FINAL DISCOUNT</th>
        <th>FINAL P/C</th>
        <th>FINAL TOTAL</th>
        <th>SELLING DISCOUNT</th>
        <th>SELLING P/C PRICE</th>
        <th>SELLING TOTAL</th>
        <th>STATUS</th>
        <th>CUSTOMER</th>
        <th>FRONT VIEW</th>
        <th>RAPNET VIEW</th>
        <th>PURCHASE DATE (DD/MM/YYYY)</th>
        <th>PARTY</th>
        <th>APPROVAL NO</th>
        <th>APPROVAL DATE</th>
      </thead>
      <tbody>
        <?php while($array =  mysqli_fetch_assoc($sql)){?>
          <?php
              $office_name_query = "SELECT `office_name` from offices WHERE `office_id` = '".$array['office_id']."'";
              $office_name = mysqli_query($conn, $office_name_query);
              $office_array = mysqli_fetch_assoc($office_name);
              $shape_name_query = "SELECT `attribute_name` as `shape` from attributes WHERE `attribute_id` = '".$array['diamond_shape_id']."'";
              $shape_name = mysqli_query($conn, $shape_name_query);
              $shape_array = mysqli_fetch_assoc($shape_name);
              $lab_name_query = "SELECT `attribute_name` as `lab` from attributes WHERE `attribute_id` = '".$array['diamond_lab_id']."'";
              $lab_name = mysqli_query($conn, $lab_name_query);
              $lab_array = mysqli_fetch_assoc($lab_name);
              $clr_name_query = "SELECT `attribute_name` as `clr` from attributes WHERE `attribute_id` = '".$array['diamond_clr_id']."'";
              $clr_name = mysqli_query($conn, $clr_name_query);
              $clr_array = mysqli_fetch_assoc($clr_name);
              $cla_name_query = "SELECT `attribute_name` as `cla` from attributes WHERE `attribute_id` = '".$array['diamond_cla_id']."'";
              $cla_name = mysqli_query($conn, $cla_name_query);
              $cla_array = mysqli_fetch_assoc($cla_name);
              $flr_name_query = "SELECT `attribute_name` as `flr` from attributes WHERE `attribute_id` = '".$array['diamond_flr_id']."'";
              $flr_name = mysqli_query($conn, $flr_name_query);
              $flr_array = mysqli_fetch_assoc($flr_name);
              $fcut_name_query = "SELECT `attribute_name` as `fcut` from attributes WHERE `attribute_id` = '".$array['diamond_fcut_id']."'";
              $fcut_name = mysqli_query($conn, $fcut_name_query);
              $fcut_array = mysqli_fetch_assoc($fcut_name);
              $pol_name_query = "SELECT `attribute_name` as `pol` from attributes WHERE `attribute_id` = '".$array['diamond_pol_id']."'";
              $pol_name = mysqli_query($conn, $pol_name_query);
              $pol_array = mysqli_fetch_assoc($pol_name);
              $sym_name_query = "SELECT `attribute_name` as `sym` from attributes WHERE `attribute_id` = '".$array['diamond_sym_id']."'";
              $sym_name = mysqli_query($conn, $sym_name_query);
              $sym_array = mysqli_fetch_assoc($sym_name);
              $diamond_company_name = "SELECT `company_name` from users WHERE `user_id` = '".$array['diamond_customer_id']."'";
              $company_name = mysqli_query($conn, $diamond_company_name);
              $company_array = mysqli_fetch_assoc($company_name);
           ?>
        <tr>
        <td><?php echo $array['diamond_lot_no'];?></td>
        <td><?=$office_array['office_name']?></td>
        <td><?=$shape_array['shape']?></td>
        <td><?=$array['diamond_size']?></td>
        <td><?=$lab_array['lab']?></td>
        <td><?=$array['diamond_cert']?></td>
        <td><?=$clr_array['clr']?></td>
        <td><?=$cla_array['cla']?></td>
        <td><?=$flr_array['flr']?></td>
        <td><?=$fcut_array['fcut']?></td>
        <td><?=$pol_array['pol']?></td>
        <td><?=$sym_array['sym']?></td>
        <td><?=$array['diamond_ins']?></td>
        <td><?=$array['diamond_ains']?></td>
        <td><?=$array['diamond_meas1']?> X <?=$array['diamond_meas2']?> X <?=$array['diamond_meas3']?></td>
        <td><?="$".round($array['diamond_price_rapnet'],2)?></td>
        <td><?=round($array['diamond_discount'],2). "%" ?></td>
        <td><?="$".round($array['diamond_price_perct'],2)?></td>
        <td><?="$".round($array['diamond_price_total'],2)?></td>
        <td><?=round($array['diamond_discount_revaluated'],2)."%" ?></td>
        <td><?="$".round($array['diamond_price_perct_revaluated'],2)?></td>
        <td><?="$".round($array['diamond_price_total_revaluated'],2)?></td>
        <td><?="$".round($array['diamond_price_rapnet_final'],2)?></td>
        <td><?=round($array['diamond_discount_final'],2)."%" ?></td>
        <td><?="$".round($array['diamond_price_perct_final'],2)?></td>
        <td><?="$".round($array['diamond_price_total_final'],2)?></td>

          <td><?=round($array['diamond_discount_sell'],2)."%" ?></td>
        <td><?="$".round($array['diamond_price_perct_sell'],2)?></td>
      <td><?="$".round($array['diamond_price_sell'],2)?></td>
        <td><?=$array['diamond_status']?></td>
        <td><?=$company_array['company_name']?></td>
        <td><?=$array['diamond_status_front']?></td>
        <td><?=$array['diamond_show_rapnet']?></td>
        <td><?=date('d/m/Y',strtotime($array['diamond_purchase_date'])) ?></td>
        <td><?=$array['diamond_party_name']?></td>
        <td><?=$array['diamond_approval_no']?></td>
        <td></td>
      </tr>
  <?php  }?>
      </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
