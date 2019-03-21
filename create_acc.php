<?php

if (isset($_POST["submit"]) && $_POST["submit"] != "OK")
	$signup = 0;
else
{
    if (isset($_POST["firstname"]) && !empty($_POST["firstname"])
    && isset($_POST["lastname"]) && !empty($_POST["lastname"])
    && isset($_POST["passwd"]) && !empty($_POST["passwd"])
    && isset($_POST["verif_passwd"]) && !empty($_POST["verif_passwd"] && $_POST["passwd"] == $_POST["verif_passwd"])
    && isset($_POST["email"]) && !empty($_POST["email"]))
	{
		if (strlen($_POST["firstname"]) < 3 || strlen($_POST["firstname"]) > 20
		|| strlen($_POST["lastname"]) < 3 || strlen($_POST["lastname"]) > 20
		|| strlen($_POST["passwd"]) < 6 || strlen($_POST["passwd"]) > 20)
			$signup = 0;
		if (!isset($array[$_POST["email"]]))
		{
			$array[$_POST["email"]]["firstname"] = $_POST["firstname"];
			$array[$_POST["email"]]["lastname"] = $_POST["lastname"];
			$array[$_POST["email"]]["email"] = $_POST["email"];
			$array[$_POST["email"]]["passwd"] = hash("whirlpool", $_POST["passwd"]);
			if ($array[$_POST["email"]]["firstname"] == "admin" || $array[$_POST["email"]]["lastname"] == "admin" || $array[$_POST["email"]]["email"] == "admin@gmail.com")
				$signup = 0;
			else
			{
				file_put_contents("../private/passwd", serialize($array));
				$signup = 1;
			}
		}
		else
			$signup = 0;
	}
	else
		$signup = 0;
}
echo "<div style=\"display: none\" id=\"signup\">".($signup ? "OUI" : "NON")."</div>";
if ($signup == 1)
{
	echo "<div style=\"display: none\" id=\"signup\">OUI</div>";
	include("index.php");
}
else
{
	echo "<div style=\"display: none\" id=\"signup\">NON</div>";
	include("signup.php");
}
?>