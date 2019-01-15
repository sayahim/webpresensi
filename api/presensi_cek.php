<?php 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

  $response = array();

   $tanggal=$_POST['tanggal'];
   $id_karyawan=$_POST['id_karyawan']; 
   $jenis=$_POST['jenis']; 

   if ($jenis == 'Berangkat') {

       $stmt= $mysqli->prepare("SELECT id_karyawan, tanggal, jenis_presensi FROM presensi WHERE tanggal= ? AND id_karyawan= ? AND jenis_presensi = ?");

       $stmt->bind_param("sss",$tanggal, $id_karyawan, $jenis);

       $stmt->execute();

       $stmt->store_result();
       
       if($stmt->num_rows > 0) {

           // $response['error'] = false; 
           // $response['message'] = 'Cek successfull';
           $response['error'] = true; 
           $response['message'] = 'Anda Sudah Presensi';


       } else {

           $response['error'] = false; 
           $response['message'] = 'Silahkan Presensi';

       }


   } else {


       $stmt= $mysqli->prepare("SELECT id_karyawan, tanggal, jenis_presensi FROM presensi WHERE tanggal= ? AND id_karyawan= ? AND jenis_presensi = ?");

       $stmt->bind_param("sss",$tanggal, $id_karyawan, $jenis);

       $stmt->execute();

       $stmt->store_result();
       
       if($stmt->num_rows > 0) {

           // $response['error'] = false; 
           // $response['message'] = 'Cek successfull';
           $response['error'] = true; 
           $response['message'] = 'Anda Sudah Presensi';


       } else {

           // $response['error'] = true; 
           // $response['message'] = 'Silahkan Presensi';


             $cek = $mysqli->prepare("SELECT id_karyawan, tanggal, jenis_presensi FROM presensi WHERE tanggal= ? AND id_karyawan= ? AND jenis_presensi ='Berangkat' ");

             $cek->bind_param("ss",$tanggal, $id_karyawan);

             $cek->execute();

             $cek->store_result();
             
             if($cek->num_rows > 0) {

                 // $response['error'] = false; 
                 // $response['message'] = 'Cek successfull';

                 $response['error'] = false; 
                 $response['message'] = 'Silahkan Presensi';


             } else {

                 $response['error'] = true; 
                 $response['message'] = 'Maaf anda tidak bisa presensi';

             }

       }

   }


   echo json_encode($response);
 