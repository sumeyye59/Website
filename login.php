<?php 

include "header.html"; 
session_start();
ob_start();



if(isset($_SESSION["login"]))
	header("Location:admin.php");


?>




<div class="jumbotron mb-0">
<br><br>
	<div id="loginSayfasi" class="container shadow-lg col-md-4 text-black">
		<form action="giris.php" method="POST">
			<br>
			<div class="form-group">
				<label for="exampleInputEmail1">Email Adresi:</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="g191210037@sakarya.edu.tr" required="">
			</div>

			<div class="form-group mb-3">
				<label for="exampleInputPassword1">Şifre:</label>
				<input  name="sifre" type="password" class="form-control" id="exampleInputPassword1" placeholder="111" required="">
			</div>

			<button type="submit" class="btn btn-primary">Gönder</button>
		</form>
		<br><br>
	</div>
	<br>
	<br><br><br><br><br>
</div>

<?php include "footer.php"; ?>