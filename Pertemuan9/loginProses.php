<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if ($cek) {
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login, silahkan "; ?>
        <a href="loginForm.html">Login Kembali</a>
<?php
    }
}
?>