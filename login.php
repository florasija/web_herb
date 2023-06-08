<?php
require 'function.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // query untuk mencari data pengguna berdasarkan username
    $login =  "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $login);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo "
        <script>
        alert('Login success, welcome $username');
        window.location = 'index copy.php';
        </script>";
    } else {
        echo "<script>
        alert('Login failed');
        window.location = 'index copy.php';
        </script>";
    }
}
?>
