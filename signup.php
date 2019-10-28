<?php 
  require 'aksi.php';

  if (isset($_POST['sign'])) {
    if (signup($_POST) > 0) {
      echo "<script>
          alert('user baru berhasil ditambahkan!');
        </script>";
    }
  } else {
    echo mysqli_error($koneksi);
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
</head>
<link rel="stylesheet" type="text/css" href="styleLogin.css">
<body>
  <form class="modal-content" action="" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Buat Account Sekarang.</p>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="password-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password-repeat" required>
      
      <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
      <div class="clearfix">
        <button type="submit" class="signupbtn" name="sign">Sign Up</button>
        <span class="psw">Punya akun? <a href="login.php">Login</a></span>
      </div>
    </div>
  </form>
</body>
</html>