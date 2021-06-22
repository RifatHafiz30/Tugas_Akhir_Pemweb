<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pembayaran.xls");
include 'koneksi.php';
?>
	<h3>SMA Sumber Bahagia <b><br/>LAPORAN PEMBAYARAN SPP</b></h3>
	<p>Tanggal <?= $_GET['tgl1']." -- ".$_GET['tgl2']; ?>
	<br/>
	<br>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>ID</th>
		<th>NIS</th>
		<th>NAMA SISWA</th>
		<th>KELAS</th>
		<th>NO. BAYAR</th>
		<th>PEMBAYARAN BULAN</th>
		<th>JUMLAH</th>
		<th>KETERANGAN</th>
	</tr>
	<?php 
	$spp = $konek -> query("SELECT spp.*,siswa.nis,siswa.namasiswa,siswa.kelas
							FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa
							WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
							ORDER BY nobayar ASC");
	$i=1;
	$total = 0;
	while($dta=mysqli_fetch_array($spp)) {
	echo "<tr>
		<td align='center'>$i</td>
		<td align='center'>$dta[idsiswa]</td>
		<td align='center'>$dta[nis]</td>
		<td>$dta[namasiswa]</td>
		<td>$dta[kelas]</td>
		<td>$dta[nobayar]</td>
		<td>$dta[bulan]</td>
		<td align='right'>$dta[jumlah]</td>
		<td>$dta[ket]</td>
		</tr>";
		$i++;
		$total += $dta['jumlah']; 
	}
	?>
	<tr>
		<td colspan="7" align="right">TOTAL</td>
		<td align="right"><b><?php echo $total; ?></b></td>
		<td></td>
	</tr>
	</table>