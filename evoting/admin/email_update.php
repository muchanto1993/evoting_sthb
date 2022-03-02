<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$subject  = $_POST['subject'];
$body = $_POST['body'];

mysqli_query($koneksi, "update email_template set subject = '$subject', body = '$body' WHERE id = '$id' ");
header("location:email_view.php");
