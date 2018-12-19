<?php

$jBenar=$_GET["jBenar"];
$jSalah=$_GET["jSalah"];
$jKosong=$_GET["jKosong"];

echo 'Benar: ' . $jBenar . '<br>';
echo 'Salah: ' . $jSalah . '<br>';
echo 'Kosong: ' . $jKosong . '<br>';
$nilai = $jBenar + $jSalah + $jKosong;
$nilai = $jBenar / $nilai * 100;
echo 'Nilai: ' . $nilai . '<br>';
?>
