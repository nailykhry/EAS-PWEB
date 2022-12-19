<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: "Poppins";
            background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
        }

        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        border-radius: 100px;
        font-family: "Poppins";
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        font-family: "Poppins";
        }

        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        font-family: "Poppins";
        font-weight: bold;
        font-size: medium;
        }

        button:hover {
        opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
        padding: 14px 20px;
        background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        
        }

        /* Extra styles for the cancel button */
        .signupbtn {
        padding: 14px 20px;
        background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 100px;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
        float: left;
        width: 100%;
        }

        /* Add padding to container elements */
        .container {
        padding: 50px;
        }

        /* Clear floats */
        .clearfix::after {
        content: "";
        clear: both;
        display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
        }

        form {
            width: 50%;
            float: right;
            background: white;
        }

        h1{
        text-align: center;
        background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        }

        p {
            text-align: center;
        }

        .judul-hlm {
            width: 50%;
            float: left;
            position: relative;
            font-style: normal;
            font-weight: 900;
            font-size: 64px;
            line-height: 96px;
            /* identical to box height */

            text-align: center;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .ket-hlm {
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 45px;
            text-align: center;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        a {
            color: white;
        }
    </style>
</head>
<body>
      <div class="judul-hlm">
        <br>
        <br>
        Sign Up
        <div class="ket-hlm">Sudah memiliki akun?</div>
        <div class="ket-hlm"><a href="#">Masuk disini</a></div>
    </div>

    <form action="action_page.php" style="border:none #ccc">
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
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
          </div>
        </div>
      </form>
</body>
</html>