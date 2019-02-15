<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];

    $query="SELECT * from izin join karyawan on karyawan.id_karyawan = izin.id_karyawan where izin.id_izin = '$kode'";

    $result=$mysqli->query($query);
    $data=mysqli_fetch_assoc($result);

    $a = "Detail";

}
?>

	<div class="box">
	  <div class="box-header with-border">
	    <h3 class="box-title"><b><?php echo $a; ?></b></h3>
	  </div><!-- /.box-header -->
	  <div class="box-body">
	  	<form class="form-horizontal" action="pembayaran_proses.php" method="post" enctype="multipart/form-data">

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Kode Izin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $kode ?></td>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Nama Karyawan</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $data['nama'] ?></td>
	        </div>
	      </div>

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Mulai Izin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $data['tgl_mulai'] ?></td>
	        </div>
	      </div>

  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Akhir Izin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $data['tgl_akhir'] ?></td>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Jenis Izin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $data['jenis'] ?></td>
	        </div>
	      </div>

		  <div class="form-group">
	        <label class="col-sm-3 control-label">Keterangan</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td><?php echo $data['keterangan'] ?></td>
	        </div>
	      </div>



  		  <div class="form-group">
	        <label class="col-sm-3 control-label">Bukti Izin</label>
	        <div class="col-sm-4">
	        	<td>:</td>
	          <td>
	          	<img weidth="220px" height="200px" src="../gambar/izin/small_<?php echo $data['gambar']; ?>"></td>
	        </div>
	      </div>

	     </form>

  	      <div class="form-group">
	        <label class="col-sm-3 control-label"> </label>
	        <div class="col-sm-4">
		        <div class="pull-left">
		        	<a href="?hal=izin" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Kembali</a>
		        </div>
	        </div>
	      </div>
