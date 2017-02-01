<!DOCTYPE html>
<html>
<head>
 <title>CRUD SEDERHANA PHP INDONESIA</title>
</head>
<body>
 <h2>CRUD SEDERHANA</h2>
  <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
  <h3>BUAT DATA MEMBER</h3>
  <form action="tambah-proses.php" method="post">
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30" required></td>
   </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" name="email" size="30" required></td>
   </tr>
    <tr>
    <td>Nomor HP</td>
    <td>:</td>
    <td><input type="text" name="telepon" size="30" required></td>
   </tr>

    <tr>
  
    <td>:</td>
    <td><button type="submit"
name="tambah" >Submit</button>
   </td>
   </tr>
  </table>
 </form>
</body>
</html>
