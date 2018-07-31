<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pesan = mysqli_real_escape_string($mysqli, $_POST['message']);
		
	// checking empty fields
	if(empty($name) || empty($email) || empty($pesan)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($pesan)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO kontak(name,email,pesan) VALUES('$name','$email','$pesan')");
		
		//display success message
		header("Location: admin.php");
	}
}
?>
</body>
</html>
