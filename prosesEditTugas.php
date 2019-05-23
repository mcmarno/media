<?php
// Load file koneksi.php
include "config.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_POST['id_tugas'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_file'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $file = $_FILES['upload']['name'];
  $tmp = $_FILES['upload']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $filebaru = date('dmYHis').$file;
  
  // Set path folder tempat menyimpan fotonya
  $path = "tugas/".$filebaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tb_tugas WHERE id_tugas='$id'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("tugas/".$data['tugas'])) // Jika foto ada
      unlink("tugas/".$data['tugas']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE tb_tugas SET nama='$nama', tugas= '$filebaru' WHERE id_tugas='$id'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: tugas.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE tb_tugas SET nama='$nama' WHERE id='$id'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: tugas.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='editTugas.php'>Kembali Ke Form</a>";
  }
}
?>