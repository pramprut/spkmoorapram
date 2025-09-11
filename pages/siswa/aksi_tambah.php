<?php
// mengambil data koneksi
include "../../lib/koneksi.php";
// mengambil data dari form sebelumnya
$nama 				= $_POST['nama'];
$shooting		 	= $_POST['shooting'];
$dribbling 			= $_POST['dribbling'];
$passing 			= $_POST['passing'];
$ball_control 		= $_POST['ball_control'];
$heading 			= $_POST['heading'];
$positioning 		= $_POST['positioning'];
$ball_position 		= $_POST['ball_position'];
$transition_movement = $_POST['transition_movement'];
$speed 				= $_POST['speed'];
$coordination 		= $_POST['coordination'];
$agility 			= $_POST['agility'];
$confidence 		= $_POST['confidence'];
$concentration 		= $_POST['concentration'];
$fairplay 			= $_POST['fairplay'];
$attitude 			= $_POST['attitude'];

if ($shooting >= 90) {
	$nshooting = 5;
}
elseif ($shooting >= 80 && $shooting <= 89) {
	$nshooting = 4;
}
elseif ($shooting >= 70 && $shooting <= 79) {
	$nshooting = 3;
}
elseif ($shooting >= 60 && $shooting <= 69) {
	$nshooting = 2;
}
elseif ($shooting >= 50) {
	$nshooting = 1;
}


if ($dribbling >= 90) {
	$ndribbling = 5;
}
elseif ($dribbling >= 80 && $dribbling <= 89) {
	$ndribbling = 4;
}
elseif ($dribbling >= 70 && $dribbling <= 79) {
	$ndribbling = 3;
}
elseif ($dribbling >= 60 && $dribbling <= 69) {
	$ndribbling = 2;
}
elseif ($dribbling >= 50) {
	$ndribbling = 1;
}


if ($passing >= 90) {
	$npassing = 5;
}
elseif ($passing >= 80 && $passing <= 89) {
	$npassing = 4;
}
elseif ($passing >= 70 && $passing <= 79) {
	$npassing = 3;
}
elseif ($passing >= 60 && $passing <= 69) {
	$npassing = 2;
}
elseif ($passing >= 50) {
	$npassing = 1;
}


if ($ball_control >= 90) {
	$nball_control = 5;
}
elseif ($ball_control >= 80 && $ball_control <= 89) {
	$nball_control = 4;
}
elseif ($ball_control >= 70 && $ball_control <= 79) {
	$nball_control = 3;
}
elseif ($ball_control >= 60 && $ball_control <= 69) {
	$nball_control = 2;
}
elseif ($ball_control >= 50) {
	$nball_control = 1;
}


if ($heading >= 90) {
	$nheading = 5;
}
elseif ($heading >= 80 && $heading <= 89) {
	$nheading = 4;
}
elseif ($heading >= 70 && $heading <= 79) {
	$nheading = 3;
}
elseif ($heading >= 60 && $heading <= 69) {
	$nheading = 2;
}
elseif ($heading >= 50) {
	$nheading = 1;
}


if ($positioning >= 90) {
	$npositioning = 5;
}
elseif ($positioning >= 80 && $positioning <= 89) {
	$npositioning = 4;
}
elseif ($positioning >= 70 && $positioning <= 79) {
	$npositioning = 3;
}
elseif ($positioning >= 60 && $positioning <= 69) {
	$npositioning = 2;
}
elseif ($positioning >= 50) {
	$npositioning = 1;
}


if ($ball_position >= 90) {
	$nball_position = 5;
}
elseif ($ball_position >= 80 && $ball_position <= 89) {
	$nball_position = 4;
}
elseif ($ball_position >= 70 && $ball_position <= 79) {
	$nball_position = 3;
}
elseif ($ball_position >= 60 && $ball_position <= 69) {
	$nball_position = 2;
}
elseif ($ball_position >= 50) {
	$nball_position = 1;
}


if ($transition_movement >= 90) {
	$ntransition_movement = 5;
}
elseif ($transition_movement >= 80 && $transition_movement <= 89) {
	$ntransition_movement = 4;
}
elseif ($transition_movement >= 70 && $transition_movement <= 79) {
	$ntransition_movement = 3;
}
elseif ($transition_movement >= 60 && $transition_movement <= 69) {
	$ntransition_movement = 2;
}
elseif ($transition_movement >= 50) {
	$ntransition_movement = 1;
}


if ($speed >= 90) {
	$nspeed = 5;
}
elseif ($speed >= 80 && $speed <= 89) {
	$nspeed = 4;
}
elseif ($speed >= 70 && $speed <= 79) {
	$nspeed = 3;
}
elseif ($speed >= 60 && $speed <= 69) {
	$nspeed = 2;
}
elseif ($speed >= 50) {
	$nspeed = 1;
}


if ($coordination >= 90) {
	$ncoordination = 5;
}
elseif ($coordination >= 80 && $coordination <= 89) {
	$ncoordination = 4;
}
elseif ($coordination >= 70 && $coordination <= 79) {
	$ncoordination = 3;
}
elseif ($coordination >= 60 && $coordination <= 69) {
	$ncoordination = 2;
}
elseif ($coordination >= 50) {
	$ncoordination = 1;
}


if ($agility >= 90) {
	$nagility = 5;
}
elseif ($agility >= 80 && $agility <= 89) {
	$nagility = 4;
}
elseif ($agility >= 70 && $agility <= 79) {
	$nagility = 3;
}
elseif ($agility >= 60 && $agility <= 69) {
	$nagility = 2;
}
elseif ($agility >= 50) {
	$nagility = 1;
}


if ($confidence >= 90) {
	$nconfidence = 5;
}
elseif ($confidence >= 80 && $confidence <= 89) {
	$nconfidence = 4;
}
elseif ($confidence >= 70 && $confidence <= 79) {
	$nconfidence = 3;
}
elseif ($confidence >= 60 && $confidence <= 69) {
	$nconfidence = 2;
}
elseif ($confidence >= 50) {
	$nconfidence = 1;
}


if ($concentration >= 90) {
	$nconcentration = 5;
}
elseif ($concentration >= 80 && $concentration <= 89) {
	$nconcentration = 4;
}
elseif ($concentration >= 70 && $concentration <= 79) {
	$nconcentration = 3;
}
elseif ($concentration >= 60 && $concentration <= 69) {
	$nconcentration = 2;
}
elseif ($concentration >= 50) {
	$nconcentration = 1;
}


if ($fairplay >= 90) {
	$nfairplay = 5;
}
elseif ($fairplay >= 80 && $fairplay <= 89) {
	$nfairplay = 4;
}
elseif ($fairplay >= 70 && $fairplay <= 79) {
	$nfairplay = 3;
}
elseif ($fairplay >= 60 && $fairplay <= 69) {
	$nfairplay = 2;
}
elseif ($fairplay >= 50) {
	$nfairplay = 1;
}


if ($attitude >= 90) {
	$nattitude = 5;
}
elseif ($attitude >= 80 && $attitude <= 89) {
	$nattitude = 4;
}
elseif ($attitude >= 70 && $attitude <= 79) {
	$nattitude = 3;
}
elseif ($attitude >= 60 && $attitude <= 69) {
	$nattitude = 2;
}
elseif ($attitude >= 50) {
	$nattitude = 1;
}



// sql
$sql = "INSERT INTO tabel_siswa (nama, shooting, dribbling, passing, ball_control,heading,positioning,ball_position,transition_movement,speed,coordination,agility,confidence,concentration,fairplay,attitude)
VALUES ('$nama', '$shooting', '$dribbling','$passing','$ball_control','$heading','$positioning','$ball_position','$transition_movement','$speed','$coordination','$agility','$confidence','$concentration','$fairplay','$attitude')";

if ($koneksi->query($sql) === TRUE) {
	//mengambil id siswa terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_siswa FROM tabel_siswa ORDER BY id_siswa DESC limit 1";
          $resultIdakhir = mysqli_query($koneksi, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_siswa = $hasil['id_siswa'];
              	
              	//insert data to table nilai.
              	$sshooting = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('1', '$id_siswa', '$nshooting')";
				$koneksi->query($sshooting);

				$sdribbling = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('2', '$id_siswa', '$ndribbling')";
				$koneksi->query($sdribbling);

				$spassing = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('3', '$id_siswa', '$npassing')";
				$koneksi->query($spassing);

				$sball_control = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('4', '$id_siswa', '$nball_control')";
				$koneksi->query($sball_control);

				$sheading = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('5', '$id_siswa', '$nheading')";
				$koneksi->query($sheading);

				$spositioning = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('6', '$id_siswa', '$npositioning')";
				$koneksi->query($spositioning);

				$sball_position = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('7', '$id_siswa', '$nball_position')";
				$koneksi->query($sball_position);

				$stransition_movement = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('8', '$id_siswa', '$ntransition_movement')";
				$koneksi->query($stransition_movement);

				$sspeed = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('9', '$id_siswa', '$nspeed')";
				$koneksi->query($sspeed);

				$scoordination = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('10', '$id_siswa', '$ncoordination')";
				$koneksi->query($scoordination);

				$sagility = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('11', '$id_siswa', '$nagility')";
				$koneksi->query($sagility);

				$sconfidence = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('12', '$id_siswa', '$nconfidence')";
				$koneksi->query($sconfidence);

				$sconcentration = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('13', '$id_siswa', '$nconcentration')";
				$koneksi->query($sconcentration);

				$sfairplay = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('14', '$id_siswa', '$nfairplay')";
				$koneksi->query($sfairplay);

				$sattitude = "INSERT INTO tabel_nilai (id_kriteria, id_siswa, nilai)
						VALUES ('15', '$id_siswa', '$nattitude')";
				$koneksi->query($sattitude);



				echo "<script>alert('INPUT DATA BERHASIL');window.location = '../../content.php?module=list_siswa';</script>";
}

// eksekusi sql

// if ($koneksi->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $koneksi->error;
// }

?>