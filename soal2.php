<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<form action="" method="POST">
	<br>
	Masukkan username :
	<input type="text" name="try" size="10" pattern="[a-zA-Z]{5}_[0-9]{2}" title="5 huruf kecil/besar dilanjutkan tanda '_' atau underscore lanjut dua nomor">
	<input class="btn btn-primary" type="submit" name="submit">
	</form>
<?php

if (isset($_POST["submit"])) {
	echo $_POST['try'];
	echo "<script>alert('OK')</script>";
}

?>

<script type="text/javascript">
	$("#soal2").addClass("active");
</script>
