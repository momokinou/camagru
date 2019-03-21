<!DOCTYPE html>
<html>
	<?php include "views/header.php"; ?>
	<style>
	<?php include "assets/css/header.css"; ?>
	</style>
    <div id="main">
        <form action="./create_acc.php" method="post">
            <div id="form_first">
                <b>First name:</b><br><input type="text" name="firstname" maxlength="20" minlength="3" placeholder="Between 3 and 20 characters"/><br>
                <b>Last name:</b><br><input type="text" name="lastname" maxlength="20" minlength="3" placeholder="Between 3 and 20 characters"/><br>
                <b>E-mail:</b><br><input type="text" name="email" placeholder="example@domain.com" /><br>
            </div>
            <div id="form_second">
                <b>Password:</b><br><input type="password" name="passwd" maxlength="20" minlength="6" placeholder="Between 6 and 20 characters"/><br>
                <b>Verify password</b><br><input type="password" name="verif_passwd" placeholder="Verify password" /><br>
                <button id="createacc" type="submit" name="submit" value="OK">Create Account</button>
            </div>
        </form>
    </div>e="submit" value="M'inscrire"/>
</html>