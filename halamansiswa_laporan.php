 <?php 
 include 'koneksi.php'; 
 include 'header2.php';
 ?>

<style >
	.btn{
		margin-top: 10px;
	}
	.panel-heading{
		margin-top: 80px;
	}

	b{
		font-size: 16px;
	}
</style>

	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container text-center">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Aplikasi Pembayaran SPP</a>
        </div>
        <div id="navbar" class="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="Halaman_Siswa.php">HOME</a></li>
                <li><a href="halamansiswa_laporan.php">LAPORAN</a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="panel panel-info col-md-12">
	<div class="panel-heading">
<h3>Laporan Pembayaran</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered table-striped">
		

		<form class="col-md-2" action="laporan_pembayaran.php" method="GET" target="_blank" >
			<td>
			<b>Laporan Pembayaran</b>
		</td>
		<td>
			Mulai Tanggal <input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d') ?>">
			Sampai Tanggal <input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d') ?>">
			<button class="btn btn-success btn-lg" type="submit" name="tampil">Tampilkan</button>
		</td>
		</form>
	</tr>
</table>
</div>
</div>
<?php include 'footer.php' ?>