<?php require_once '../setting/koneksi.php';

  // $query="SELECT * from jadwal";
  $query="SELECT * FROM karyawan";
  
 $result=$mysqli->query($query);
  $num_result=$result->num_rows;
  $arr=array();
  if ($num_result > 0 ) { 
      while ($hasil=mysqli_fetch_assoc($result)) {
      // extract($data);
      $arr['karyawan'][] = $hasil;
      //print_r($arr);
   }
} 

echo json_encode($arr);

