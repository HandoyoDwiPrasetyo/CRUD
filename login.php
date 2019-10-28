<?php
	session_start();
	if (isset($_SESSION["login"])) {
		header("Location: index.php");
		exit;
	}

	require 'aksi.php';

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

		// cek email
		if (mysqli_num_rows($result) === 1) {
			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				// set session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit;
			} else {
				echo "<script>
					alert('username / password tidak sesuai!')
				</script>";
			}
		} else {
				echo "<script>
					alert('username / password tidak sesuai!')
				</script>";
		}

		$error = true;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="styleLogin.css">
<body>
  			<form class="modal-content animate" action="" method="post">
    			<div class="imgcontainer">
      				<h2 style="text-align: center;">Login</h2>
      				<img src="img/login.png" alt="Avatar" class="avatar">
    			</div>

    			<div class="container">
      				<label for="username"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="username" required>

      				<label for="password"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="password" required>
        
      				<button type="submit" name="login">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
      				<div class="container" style="background-color:#f1f1f1">
      					<span class="psw">Belum punya akun? <a href="signup.php">Buat Akun</a></span>
    				</div>
    			</div>
  			</form>
</html>