<?php
	$timezone = time() + (60*60*7);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tagihan Agensi</title>
</head>
<body>
	
	<style type="text/css">
		body{
			font-family: sans-serif;
			text-align: center;
		}
		p{
			color: green;
		}
	</style>

	<h2> Progress Pembayaran Agensi <br> Bulan <font color="red"> <?php echo date("F Y", strtotime("-1 month")); ?> </font> <br> Tanggal : <font color="red"> <?php echo gmdate("d M Y H:i",$timezone); ?> </font> </h2>

	<br>
	<br>
	<table border="1" align="center" width="500">
		<tr>
			<th>No</th>
			<th>ND</th>
			<th>Status</th>
			<th>ID Partner</th>
			<th>Agency</th>
			<th>WITEL</th>
			<th>Nama</th>
			<th>Jml_bln</th>
			<th>Bln Akhir</th>
			<th>Bln Awal</th>
			<th>Last Bulan Dibyr</th>
			<th>Tgl Last Dibyr</th>
			<th>Status Lunas</th>
			<th>Status Sama</th>
			<th>Jumlah Tgk</th>
			<th>Rp Tgk</th>
			<th>Jumlah Lunas</th>
			<th>Rp Lunas</th>
			<th>Rp tag akhir</th>
			<th>Rp tag awal</th>
			<th>Mata Uang</th>
		</tr>
		<?php
			include "aksi.php";
			
			$no = 1;
			$mahasiswa = query("SELECT * from mahasiswa");
			
			//CEK: tabel nya ada atau sesuai ngga
			// if ( !$tampil) {
			// 	echo mysqli_error($koneksi);
			// }

			foreach ($mahasiswa as $data) :
			
			//DISPLAY
			//Kalo mau nampilin rownya aja tinggal---> $data[kolom yang mana]

		?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data['nd']?></td>
				<td><?=$data['status']?></td>
				<td><?=$data['id_partner']?></td>
				<td><?=$data['agency']?></td>
				<td><?=$data['witel']?></td>
				<td><?=$data['nama']?></td>
				<td><?=$data['jumlah_bulan']?></td>
				<td><?=$data['bulan_akhir']?></td>
				<td><?=$data['bulan_awal']?></td>
				<td><?=$data['last_bulan_dibayar']?></td>
				<td><?=$data['tanggal_last_bayar']?></td>
				<td><?=$data['status_lunas']?></td>
				<td><?=$data['status_sama']?></td>
				<td><?=$data['jumlah_tgk']?></td>
				<td><?=$data['rp_tgk']?></td>
				<td><?=$data['jumlah_lunas']?></td>
				<td><?=$data['rp_lunas']?></td>
				<td><?=$data['rp_tagihan_akhir']?></td>
				<td><?=$data['rp_tagihan_awal']?></td>
				<td><?=$data['mata_uang']?></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>