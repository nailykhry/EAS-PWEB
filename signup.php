<?php 
 
include 'dbconnect.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nik'])) {
    header("Location: index.php");
}
 
if (isset($_POST['signup'])) {
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $password = md5($_POST['psw']);
 
  
        $sql = "SELECT * FROM users WHERE nik='$nik'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (U_NIK, U_email, U_password)
                    VALUES ('$nik', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
  
}
 
?>

<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
      <div class="judul-hlm">
        <br>
        <br>
        Sign Up
        <div class="ket-hlm">Sudah memiliki akun?</div>
        <div class="ket-hlm"><a href="login.php">Masuk disini</a></div>
    </div>

    <form action="login.php" style="border:none #ccc">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Isi form berikut untuk membuat akun.</p>
          <hr>
      
          <label for="nik"><b>NIK</b></label>
          <input type="text" placeholder="Masukkan NIK" name="nik" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Masukkan Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Masukkan Password" name="psw" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ingat saya
          </label>
      
          <p style="font-size: small;">Dengan membuat akun ini, anda setuju dengan ketentuan <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            <button type="submit" name="signup" class="signupbtn">Sign Up</button>
          </div>
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
          </div>
        </div>
      </form>
</body>
</html>