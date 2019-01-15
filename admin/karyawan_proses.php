<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah'])) {



	$stmt = $mysqli->prepare("INSERT INTO karyawan 
		(id_karyawan, nama, username, password, no_tlpn, jenis_kelamin, tempat_tgl_lahir, alamat) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssssss",
		mysqli_real_escape_string($mysqli, $_POST['kode']), 
		mysqli_real_escape_string($mysqli, $_POST['nama']), 
		mysqli_real_escape_string($mysqli, $_POST['username']),
		mysqli_real_escape_string($mysqli, $_POST['password']),
		mysqli_real_escape_string($mysqli, $_POST['no_tlpn']), 
		mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']),
		mysqli_real_escape_string($mysqli, $_POST['tempat_tgl_lahir']),  
		mysqli_real_escape_string($mysqli, $_POST['alamat']));	

	if ($stmt->execute()) { 

		echo "<script>alert('Data Karyawan Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=karyawan';</script>";	

	} else {
		echo "<script>alert('Data Karyawan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

} else if(isset($_POST['ubah'])) {


	$stmt = $mysqli->prepare("UPDATE karyawan SET 
		nama=?,
		username=?,
		password=?,
		no_tlpn=?,
		jenis_kelamin=?,
		tempat_tgl_lahir=?,
		alamat=?
		where id_karyawan=?");

	$stmt->bind_param("ssssssss",
		mysqli_real_escape_string($mysqli, $_POST['nama']),
		mysqli_real_escape_string($mysqli, $_POST['username']), 
		mysqli_real_escape_string($mysqli, $_POST['password']), 
		mysqli_real_escape_string($mysqli, $_POST['no_tlpn']),
		mysqli_real_escape_string($mysqli, $_POST['jenis_kelamin']),	 	 
		mysqli_real_escape_string($mysqli, $_POST['tempat_tgl_lahir']),
		mysqli_real_escape_string($mysqli, $_POST['alamat']),
		mysqli_real_escape_string($mysqli, $_POST['kode']));


	if ($stmt->execute()) { 

		echo "<script>alert('Data Karyawan Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=karyawan';</script>";	

	} else {

		echo "<script>alert('Data karyawan Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

} else if (isset($_GET['hapus'])) {

	$stmt = $mysqli->prepare("DELETE FROM karyawan where id_karyawan=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 

		echo "<script>alert('Data Karyawan Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=karyawan';</script>";	

	} else {

		echo "<script>alert('Data Karyawan Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";

	}

}
?>