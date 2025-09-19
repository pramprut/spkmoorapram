<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$shooting = $_POST['disiplin'];
$dribbling = $_POST['kerjasamatim'];
$passing = $_POST['sikapprofesional'];
$ball_control = $_POST['kreatifitas'];
$heading = $_POST['kinerja'];

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



	// insert data to table nilai.
    $sshooting ="UPDATE tabel_nilai SET nilai = '$ndisiplin' WHERE id_kriteria='1' AND id_siswa = '$id_siswa'; ";
    $koneksi->query($sdisiplin);

    $sdribbling ="UPDATE tabel_nilai SET nilai = '$nkerjasamatim' WHERE id_kriteria='2' AND id_siswa = '$id_siswa'; ";
    $koneksi->query($skerjasamatim);

    $spassing ="UPDATE tabel_nilai SET nilai = '$nsikapprofesional' WHERE id_kriteria='3' AND id_siswa = '$id_siswa'; ";
    $koneksi->query($ssikapprofesional);

    $sball_control ="UPDATE tabel_nilai SET nilai = '$nkreatifitas' WHERE id_kriteria='4' AND id_siswa = '$id_siswa'; ";
    $koneksi->query($skreatifitas);

    $sheading ="UPDATE tabel_nilai SET nilai = '$nkinerja' WHERE id_kriteria='5' AND id_siswa = '$id_siswa'; ";
    $koneksi->query($skinerja);
    
    
    $sqlSiswa = "UPDATE tabel_siswa SET nama= '$nama', disiplin='$disiplin',kerjasamatim='$kerjasamatim',sikapprofesional='$sikapprofesional',kreatifitas='$kreatifitas',
                kinerja='$kinerja' ";
    $koneksi->query($sqlSiswa);

    
				

    echo "<script>alert('Input berhasil');window.location = '../../content.php?module=list_siswa';</script>";

?>