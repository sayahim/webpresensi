<?php
session_start();
require_once 'setting/crud.php';
require_once 'setting/koneksi.php';
require_once 'setting/tanggal.php';

	$user=$_POST['username'];
	$pass=$_POST['password']; 

	$sqladmin= "SELECT * from pengguna WHERE username='$user' and password='$pass'";
	
	if (CekExist($mysqli,$sqladmin)== true){
		
		$_SESSION['id']=caridata($mysqli,"SELECT id_pengguna from pengguna where username='$user' and password='$pass'");
		$_SESSION['nama']=caridata($mysqli,"SELECT nama from pengguna where username='$user' and password='$pass'");

		echo "<script>window.location='admin/index.php?hal=beranda';</script>"; 

	} else{
		
		echo "<script>alert('Username atau password tidak terdaftar')</script>";
		echo "<script>window.location='login.php';</script>";
	
	}

?>