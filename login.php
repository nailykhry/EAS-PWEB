<!DOCTYPE html>
<head>
    <title>Log In</title>
   <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="judul-hlm">
        <br>
        <br>
        Log In
        <div class="ket-hlm">Belum memiliki akun?</div>
        <div class="ket-hlm"><a href="signup.php">Daftar disini</a></div>
    </div>

    <form action="action_page.php" style="border:none #ccc">
        <div class="container">
          <h1>Log In</h1>
          <p>Masuk dengan email dan password yang telah terdaftar.</p>
          <hr>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Masukkan Email" name="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Masukkan Password" name="psw" required>
      
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ingat saya
          </label>
      
          <p style="font-size: small;">Anda telah setuju dengan ketentuan <a href="signup.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="submit" class="signupbtn">Log In</button>
          </div>
          <div class="clearfix">
            <button type="button" class="cancelbtn">Sign Up</button>
          </div>
        </div>
      </form>
</body>
</html>