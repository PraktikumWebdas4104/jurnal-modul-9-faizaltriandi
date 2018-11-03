<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		// mysql_select_db($this->db);
		
	}

	function tampil_data(){
		$data = mysqli_query($this->conn, "SELECT * FROM tabel_1");

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		$nm =$nama;
		$lmt = $alamat;
		$age = $usia;
 		$res = mysql_query("INSERT INTO tabel_1(nama,alamat,usia) values('','$nm','$alm','$age')");
 	}

	function hapus($id){
		$del = mysql_query($this->conn, "DELETE FROM tabel_1 where id='$id'");
	}

	function edit($id){
		$data = mysql_query($this->conn, "SELECT * FROM tabel_1 where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		$upd = mysql_query($this->conn, "UPDATE tabel_1 set nama='$nama',alamat='$alamat',usia='$usia' where id='$id'");
	}

} 

?>