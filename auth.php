<?php
// Mengaktifkan session
session_start();

// Koneksi ke database
require 'koneksi.php';

// jika Tombol login ditekan
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // memanggil query admin
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    //cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // cek login untuk pemilik toko
            if ($row["level"] == "admin") {
                // membuat sessionnya pemilik
                $_SESSION["username"] = $username;
                $_SESSION["level"] = "admin";
                $last_login = mysqli_query($conn, "UPDATE user set last_login = now() WHERE username = '$username'");
                header("location: admin/index.php");
                exit;
                // cek login untuk pegawai
            } else if ($row["level"] == "operator") {
                // membuat sessionnya pegawai
                $_SESSION["username"] = $username;
                $_SESSION["level"] = "operator";
                $last_login = mysqli_query($conn, "UPDATE user set last_login = now() WHERE username = '$username'");
                header("location: operator/index.php");
                exit;
            }else if ($row["level"] == "owner") {
                // membuat sessionnya pegawai
                $_SESSION["username"] = $username;
                $_SESSION["level"] = "owner";
                $last_login = mysqli_query($conn, "UPDATE user set last_login = now() WHERE username = '$username'");
                header("location: owner/index.php");
                exit;
            }
        }
    }
    // Jika salah username atau password
    $error = true;
}
?>

<!DOCTYPE html>
<html>