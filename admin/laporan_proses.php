<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{

	$stmt = $mysqli->prepare("INSERT INTO dosen 
		(NIP,Password,Nama,NoHp,Email) 
		VALUES (?, ?, ?, ?, ?)");

	$stmt->bind_param("sssss",
		mysqli_real_escape_string($mysqli, $_POST['nip']), 
		mysqli_real_escape_string($mysqli, $_POST['password']),
		mysqli_real_escape_string($mysqli, $_POST['nama']), 
		mysqli_real_escape_string($mysqli, $_POST['nohp']), 
		mysqli_real_escape_string($mysqli, $_POST['email']));	


	if ($stmt->execute()) { 
		echo "<script>alert('Data dosen Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=dosen';</script>";	
	} else {
		echo "<script>alert('Data dosen Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){


	$stmt = $mysqli->prepare("UPDATE dosen  SET 
		Password=?,
		Nama=?,
		NoHp=?,
		Email=?
		where NIP=?");
	$stmt->bind_param("sssss",
		mysqli_real_escape_string($mysqli, $_POST['nip']),
		mysqli_real_escape_string($mysqli, $_POST['password']), 
		mysqli_real_escape_string($mysqli, $_POST['nama']), 
		mysqli_real_escape_string($mysqli, $_POST['nohp']),	 
		mysqli_real_escape_string($mysqli, $_POST['email']));

	if ($stmt->execute()) { 
		echo "<script>alert('Data Dosen Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=dosen';</script>";	
	} else {
		echo "<script>alert('Data Dosen Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	$stmt = $mysqli->prepare("DELETE FROM presensi where id_presensi=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Presensi Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=laporan';</script>";	
	} else {
		echo "<script>alert('Data Presensi Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>