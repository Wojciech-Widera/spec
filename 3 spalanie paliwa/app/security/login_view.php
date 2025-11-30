<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="../../style/templatemo-nexus-style.css">

</head>
<body>
<div class="cyber-bg">
        <div class="cyber-gradient"></div>
      
    </div>
<div style="width:90%; margin: 2em auto;">
<div class="contact-form-wrapper" >
	<div  class="contact-form">	
<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
	<legend>Logowanie</legend>
	<fieldset>
		<div class="form-group" >
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />

		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj"  class="cyber-button" />
	</div>
</form>	


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>