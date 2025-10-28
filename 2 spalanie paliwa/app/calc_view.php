<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="style/templatemo-nexus-style.css">
<link rel="stylesheet" href="../style/templatemo-nexus-style.css">
<h1 class='hero-nexus' style='margin-left:900px;'> Oblicz spalanie paliwa</h1>
</head>
<body id="top">
	 <!-- Enhanced Background Elements -->
    <div class="cyber-bg">
        <div class="cyber-gradient"></div>
        <div class="matrix-rain" id="matrixRain"></div>
    </div>
    
    <div class="particles" id="particlesContainer"></div>
    
    <div class="data-streams" id="dataStreams"></div>
    
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>
    
    <div class="grid-overlay">
        <div class="grid-lines"></div>
        <div class="grid-glow"></div>
    </div>
    
    <div class="scanlines"></div>
    <div class="noise-overlay"></div>
<div class="contact-form-wrapper" >
	<div  class="contact-form">	
<form  action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<div class="form-group" >
	<label for="id_x"> <span  class="hero-flow">litry: </span></label>
	<input id="id_x" type="text" name="x" value="<?php out($x) ?>" /><br />
</div><div class="form-group" >
	<label for="id_y"><span  class="hero-nexus">kilometry:</span> </label>
	<input id="id_y" type="text" name="y" value="<?php out($y) ?>" /><br />
	</div>
	<input class="cyber-button" type="submit" value="Oblicz" />
</form>	
</div>
</div>
<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol class="hero-nexus"';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($wynik)){ ?>
<div class="hero-nexus"  >
<?php echo 'spalanie wynosi: '.$wynik. " litrów na 100km"   ; ?>
</div>
<?php } ?>
<div ></div>
    <script src="style/templatemo-nexus-scripts.js"></script>
    
<script src="../style/templatemo-nexus-scripts.js"></script>

</body>
</html>