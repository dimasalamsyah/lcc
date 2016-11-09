<?php 
include 'database.php';
$db = new database();

$aksi = @$_GET['action'];
 if($aksi == "save"){
 	echo $db->input($_POST['tanggal_mastersaldo'], $_POST['saldo_mastersaldo'], $_POST['ket_mastersaldo']);
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../");
 }elseif($aksi == "update"){
 	$db->update($_POST['tanggal_mastersaldo'], $_POST['saldo_mastersaldo'], $_POST['ket_mastersaldo'], $_GET['id']);
 	
 	//header("location:./forms/");
 }
?>