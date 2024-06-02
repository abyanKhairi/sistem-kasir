<?php
include "../../function/koneksi.php";

global $conn;

$id_user = $_GET["id_user"];
$sql = "DELETE FROM `user` WHERE id_user = $id_user";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data Berhasil Dihapus");
} else {
  echo "Failed: " . mysqli_error($conn);
}
