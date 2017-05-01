<!DOCTYPE html>
<html>
  <head>
    <title>
    Add Nilai
    </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js">
    </script>
  </head>
  
  <body>
    <div class="container">
      <h2>
      Tambah Nilai Pemrograman Framework
      </h2>
      
      <table class='table table-bordered table-responsive'>
        <form action="index.php" method="POST" class="form-group row">
          <td>
            <input type="text" name="nim" class="form-control" placeholder="NIM	" required>
          </td>
          <td>
            <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" required>
          </td>
		  <td>
            <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
          </td>
          <td>
            <input type="text" name="nilai" class="form-control" placeholder="Nilai" required>
          </td>
          <tr>
            <td>
              <input type="submit" name="addNilai" value="Tambah Nilai" class="btn btn-success">
              <input type="reset" value="Reset" class="btn btn-warning">
            </td>
          </tr>
        </form>
      </table>
      <center><a href="list.php" class="btn btn-info">List Nilai</a></center>
    </div>
  </body>
</html>

<?php
require('crud.php'); 
if(isset($_POST['addNilai'])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

$obj = new CRUD();
$add = $obj->addMhs($nim, $nama, $kelas, $nilai);
if($add == "Success"){
header('Location: list.php');
	}
}
?>