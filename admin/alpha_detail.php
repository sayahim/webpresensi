<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayDataJoin($mysqli,"alpha", "karyawan on alpha.id_karyawan= karyawan.id_karyawan", "id_alpha='$kode'"));
    // $a = "Edit Data";

 //    echo $kode;

	// $query="SELECT * from alpha join karyawan on alpha.id_karyawan= karyawan.id_karyawan WHERE id_alpha = '$kode'";
	// $result=$mysqli->query($query);
	// $num_result=$result->num_rows;
	// if ($num_result > 0 ) { 
	//     while ($data=mysqli_fetch_assoc($result)) {
	//     extract($data);
  
}

?>
	<div class="box">

	  <div class="box-body">
	    <form class="form-horizontal" action="dosen_proses.php" method="post" enctype="multipart/form-data">

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Kode Presensi</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $id_alpha ?></td>
	        </div>
	      </div>


		  <div class="form-group">
	        <label class="col-sm-3 control-label">Nama Karyawan</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $nama ?></td>
	        </div>
	      </div>

		<div class="form-group">
	        <label class="col-sm-3 control-label">Tanggal</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $tanggal ?></td>
	        </div>
	      </div>

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Nomor Telephone</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $no_tlpn ?></td>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Jenis Kelamin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $jenis_kelamin ?></td>
	        </div>
	      </div>

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Alamat</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $alamat ?></td>
	        </div>
	      </div>


  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Status</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $status ?></td>
	        </div>
	      </div>

	      <div class="form-group">
	        <label class="col-sm-3 control-label"> </label>
	        <div class="col-sm-4">
		        <div class="pull-left">
		        	<a href="?hal=alpha" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
		        </div>
<!-- 		        <div class="text-right">
		           <input type="submit" name="<?php echo  isset($_GET['id_presensi']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
		        </div> -->
	        </div>
	      </div>


	    </form>
	  </div><!-- /.box-body -->
	</div><!-- /.box -->

		