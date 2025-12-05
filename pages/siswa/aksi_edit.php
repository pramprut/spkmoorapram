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