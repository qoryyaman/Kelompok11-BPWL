<?php
include "koneksi-kontak.php";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// sql entry data pada tabel
$sql = "INSERT INTO users (name,email,message)
		VALUES ('$name','$email','$message')";

if ($con->query($sql) === TRUE) { ?>
	<script language="javascript" type="text/javascript">
	alert('Pesan terkirim! Terimakasih atas Saran dan Komentar Anda.');
	window.location = 'index.php';
	</script>
	<?php
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>