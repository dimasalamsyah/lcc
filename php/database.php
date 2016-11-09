<?php

class database{

	public function __construct(){
		$this->db = new mysqli("localhost", "root", "", "lcc");
	}
	public function getData(){
		$sql = "SELECT * FROM master_saldo";
		$query = $this->db->query($sql);
		return $query;
	}

	public function input($tanggal, $saldoawal, $ket){//date('Y-m-d H:i:s')
		$sql = "INSERT INTO master_saldo (tanggal, saldoawal, ket, update_at) VALUES('$tanggal', $saldoawal, '$ket', '".date('Y-m-d H:i:s')."' )";
		$query = $this->db->query($sql);
		
		if(!$query){
			return "Failed ".$sql;
		}
		else{
			return "Berhasil";
		}
	}

	public function update($tanggal, $saldoawal, $ket, $id){//date('Y-m-d H:i:s')
		$sql = "UPDATE master_saldo set tanggal='$tanggal', saldoawal='$saldoawal', ket='$ket', update_at='".date('Y-m-d H:i:s')."' where id='$id' ";
		$query = $this->db->query($sql);
		
		if(!$query){
			return "Failed ".$sql;
		}
		else{
			return "Berhasil";
		}
	}
}