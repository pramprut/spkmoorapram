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

if ($disiplin >= 90) {
	$ndisiplin = 5;
}
elseif ($disiplin >= 80 && $disiplin <= 89) {
	$ndisiplin = 4;
}
elseif ($disiplin >= 70 && $disiplin <= 79) {
	$ndisiplin = 3;
}
elseif ($disiplin >= 60 && $disiplin <= 69) {
	$ndisiplin = 2;
}
elseif ($disiplin >= 50) {
	$ndisiplin = 1;
}


if ($kerjasamatim >= 90) {
	$nkerjasamatim = 5;
}
elseif ($kerjasamatim >= 80 && $kerjasamatim <= 89) {
	$nkerjasamatim = 4;
}
elseif ($kerjasamatim >= 70 && $kerjasamatim <= 79) {
	$nkerjasamatim = 3;
}
elseif ($kerjasamatim >= 60 && $kerjasamatim <= 69) {
	$nkerjasamatim = 2;
}
elseif ($kerjasamatim >= 50) {
	$nkerjasamatim = 1;
}


if ($sikapprofesional >= 90) {
	$nsikapprofesional = 5;
}
elseif ($sikapprofesional >= 80 && $sikapprofesional <= 89) {
	$nsikapprofesional = 4;
}
elseif ($sikapprofesional >= 70 && $sikapprofesional <= 79) {
	$nsikapprofesional = 3;
}
elseif ($sikapprofesional >= 60 && $sikapprofesional <= 69) {
	$nsikapprofesional = 2;
}
elseif ($sikapprofesional >= 50) {
	$nsikapprofesional = 1;
}


if ($kreatifitas >= 90) {
	$nkreatifitas = 5;
}
elseif ($kreatifitas >= 80 && $kreatifitas <= 89) {
	$nkreatifitas = 4;
}
elseif ($kreatifitas >= 70 && $kreatifitas <= 79) {
	$nkreatifitas = 3;
}
elseif ($kreatifitas >= 60 && $kreatifitas <= 69) {
	$nkreatifitas = 2;
}
elseif ($kreatifitas >= 50) {
	$nkreatifitas = 1;
}


if ($kinerja >= 90) {
	$nkinerja = 5;
}
elseif ($kinerja >= 80 && $kinerja <= 89) {
	$nkinerja = 4;
}
elseif ($kinerja >= 70 && $kinerja <= 79) {
	$nkinerja = 3;
}
elseif ($kinerja >= 60 && $kinerja <= 69) {
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