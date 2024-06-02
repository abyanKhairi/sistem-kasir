<?php
include "../function/koneksi.php";

function registrasi($data)
{
    global $conn;

    
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $password2 = $data["password2"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $no_tlp = $data["no_tlp"];
    $roles = $data["role"];


    if ($password !== $password2) {
        echo "<script>
        alert('password yang dimasukan berbeda')
    </script>";
        return false;
    }

    // enkripsi passowrd
    


    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `user`(`id_user`, `nama`, `username`, `email`, `password`, `alamat`, `not_tlp`, `role`) VALUES (NULL,'$nama','$username','$email','$password','$alamat','$no_tlp','$roles')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: ../login/login.php");
    }
        
}
