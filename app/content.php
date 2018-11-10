<?php
// error_reporting(0);
// session_start();
// include "../koneksi/koneksi.php";
// include "../fungsi/library.php";
// include "../fungsi/class_paging.php";
// include "../fungsi/fungsi_indotgl.php";
// include "../fungsi/fungsi_combobox.php";

// Bagian Home
if ($_GET['module']=='home'){
	include "module/mod_beranda/beranda.php";
}

// Bagian Player
elseif ($_GET['module']=='player'){
	include "module/mod_player/player.php";
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
