
<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php  
include _ROOT_PATH.'/templates/top.php';
?>
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
	<input id="id_x" type="text" name="litry" value="<?php out($litry) ?>" /><br />
</div><div class="form-group" >
	<label for="id_y"><span  class="hero-nexus">kilometry:</span> </label>
	<input id="id_y" type="text" name="kilometry" value="<?php out($kilometry) ?>" /><br />
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

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bot.php';
?>





</body>
</html>