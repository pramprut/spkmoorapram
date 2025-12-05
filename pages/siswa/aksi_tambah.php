<?php
// mengambil data koneksi
include "../../lib/koneksi.php";
// mengambil data dari form sebelumnya
$nama 				= $_POST['nama'];
$disiplin		 	= $_POST['disiplin'];
$kerjasamatim 		= $_POST['kerjasamatim'];
$sikapprofesional 	= $_POST['sikapprofesional'];
$kreatifitas 		= $_POST['kreatifitas'];
$kinerja 			= $_POST['kinerja'];

if ($disiplin >= 91) {
	$ndisiplin = 5;
}
elseif ($disiplin >= 76 && $disiplin <= 90) {
	$ndisiplin = 4;
}
elseif ($disiplin >= 61 && $disiplin <= 75) {
	$ndisiplin = 3;
}
elseif ($disiplin >= 51 && $disiplin <= 60) {
	$ndisiplin = 2;
}
elseif ($disiplin >= 50) {
	$ndisiplin = 1;
}


if ($kerjasamatim >= 91) {
	$nkerjasamatim = 5;
}
elseif ($kerjasamatim >= 76 && $kerjasamatim <= 90) {
	$nkerjasamatim = 4;
}
elseif ($kerjasamatim >= 61 && $kerjasamatim <= 75) {
	$nkerjasamatim = 3;
}
elseif ($kerjasamatim >= 51 && $kerjasamatim <= 60) {
	$nkerjasamatim = 2;
}
elseif ($kerjasamatim >= 50) {
	$nkerjasamatim = 1;
}


if ($sikapprofesional >= 91) {
	$nsikapprofesional = 5;
}
elseif ($sikapprofesional >= 76 && $sikapprofesional <= 90) {
	$nsikapprofesional = 4;
}
elseif ($sikapprofesional >= 61 && $sikapprofesional <= 75) {
	$nsikapprofesional = 3;
}
elseif ($sikapprofesional >= 51 && $sikapprofesional <= 60) {
	$nsikapprofesional = 2;
}
elseif ($sikapprofesional >= 50) {
	$nsikapprofesional = 1;
}


if ($kreatifitas >= 91) {
	$nkreatifitas = 5;
}
elseif ($kreatifitas >= 76 && $kreatifitas <= 90) {
	$nkreatifitas = 4;
}
elseif ($kreatifitas >= 61 && $kreatifitas <= 75) {
	$nkreatifitas = 3;
}
elseif ($kreatifitas >= 51 && $kreatifitas <= 60) {
	$nkreatifitas = 2;
}
elseif ($kreatifitas >= 50) {
	$nkreatifitas = 1;
}


if ($kinerja >= 91) {
	$nkinerja = 5;
}
elseif ($kinerja >= 76 && $kinerja <= 90) {
	$nkinerja = 4;
}
elseif ($kinerja >= 61 && $kinerja <= 75) {
	$nkinerja = 3;
}
elseif ($kinerja >= 51 && $kinerja <= 60) {
	$nkinerja = 2;
}
elseif ($kinerja >= 50) {
	$nkinerja = 1;
}

// sql
$sql = "INSERT INTO tabel_siswa (nama, disiplin, kerjasamatim, sikapprofesional, kreatifitas, kinerja)
VALUES ('$nama', '$disiplin', '$kerjasamatim','$sikapprofesional','$kreatifitas','$kinerja')";

if ($koneksi->query($sql) === TRUE) {
	//mengambil id karyawan terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_siswa FROM tabel_siswa ORDER BY id_siswa DESC limit 1";
          $resultIdakhir = mysqli_query($koneksi, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_siswa = $hasil['id_siswa'];
              	
              	//insert data to table nilai.
              	$sdisiplin = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('1', '$id_siswa', '$ndisiplin')";
				$koneksi->query($sdisiplin);

				$skerjasamatim = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('2', '$id_siswa', '$nkerjasamatim')";
				$koneksi->query($skerjasamatim);

				$ssikapprofesional = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('3', '$id_siswa', '$nsikapprofesional')";
				$koneksi->query($ssikapprofesional);

				$skreatifitas = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('4', '$id_siswa', '$nkreatifitas')";
				$koneksi->query($skreatifitas);

				$skinerja = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('5', '$id_siswa', '$nkinerja')";
				$koneksi->query($skinerja);

				echo "<script>alert('INPUT DATA BERHASIL');window.location = '../../content.php?module=list_siswa';</script>";
}

?>