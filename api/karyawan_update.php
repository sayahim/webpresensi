<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

  $id_karyawan = $_POST['id'];
  $nama = $_POST['nama'];
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $no_tlpn = $_POST['no_tlpn']; 
  $jenis_kelamin = $_POST['jenis_kelamin']; 
  $tempat_tgl_lahir = $_POST['ttl']; 
  $alamat = $_POST['alamat']; 

    $save = $mysqli->prepare("UPDATE karyawan SET
    nama = '$nama',
    username = '$username', 
    password = '$password', 
    no_tlpn = '$no_tlpn',  
    jenis_kelamin = '$jenis_kelamin', 
    tempat_tgl_lahir = '$tempat_tgl_lahir', 
    alamat = '$alamat' 
    where id_karyawan = '$id_karyawan'");
 
 
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
