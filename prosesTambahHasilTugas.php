<?php
// Load file koneksi.php
include_once "config.php";
// Ambil Data yang Dikirim dari Form
$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];
$file = $_FILES['upload']['name'];
$tmp = $_FILES['upload']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$filebaru = $no_induk."_".$nama."_".$file;
// Set path folder tempat menyimpan fotonya
$path = "hasilTugas/".$filebaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_hasil (no_induk, nama_hasil, file_hasil) VALUES('$no_induk', '$nama', '$filebaru')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location:tugasSiswa.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambahHasilTugas.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambahHasilTugas.php'>Kembali Ke Form</a>";
}
?>