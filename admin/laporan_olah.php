<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($mysqli,"presensi","id_presensi='$kode'"));
    $a = "Edit Data";

}else{
    // $NIM=KodeOtomatis($mysqli,"mahasiswa","NIM","P","1","2");
    $id_presensi="";
    $id_karyawan="";
    $waktu="";
    $lokasi="";
    $latitude="";
    $longtitude="";
    $jenis_presensi="";
    

    $a = "Tambah Data";
}
?>
	<div class="box">
	  <div class="box-header with-border">
	    <h3 class="box-title"><b><?php echo $a; ?></b></h3>
	  </div><!-- /.box-header -->
	  <div class="box-body">
	    <form class="form-horizontal" action="dosen_proses.php" method="post" enctype="multipart/form-data">


  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Kode Presensi</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $id_presensi ?></td>
	        </div>
	      </div>


		  <div class="form-group">
	        <label class="col-sm-3 control-label">ID Karyawan</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $id_karyawan ?></td>
	        </div>
	      </div>


  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Waktu presensi</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $waktu ?></td>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Lokasi</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $lokasi ?></td>
	        </div>
	      </div>

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Latitude</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $latitude ?></td>
	        </div>
	      </div>


  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Longtitude</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $longtitude ?></td>
	        </div>
	      </div>

   		  <div class="form-group">
	        <label class="col-sm-3 control-label">Jenis Presensi</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $jenis_presensi ?></td>
	        </div>
	      </div>

	      <div class="form-group">
	        <label class="col-sm-3 control-label"> </label>
	        <div class="col-sm-4">
		        <div class="pull-left">
		        	<a href="?hal=laporan" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
		        </div>
<!-- 		        <div class="text-right">
		           <input type="submit" name="<?php echo  isset($_GET['id_presensi']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
		        </div> -->
	        </div>
	      </div>


	    </form>
	  </div><!-- /.box-body -->
	</div><!-- /.box -->

		