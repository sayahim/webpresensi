<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($mysqli,"karyawan","id_karyawan='$kode'"));

}else{

	$id_karyawan= KodeOtomatis($mysqli,"karyawan","id_karyawan","11", "5", "6");
    $nama="";
    $username="";
    $password="";
    $no_tlpn="";
    $jenis_kelamin="";
    $tempat_tgl_lahir="";
    $alamat="";

}
?>
	<div class="box">
	  <div class="box-body">
	    <form class="form-horizontal" action="karyawan_proses.php" method="post" enctype="multipart/form-data">


  	      <div class="form-group">
	        <label class="col-sm-3 control-label">Kode karyawan</label>
	        <div class="col-sm-4">
	          <input type="text" name="kode" class="form-control" value="<?php echo $id_karyawan; ?>" required>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Nama</label>
	        <div class="col-sm-4">
	          <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required>

	        </div>
	        <!-- <div class="col-sm-4"></div> -->
	      </div>

  	      <div class="form-group">
	        <label class="col-sm-3 control-label">Username</label>
	        <div class="col-sm-4">
	          <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
	        </div>
	      </div>

	      <div class="form-group">
	        <label class="col-sm-3 control-label">Password</label>
	        <div class="col-sm-4">
	          <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" required>
	        </div>
	      </div>

	      <div class="form-group">
	        <label class="col-sm-3 control-label">Nomor Handphone</label>
	        <div class="col-sm-4">
	          <input type="text" name="no_tlpn" class="form-control"  value="<?php echo $no_tlpn; ?>" required>
	        </div>
	      </div>


  	      <div class="form-group">
	       	<label class="col-sm-3 control-label">Jenis Kelamin</label>
	        <div class="col-sm-4">
	          <select class="form-control" name="jenis_kelamin">
	            <option value="Pria" <?php echo  "Pria" ?>> Pria</option>
	            <option value="Wanita" <?php echo  "Wanita" ?>> Wanita</option>
	          </select>
	        </div>
	      </div>


	      <div class="form-group">
	        <label class="col-sm-3 control-label">Tempat, Tanggal lahir</label>
	        <div class="col-sm-4">
	          <input type="text" name="tempat_tgl_lahir" class="form-control"  value="<?php echo $tempat_tgl_lahir; ?>" required>
	        </div>
	      </div>

  	      <div class="form-group">
	        <label class="col-sm-3 control-label">Alamat</label>
	        <div class="col-sm-4">
	          <input type="text" name="alamat" class="form-control"  value="<?php echo $alamat; ?>" required>
	        </div>
	      </div>
          

	      <div class="form-group">
	        <label class="col-sm-3 control-label"> </label>
	        <div class="col-sm-4">
		        <div class="pull-left">
		        	<a href="?hal=karyawan" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
		        </div>
		        <div class="text-right">
		           <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
		        </div>
	        </div>
	      </div>

	    </form>
	  </div><!-- /.box-body -->
	</div><!-- /.box -->

		