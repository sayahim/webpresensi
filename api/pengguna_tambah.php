<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

  $id_pengguna= KodeOtomatis($mysqli,"pengguna","id_pengguna","22", "5", "6");

  $nama = $_POST['nama']; 
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $level = $_POST['level']; 

  $stmt = $mysqli->prepare("SELECT id_pengguna FROM pengguna WHERE username = ?");

  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if($stmt->num_rows > 0){

    $response['error'] = true;
    $response['message'] = 'Username Sudah Digunakan';
    $stmt->close();

  } else {

    $save = "INSERT INTO pengguna (id_pengguna, nama, username, password, level) VALUES ('$id_pengguna', '$nama', '$username', '$password', '$level')";

      if ($mysqli->query($save)) {
          
          $response['error'] = false; 
          $response['message'] = 'Pengguna registered successfully'; 
          $response['id'] = $id_pengguna; 

      } else {

      $response['error'] = true; 
      $response['message'] = 'Gagal'; 

      }

  }

  echo json_encode($response);
