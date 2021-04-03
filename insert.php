<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname ="youtube";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT = "SELECT email FROM register WHERE email = ? LIMIT 1";
		$INSERT = "INSERT INTO register (username, password, gender, email) VALUES(?,?,?,?)";

		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

			if ($rnum == 0) {
				$stmt->close(); 

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $username, $password, $gender, $email);
				$stmt->execute();
				echo "Akun baru berhasil di daftar";
			}

			else{
				echo "Seseorang telah memakai email ini, <a href='form.html'>Kembali</a>";
			
			}

		$stmt->close();
		$conn->close();

	}

}

else{
	echo "All field required";
	die();
}

?>