<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

  $id_presensi= KodeOtomatis($mysqli,"presensi","id_presensi","33", "5", "6");

  // $id_kasir = $_POST['id_kasir'];
  $id_karyawan = $_POST['id_karyawan'];
  $waktu = $_POST['waktu']; 
  $tanggal = $_POST['tanggal']; 
  $lokasi = $_POST['lokasi']; 
  $latitude = $_POST['latitude']; 
  $longtitude = $_POST['longtitude']; 
  $jenis_presensi = $_POST['jenis_presensi']; 
 

  $save = "INSERT INTO presensi (id_presensi, id_karyawan, waktu, tanggal, lokasi, latitude, longtitude, jenis_presensi) VALUES ('$id_presensi', '$id_karyawan', '$waktu', '$tanggal', '$lokasi', '$latitude', '$longtitude', '$jenis_presensi')";

  if ($mysqli->query($save)) {
          
      $response['error'] = false; 
      $response['message'] = 'Presensi successfully'; 
      $response['id'] = $id_presensi; 
  
  } else {

      $response['error'] = true; 
      $response['message'] = 'Presensi gagal'; 

  }

  echo json_encode($response);
