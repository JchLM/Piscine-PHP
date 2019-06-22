<?php
session_start();

if ($_GET[submit] == "OK")
{
	$_SESSION[login] = $_GET[login];
	$_SESSION[passwd] = $_GET[passwd];
}
?>
<!DOCTYPE html>
<html>
	<body>
		<form action="index.php" method="GET">
			Identifiant: <input type="text" name="login" value="<?php echo "$_SESSION[login]";?>"/>
			<br />
			Mot de passe: <input type="password" name="passwd" value="<?php echo "$_SESSION[passwd]";?>"/>
			<button type="submit" name="submit" value="OK">submit</button>
		</form>
	</body>
</html>