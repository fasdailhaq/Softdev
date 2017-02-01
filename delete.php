<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=member_id
if(isset($_GET['id'])){
  //inlcude atau memasukkan file koneksi ke database
 include('config.php');
  //membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=member_id
 $id = $_GET['id'];
  //cek ke database apakah ada data member dengan member_id='$id'
 $cek = mysqli_query("SELECT member_id FROM member WHERE member_id='$id'") or die(mysqli_error());
  //jika data member tidak ada
 if(mysqli_num_rows($cek) == 0){
    //jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
  echo '<script>window.history.back()</script>';
  }else{
    //jika data ada di database, maka melakukan query DELETE table member dengan kondisi WHERE member_id='$id'
  $del = mysqli_query("DELETE FROM member WHERE member_id='$id'");
    //jika query DELETE berhasil
  if($del){
      echo 'Data member berhasil di hapus! ';  //Pesan jika proses hapus berhasil
   echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda
     }else{
      echo 'Gagal menghapus data! ';  //Pesan jika proses hapus gagal
   echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda
    }
   }
 }else{
  //redirect atau dikembalikan ke halaman beranda
 echo '<script>window.history.back()</script>';
 }
?>