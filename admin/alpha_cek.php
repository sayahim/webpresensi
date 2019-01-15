<?php

	date_default_timezone_set('Asia/Jakarta');

	$hour = date('h');
	$date = date('d-m-y');

	if ($hour > 08) {

       // get data karyawan;

	  $query="SELECT * FROM karyawan";

	  $result=$mysqli->query($query);
	  $num_result=$result->num_rows;
	  $arr=array();
	  if ($num_result > 0 ) { 
	      while ($hasil=mysqli_fetch_assoc($result)) {

	      $arr['karyawan'][] = $hasil;

		   }
	  } 

	foreach ($arr['karyawan'] as $value) {

		$id_karyawan = $value['id_karyawan'];

		$izin = "SELECT * from izin where tgl_mulai = '$date' ";

		if (CekExist($mysqli,$izin) == true){

			// echo "  Izin True, ";

		} else {

			// echo "  Izin False, ";

			// foreach ($arr['karyawan'] as $data) {

			// $tgl_presensi = $data['tanggal'];

			$presensi = "SELECT * from presensi where tanggal = '$date' AND id_karyawan = $id_karyawan ";

			if (CekExist($mysqli,$izin) == true){

				// echo "  Presensi True, ";

			} else {

				// echo "  Presensi Alpha, ";

				$cekalpha = "SELECT * from alpha where tanggal = '$date' AND id_karyawan = $id_karyawan ";


				if (CekExist($mysqli,$cekalpha) == true){

					// echo "  Alpha True, ";

				} else {

					// echo "  Alpha False, ";

					$id_alpha = KodeOtomatis($mysqli,"alpha","id_alpha","55","5","6");

					$alpha = "INSERT INTO alpha (id_alpha, id_karyawan, tanggal, status) VALUES ('$id_alpha','$id_karyawan', '$date', 'Alpha') ";

					if($mysqli->query($alpha)) {

			          // $response['error'] = false; 
			          // $response['message'] = 'Successfully'; 
			          // $response['id'] = $id_alpha; 

			          }

			    }

			}

		}

	}

	  // echo json_encode($response);

	  echo "<script>alert('Berhasil cek data alpha')</script>";
	  echo "<script>window.location='index.php?hal=alpha_today';</script>";


     } else {

       	echo "<script>alert('Belum waktunya mengakhiri presensi')</script>";
		echo "<script>window.location='index.php?hal=alpha';</script>";

     }
     
?>