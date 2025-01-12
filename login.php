<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['password']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/halo.jpg"/>
</head>


<body class="min-vh-100 d-flex justify-content-center align-items-center" style="background-image: url('img/6.jpg\
');">
    
<nav class="navbar navbar-expand-lg  navbar-dark bg-black shadow-lg fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand">My Daily Journal</a>
        </div>
    </nav>

    <!--php-->
    <div class="card  shadow md-3 p-3 mt-5 bg-dark text-light rounded justify-content-center bg-opacity-20 " style="width: 20rem;">
        <h1 class="text-center py-2">Login</h1>
        <div class="card-body">
            <?php
            $username = "abintara";
            $password = "a112315181";
            ?>
            <form method="post">
                <div class="mb-3">
                    <label for="user" class="form-label">Username:</label>
                    <input type="text" id="user" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password:</label>
                    <input type="password" id="pass" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['user'] == $username && $_POST['pass'] == $password) {
                    header("Location: home.php");
                    exit();
                } else {
                    echo "<p class='text-danger mt-3'>Correction Username or password is wrong!</p>";
                }
            }
            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

    
    <?php
}
?>