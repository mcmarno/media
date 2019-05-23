<?php
session_start();
ob_start();
include_once("config.php"); //buat koneksi ke database
include "config.php";
                        $id = $_GET['id'];      //get the goods which will updated
                        $query = "SELECT * FROM tb_materi WHERE id_materi = '$id'";  //get the data that will be updated
                        $hasil = mysqli_query($conn, $query);
                        //echo "hasil ==> ".$hasil;
                        $data  = mysqli_fetch_array($hasil);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $data['nama']; ?></title>
</head>
<body>
<?php 
echo "<h1>".$data['nama']."</h1>";
echo $data['isi'];
?>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="berita-".$kode.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//=====================================================
//Copy dan paste langsung script dibawah ini, untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//=====================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
require_once('/html2pdf/html2pdf.class.php');
try
{
$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>