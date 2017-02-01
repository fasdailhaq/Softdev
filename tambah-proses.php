 <?php
if(isset($_POST['tambah'])){
  //inlcude configurasi koneksi
 include('config.php');
  //menangkap data dari tambah.php
 $nama  = $_POST['nama'];
 $email  = $_POST['email'];
 $hp     = $_POST['telepon'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO `member` (`member_id`, `member_nama`, `member_email`, `member_hp`) VALUES (NULL,`
        ".$nama."`,`
		".$email."`,`
		".$hp."`";
$input = mysqli_query($simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
    echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }else{
    echo var_dump($simpan);  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>