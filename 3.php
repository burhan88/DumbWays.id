<html>
<head>
  <meta charset="utf-8">
  <title>Program Bentuk</title>
  <style type="text/css">
  body{
    background: #F2F2F2;
    font-family: sans-serif;
  }
  .bentuk{
      width: 335px;
      background: #C0C0C0;
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
  <center>
  <div class="bentuk">
  <h1 class="judul">Program Bentuk</h1>
<form name="form" action="index.php" method="post">
<label class="hit">Masukkan Nilai : </label><input type="text" name="nilai"/>
<br>
<br>
<input class="tombol" name="submit" type="submit" value="submit" >
</form>

<br>
<br>
<?php
$angka='';
/*—————-tampilan bintang kotak———————–*/
if(isset($_POST['nilai'])){
$nilai=$_POST['nilai'];
for ($i=0; $i<$nilai; $i++ ) {
  $angka++;
for($a=0;$a<$nilai;$a++){
  if ($i==0||$i==$nilai-1||$i==$nilai-$angka) {
    echo "x";
  }else {
    if($a==0||$a==$nilai-1){
      echo "x";
    }else {
        echo "=";
      }
  }
}
echo "</br>";
}
}
?>
</center>
</div>
</body>
</html>
