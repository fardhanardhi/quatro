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
elseif ($_GET['module']=='editPlayer'){
	include "module/mod_player/formEditPlayer.php";
}

// Bagian Admin
elseif ($_GET['module']=='admin'){
	include "module/mod_admin/admin.php";
}

// Bagian Quiz
elseif ($_GET['module']=='quiz'){
	include "module/mod_quiz/quiz.php";
}
elseif ($_GET['module']=='editQuiz'){
	include "module/mod_quiz/formEditQuiz.php";
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
