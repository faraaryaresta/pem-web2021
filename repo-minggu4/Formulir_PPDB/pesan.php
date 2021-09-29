<html>
	<head>
		<title>Halaman Submit</title>
	</head>
	<body>
		<h1>Hasil Pendaftaran</h1>
	<?php
		if (isset($_GET['fsubmit'])){
			echo"
			<table border=1>
				<tr>
					<td>NISN</td>
					<td>:".$_GET['fnisn']."</td>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td>:".$_GET['fasalsekolah']."</td>
				</tr>
				<tr>
					<td>Tahun Lulus</td>
					<td>:".$_GET['flulus']."</td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:".$_GET['fnama']."</td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>:".$_GET['fnik']."</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:".$_GET['fttlahir']."</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:".$_GET['jenis_kelamin']."</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:".$_GET['fagama']."</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
				</tr>
				<tr>
					<td colspan=4>".$_GET['falamat']."</td>
				</tr>
				<tr>
					<td>Desa/kel</td>
					<td>:".$_GET['fdesa']."</td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td>:".$_GET['fkec']."</td>
				</tr>
				<tr>
					<td>Kabupaten</td>
					<td>:".$_GET['fkab']."</td>
				</tr>
				<tr>
					<td>Provinsi</td>
					<td>:".$_GET['fprov']."</td>
				</tr>
				<tr>
					<td>Email Aktif</td>
					<td>:".$_GET['femail']."</td>
				</tr>
				<br>
				<tr>
					<td>Nomor Kartu Keluarga</td>
					<td>:".$_GET['fnokk']."</td>
				</tr>
				<tr>
					<td>Nama Ayah Kandung</td>
					<td>:".$_GET['fayah']."</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:".$_GET['fagama_ayah']."</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:".$_GET['fkerja_ayah']."</td>
				</tr>
				<tr>
					<td>Nama Ibu Kandung</td>
					<td>:".$_GET['fibu']."</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:".$_GET['fagama_ibu']."</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:".$_GET['fkerja_ibu']."</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
				</tr>
				<tr>
					<td colspan=4>".$_GET['falamat_ortu']."</td>
				</tr>
				<tr>
					<td>Desa/kel</td>
					<td>:".$_GET['fdesa_ortu']."</td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td>:".$_GET['fkec_ortu']."</td>
				</tr>
				<tr>
					<td>Kabupaten</td>
					<td>:".$_GET['fkab_ortu']."</td>
				</tr>
				<tr>
					<td>Provinsi</td>
					<td>:".$_GET['fprov_ortu']."</td>
				</tr>	
			</table>";
			}else{
				echo"<h2>Halaman ini tidak bisa diakses secara langsung</h2>";
			}
	?>
	</body>
</html>