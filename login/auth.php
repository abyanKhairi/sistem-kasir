<?php
include("../function/koneksi.php");


function login($data){
global $conn;

if (isset($_POST["login"])) {
  $username = $data["username"];
  $password = $data["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  //cek username 
  if (mysqli_num_rows($result) === 1) {

    //cek password
    $row = mysqli_fetch_array($result);

    if (password_verify($password, $row['password'])) {
      header("Location: ../page/dashboard/index.php");
      exit;
    }else{
        
    }      

  }
}
}
