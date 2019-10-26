<?php
session_start();
$conn = new mysqli("localhost", "root", "", "perpustakaan");
?>
<!DOCTYPE html>
<html>
<head>
<title>Perpustakaan</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
</head>
<body>

	 <div class="header-bottom">
				<div class="logo">
					<h1><a href="index.php">Perpustakaan</a></h1>
				</div>
			 <!---->
			 <div class="container">
            <ul class="memenu skyblue ">
                <li><a href="Admin/index.php">Tambah Data</a></li>
            </ul>
            </div>

			 <!---->
</div>
<!---->
<script src="js/bootstrap.js"> </script>

<div class="items">
	 <div class="container">
		 <div class="items-sec">
			 <?php $ambil = $conn->query("SELECT * FROM books");?>
                    <?php while($buku = $ambil->fetch_assoc()){?>
                      <center>
                    <div class="col-md-6 feature-grid">
                        <center><img style="width:250px; height:200px;" src="foto_buku/<?php echo $buku['image']; ?>" ></center>
                        <div class="arrival-info">
                        	<form method="post" action="pinjam.php?id=<?php echo $buku['id']; ?>">
	                            <center><h4><?php echo $buku['name']; ?></h4></center>
	                            <center><p>Jumlah Stok Buku <?php echo number_format($buku['stok']); ?></p></center>
                              <center>
	                            	<button type="submit" class="btn btn-success">Pinjam</button>
                                <button type="submit" class="btn btn-warning">Kembalikan</button>
	                            </center>
                            </form>
			
                        </div>
                    </div>
                    </center>
                    <?php } ?>

			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>
