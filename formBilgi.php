<?php include "header.html"; ?>


<div class="jumbotron mb-0">

	<div id="formBilgi" class="container shadow-lg col-md-6 text-black">
	
		<br><br>
		<td><b>Form gönderme başarılı.</b></td>
		<br><br>
		<td><b>Bilgiler</b></td>
		<br>
		<td><b>Ad:</b></td>
		<td><?php echo $_POST["ad"];?></td>
		<br>
		<td><b>Soyad:</b></td>
		<td><?php echo $_POST["soyad"];?></td>
		<br>
		
		<td><b>E-posta:</b></td>
		<td><?php echo $_POST["email"];?></td>
		<br>
		<td><b>Telefon:</b></td>
		<td><?php echo $_POST["telefon"];?></td>
		<br>
		<td><b>Cinsiyet:</b></td>
		<td><?php echo $_POST["cinsiyet"];?></td>
		<br>
		<td><b>Doğum Tarihi:</b></td>
		<td><?php echo $_POST["dogum"];?></td>
		<br>
		<td><b>Program:</b></td>
		<td><?php echo $_POST["program"];?></td>
		<br>
		<td><b>Mesaj:</b></td><br>
		<td><?php echo $_POST["mesaj"];?></td>
		<br>
		<br><br>
	</div>
	
<br><br>
</div>

<?php include "footer.php"; ?>

