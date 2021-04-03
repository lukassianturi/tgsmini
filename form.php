<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<nav class="navbar navbar-light bg-primary">
	<a class="navbar-brand" href="#" style="color: white;">Form Registrasi</a>
  </nav>
  <br>
  
	<form action="insert.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td>
					<input type="radio" name="gender" value="m" required>Male
					<br>
					<input type="radio" name="gender" value="f" required>Female	
				</td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="email" required></td>
			</tr>
			
			<tr>
				<td><br>
					<input type="submit" value="Submit" class="btn btn-primary">
				</td>
			</tr>
		</table>
	</form>
	

</body>
</html>
