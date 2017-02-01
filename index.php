<?php
//memanggil config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD SEDERHANA PHPINDONESIA.COM</title>
</head>
<body>
 <h2>CRUD SEDERHANA PHPINDONESIA.COM</h2>
  <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
  <h3>Data MEMBER</h3>
  <table cellpadding="5" cellspacing="0" border="1">
  <tr bgcolor="#CCCCCC">
   <th>No.</th>
   <th>NAMA</th>
   <th>EMAIL</th>
   <th>Nomor Telepon</th>
  </tr>
    <?php
  
      //SELECT data dari database
  $query = mysql_query("SELECT * FROM member ORDER BY member_name DESC") or die(mysql_error());
    //melihat apakah ada database
  if(mysql_num_rows($query) == 0){ //jika belum ada data     
   echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
     }else{ 
      //jika data tidak kosong
   $no = 1; //membuat nomor
   while($data = mysql_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        //menampilkan row dengan data di database
    echo '<tr>';
     echo '<td>'.$no.'</td>'; //menampilkan nomor urut
     echo '<td>'.$data['member_nama'].'</td>'; //menampilkan data nama lengkap dari database
     echo '<td>'.$data['member_email'].'</td>'; //menampilkan data email  dari database
     echo '<td>'.$data['member_hp'].'</td>'; //menampilkan data hp dari database
     echo '<td><a href="edit.php?id='.$data['member_id'].'">Edit</a> / <a href="hapus.php?id='.$data['member_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=member_id
    echo '</tr>';
        $no++; //menambah jumlah nomor urut setiap row
       }
     }
  ?>
 </table>
</body>
</html> 