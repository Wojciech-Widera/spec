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
<div class="header">
	<h1 class='hero-nexus' ><?php out($page_title); if (!isset($page_title)) {  ?> Tytuł domyślny ... <?php } ?></h1>
    <br>
	<h2  class="hero-flow"><?php out($page_header); if (!isset($page_header)) {  ?> Tytuł domyślny ... <?php } ?></h1>
    <br>
	<p class='hero-nexus' >
		<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>
	</p>
</div>

<div class="content">    
<div>

    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>