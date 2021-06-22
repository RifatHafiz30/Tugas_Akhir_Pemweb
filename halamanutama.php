<?php include 'header.php'; ?>
	<div class="container">
		<div class="panel-body">
	<h2>SELAMAT DATANG DI HALAMAN UTAMA WEB SPP</h2>
	<H5>SMA SUMBER BAHAGIA</H5>
 
 <?php
include 'koneksi.php';
$label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

for($bulan = 1;$bulan < 13;$bulan++)
{
	$query = mysqli_query($konek,"select count(idsiswa) as idsiswa from spp where MONTH(tglbayar)='$bulan'");
	$row = $query->fetch_array();
	$jumlah_produk[] = $row['idsiswa'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/Chart.js"></script>
	<style type="text/css">
		
		/*body{
			background: url() no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
 			 background-size: cover;
		}

		body::after {
  			background: url;
  			content: "";
  			opacity: 0.9;
  			position: absolute;
  			top: 0;
  			bottom: 0;
  			right: 0;
  			left: 0;
  			z-index: -1;   
		}
	</style>
</head>
<body>
	<center>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
	</center>

	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($label); ?>,
				datasets: [{
					label: 'Grafik Pembayaran SPP',
					data: <?php echo json_encode($jumlah_produk); ?>,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>