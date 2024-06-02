<?php
include "../../function/koneksi.php";

global $conn;

$id_pembeli = $_GET["id_pembeli"];
$sql = "DELETE FROM `pembeli` WHERE id_pembeli = $id_pembeli";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data Berhasil Dihapus");
} else {
  echo "Failed: " . mysqli_error($conn);
}
