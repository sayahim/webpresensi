<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

  $id_presensi = $_POST['id_presensi']; 
  $id_karyawan = $_POST['id_karyawan'];
  $berangkat = $_POST['berangkat']; 
  $pulang = $_POST['pulang']; 
  $lokasi = $_POST['lokasi']; 
  $latitude = $_POST['latitude']; 
  $longtitude = $_POST['longtitude']; 
  $jenis_presensi = $_POST['jenis_presensi']; 

    $save = $mysqli->prepare("UPDATE presensi SET
    id_karyawan = '$id_karyawan',
    berangkat = '$berangkat', 
    pulang = '$pulang', 
    lokasi = '$lokasi',  
    latitude = '$latitude', 
    longtitude = '$longtitude', 
    jenis_presensi = '$jenis_presensi' 
    where id_presensi = '$id_presensi'");
 

      if ($save->execute()) {
          
          $response['error'] = false; 
          $response['message'] = 'Successfully'; 
          $response['id'] = $id_karyawan; 

      } else {

          $response['error'] = true; 
          $response['message'] = 'Gagal'; 
          $response['id'] = $id_karyawan; 

      }

  echo json_encode($response);
