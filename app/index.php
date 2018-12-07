<?php
session_start();
header('location: ./'.$_SESSION['level']); //alihkan berdasarkan hak akses

if (!isset($_SESSION['id_user'])) {
    header("Location: ../");
}
?>