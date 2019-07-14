<?php

include ("config.php");
$id = $_POST['id_tugas'];
$nama = $_POST['nama'];
$file = $_FILES['uplod']['name'];
$tmp = $_FILES['uplod']['tmp_name'];

$filebaru = $nama."_".$file;

$path = "tugas/".$filebaru;

if(isset($_POST['ubah_file'])){ 

 if (move_uploaded_file($tmp, $path))
 { 

    $query = "SELECT * FROM tb_tugas WHERE id_tugas='$id'";
    $sq = mysqli_query($conn, $query); 
    $data = mysqli_fetch_array($sq); 
    if(is_file("tugas/".$data['tugas']))
    {
      unlink("tugas/".$data['tugas']);
    }
     
    $query1 = "UPDATE tb_tugas SET nama='$nama', tugas= '$filebaru' WHERE id_tugas ='$id'";
    $sql = mysqli_query($conn, $query1); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ 
      header("location: tugas.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
    }
  }else
  {
    echo "Maaf, file gagal untuk diupload.";
    echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
  }
}else{ 
  $query = "UPDATE tb_tugas SET nama='$nama' WHERE id_tugas ='$id'";
  $sql = mysqli_query($conn, $query); 
  if($sql){ 
    header("location: tugas.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database loh.";
    echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
  }
}
?>