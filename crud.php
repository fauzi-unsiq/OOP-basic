<?php
class CRUD {

// buat koneksi ke database MySQL
public function __construct() {
$this->db = new PDO('mysql:host=localhost;dbname=kampus','root','');
}

// fungsi tambah mahasiswa
public function addMhs($nim, $nama, $kelas, $nilai) {
$sql = "INSERT INTO mahasiswa (NIM, nama, kelas, nilai) VALUES('$nim', '$nama', '$kelas', '$nilai')";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}

// fungsi edit mahasiswa
public function editMhs($nim) {
$sql = "SELECT * FROM mahasiswa WHERE NIM='$nim'";
$query = $this->db->query($sql);
return $query;
}

// fungsi ubah/update mahasiswa
public function updateMhs($nim, $nama, $kelas, $nilai) {
$sql = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE NIM='$nim'";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}

// fungsi tampil mahasiswa 
public function showMhs(){
$sql = "SELECT * FROM mahasiswa";
$query = $this->db->query($sql);
return $query;
}

// fungsi hapus mahasiswa
public function deleteMhs($id){
$sql = "DELETE FROM mahasiswa WHERE id_mhs='$id'";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}
}
?>