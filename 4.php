<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program Vending Manchine</title>
    <style type="text/css">
    body{
      background: #F2F2F2;
      font-family: sans-serif;
    }
    .hitung{
        width: 335px;
        background: #2F495A;
        margin: 100px auto;
        padding: 10px 20px 50px 20px;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px #D1D1D1;
    }
    .hit{
      width: 300px;
      margin: 5px;
      border: none;
      font-size: 16pt;
      border-radius: 5px;
      padding: 10px;
    }
    .judul{
      text-align: center;
      color: #eee;
      font-weight: normal;
    }
    .tombol{
      background: #EC5159;
      border-top: none;
      border-right: none;
      border-left: none;
      border-radius: 5px;
      padding: 10px 20px;
      color: #eee;
      border-bottom: 4px solid #BF3D3D;
    }

  </style>
  </head>
  <body>
    <div class="hitung">
    <h1 class="judul">Program Vending Manchine</h1>
    <form method="POST" action="index.php">
      <input type="text" name="uang" class='hit' autocomplete="off" placeholder="Masukkan Total Pembelian"/>
        <center><input type="submit" name="submit" value="Submit" class="tombol"/></center>
    </form>
    </br>
    <?php

    $ua = $_POST['uang'];

    if($ua>=20000&&$ua<50000){
      $diskon=(($ua*50)/100);
      if($diskon>=20000){
        $diskon=20000;
        $diskonp=($ua-$diskon);
        $kembali=($ua-$diskonp);
      }else {
        $diskonp=($ua-$diskon);
        $kembali=($ua-$diskonp);
      }
      echo "<center>Uang yang dibayar : $diskonp </br>";
      echo "Diskon : $diskon </br>";
      echo "Kembalian : $kembali </br> </center>";
    }else if ($ua>=50000) {
      $diskon=(($ua*30)/100);
      if($diskon>=40000){
        $diskon=40000;
        $diskonp=($ua-$diskon);
        $kembali=($ua-$diskonp);
      }else {
        $diskonp=($ua-$diskon);
        $kembali=($ua-$diskonp);
      }
      echo "<center>Uang yang dibayar : $diskonp </br>";
      echo "Diskon : $diskon </br>";
      echo "Kembalian : $kembali </br></center>";
    }
    ?>
  </div>
  </body>
</html>
