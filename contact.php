<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="./css/contact.css">
    	<link rel="stylesheet" href="./css/form.css">
	</head>
	<body>
		<?php include './inc/menu_index.inc.php' ?>
		<?php include './fonction/fonction.php' ?>
		<br><br><br><br>
		<center>
			<table>
				<tr>
					<td> <img src="./img/img_contact/1.jpg" class="cellule" alt="Lyon" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/2.jpeg" class="cellule" alt="Clermont" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/3.jpg" class="cellule" alt="Valence" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/4.jpg" class="cellule" alt="Albert-Ville" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/5.jpg" class="cellule" alt="Grenoble" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/6.jpg" class="cellule" alt="Annecy" style="border:solid 3px #000"/></td>
					<td> <img src="./img/img_contact/7.jpg" class="cellule" alt="Chambéry" style="border:solid 3px #000"/></td>
				</tr>

				<tr>
					<td><h2>Lyon  Tél : 01.02.03.04.05<h2></td>
					<td><h2>Clermont  Tél : 01.02.03.04.05<h2></td>
					<td><h2>Valence  Tél : 01.02.03.04.05<h2></td>
					<td><h2>Albert-V  Tél : 01.02.03.04.05<h2></td>
					<td><h2>Grenoble  Tél : 01.02.03.04.05<h2></td>
					<td><h2>Annecy   Tél : 01.02.03.04.05<h2></td>
					<td><h2>Chambéry   Tél : 01.02.03.04.05<h2></td>
				</table>
		</center>
	<br><br><br>
		<hr>
		<br><br>
		<center>
			<div class="form">
				<form method="POST" action=" ">
					<legend class="text">Un Problème ?</legend>
					<br>
					<input type="text" name="prenom" placeholder="Prénom" required="required">
					<br><br>
					<input type="text" name="nom" placeholder="Nom" required="required">
					<br><br>
					<input type="email" name="mail" placeholder="Mail" required="required">
					<br>
					<h6>Votre problème</h6>
					<textarea name="story" rows="15" cols="47" required="required"></textarea>
					<br><br>
					<input type="submit" name="b1" value="Envoyer">
					<?php insert(); ?>
				</form>
			</div>
		</center>
		
<br><br><br><br>
	</body>
</html>
