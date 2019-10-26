<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program Generate Serial Number</title>
  </head>
  <body>
    <center>
    <h2>Program Generate Serial Number</h2>
    <?php
    $pjg = 4;
    $jml = 4;
    $SN = '';
    $charset = "48C93F6H1JKLMN0P";
    for($i=0; $i<$jml; $i++)
    {
    $rand = '';
    for ($j=0; $j<mt_rand($pjg, $pjg); $j++)
    {
    $rand .= $charset[(mt_rand(0,(strlen($charset)-1)))];
    }
    $SN .= $rand;
    if($i<($jml-1)) $SN .= "-";
    }
    echo "Serial Number Anda : ".$SN;
    ?>
  </center>
  </body>
</html>
