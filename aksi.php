<?php
	$koneksi = mysqli_connect("localhost", "root", "", "pasar");

	function query($query) {
		global $koneksi;
		$result = mysqli_query ($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}
	function signup($data) {
		global $koneksi;

		$username = strtolower(stripcslashes($data["username"]));
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 = mysqli_real_escape_string($koneksi, $data["password-repeat"]);

		// cek email sudah ada atau belum
		$result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$username'");

		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('email sudah terdaftar!')
				</script>";

			return false;
		}

		// cek konfirmasi password
		if ($password !== $password2) {
			echo "<script>
					alert('konfirmasi password tidak sesuai!')
				</script>";

			return false;
		}

		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// tambahkan user baru ke database
		mysqli_query($koneksi, "INSERT INTO admin VALUES('', '$username', '$password')");

		return mysqli_affected_rows($koneksi);
	}
?>