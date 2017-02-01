<!DOCTYPE html>
<html>
<head>
 <title>CRUD SEDERHANA PHPINDONESIA.COM</title>
</head>
<body>
 <h2>CRUD SEDERHANA PHPINDONESIA.COM</h2>
  <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
  <h3>Edit Data MEMBER</h3>
  <?php
 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan member_id yg didapatkan dari GET id -> edit.php?id=member_id
  //include atau memasukkan file koneksi ke database
 include('config.php');
  //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=member_id
 $id = $_GET['id'];
  //melakukan query ke database dg SELECT table member dengan kondisi WHERE member_id = '$id'
 $show = mysqli_query("SELECT * FROM member WHERE member_id='$id'");
  //cek apakah data dari hasil query ada atau tidak
 if(mysqli_num_rows($show) == 0){
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
  echo '<script>window.history.back()</script>';
   }else{
   //jika data ditemukan, maka membuat variabel $data
  $data = mysqli_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  }
 ?>
  <form action="edit-proses.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah member_id -->
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" value="<?php echo $data['member_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>EMAIL</td>
    <td>:</td>
    <td><input type="text" name="email" size="30" value="<?php echo $data['member_email']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Telepon</td>
    <td>:</td>
    <td><input type="text" name="hp" size="30" value="<?php echo $data['member_hp']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   
   
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="simpan" value="Simpan"></td>
   </tr>
  </table>
 </form>
</body>
</html>