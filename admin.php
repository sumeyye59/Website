<?php 

include "header.html"; 

ob_start();
session_start();


if(!isset($_SESSION["login"]))
	header("Location:index.php");

?>

<div class="jumbotron mb-0">

	<div id="adminSayfasi" class="container shadow-lg col-md-4 text-center text-black"> <br>
		Hoşgeldin   <?php echo $_SESSION["email"] ?> <br><br>

		<a class="btn btn-danger mt-3" href=logout.php>Çıkış</a></center><br><br>
	</div>   <br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php include "footer.php";   ?>

