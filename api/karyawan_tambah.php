<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

  $id_karyawan = KodeOtomatis($mysqli,"karyawan","id_karyawan","11", "5", "6");

  $nama = $_POST['nama'];
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $no_tlpn = $_POST['no_tlpn']; 
  $jenis_kelamin = $_POST['jenis_kelamin']; 
  $tempat_tgl_lahir = $_POST['tempat_tgl_lahir']; 
  $alamat = $_POST['alamat']; 

   if ($save->execute()) {
          
          $response['error'] = false; 
          $response['message'] = 'Successfully'; 
          $response['id'] = $id_karyawan; 

    } else {

        $response['error'] = true; 
        $response['message'] = 'Gagal'; 
        $response['id'] = $id_karyawan; 

    }

  $stmt = $mysqli->prepare("SELECT id_karyawan FROM karyawan WHERE username = ?");

  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if($stmt->num_rows > 0){

    $response['error'] = true;
    $response['message'] = 'Username Sudah Digunakan';
    $stmt->close();

  } else {

  $nama = $_POST['nama'];
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $no_tlpn = $_POST['no_tlpn']; 
  $jenis_kelamin = $_POST['jenis_kelamin']; 
  $tempat_tgl_lahir = $_POST['tempat_tgl_lahir']; 
  $alamat = $_POST['alamat']; 

    $save = "INSERT INTO karyawan (id_karyawan, nama, username, password, no_tlpn, jenis_kelamin, tempat_tgl_lahir, alamat) VALUES ('$id_karyawan', '$nama', '$username', '$password', '$no_tlpn', '$jenis_kelamin', '$tempat_tgl_lahir', '$alamat')";

      if ($mysqli->query($save)) {
          
          $response['error'] = false; 
          $response['message'] = 'Karyawan registered successfully'; 
          $response['id'] = $id_kasir; 

      } else {

      $response['error'] = true; 
      $response['message'] = 'Gagal'; 

      }


  }

  echo json_encode($response);
