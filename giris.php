<?php

include "header.html"; 

session_start();
ob_start();





if (($_POST['email'] =="g191210037@sakarya.edu.tr" )&& ($_POST['sifre']=="111")) {
	$_SESSION["login"] = "true";
	$_SESSION["email"] = "g191210037@sakarya.edu.tr";
	$_SESSION["sifre"] = "1111";
	
	header("Refresh:2;url=admin.php");
}


else{
	
	header("Refresh: 2;url=yanlis.php");
}
ob_end_flush();
?>
<div class="jumbotron mb-0">
	<div id="dogrulama" class="container shadow-lg col-md-4 text-center text-black"><br>
	
		Doğrulama yapılıyor..<br><br>
		
	</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php include "footer.php"; ?>
