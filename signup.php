<!DOCTYPE html>
<html>
	<?php include "views/header.php"; ?>
	<style>
	<?php include "assets/css/header.css"; ?>
	</style>
	<form method="post">

	<label>Pseudo: <input type="text" name="pseudo"/></label><br/>

	<label>Mot de passe: <input type="password" name="passe"/></label><br/>

	<label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>

	<label>Adresse e-mail: <input type="text" name="email"/></label><br/>

	<input type="submit" value="M'inscrire"/>

	</form>
</html>