<?php
echo "<head><title>Data Diri Anda</head></title>";
$nama= $_POST['nama'];
$nim= $_POST['nim'];
$kelas= $_POST['kelas'];
$email= $_POST['email'];
$prodi= $_POST['prodi'];
$fp = fopen("datadiri.txt", "a+");
fputs($fp, "$nama|$nim|$kelas|$email|$prodi\n");
fclose($fp);

echo "Terimakasih Atas Partisipasi Anda<br>";
echo "<a href=tampilan.php> Isi Data Diri</a><br>";
echo "<a href=lihat.php> Lihat  Data Diri</a><br>";
?>


