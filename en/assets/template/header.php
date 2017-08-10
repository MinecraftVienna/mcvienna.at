<?php // SCHNEEFLOCKEN: Bestimmung ob angezeigt wird oder nicht
//SCHNEEFLOCKEN BEREICH BEGINN 
//Ein PHP-Script fügt den entsprechenden Codetag je nach Jahreszeit ein
//Beginn u. Ende siehe If-Bedingung, aktuell beginn Anfang November, Ende am 2.3. um 22.15!

date_default_timezone_set('Europe/Berlin');
$aktuellesmonat = date(n);
$aktuellertag = date(j);
$aktuellestunde = date(G);
$aktuelleminute = date(i);

//Tests:
//$aktuellesmonat = 4;
//$aktuellertag = 15;
//$aktuellestunde = 22;
//$aktuelleminute = 15;


if ((( $aktuellesmonat >= 11 ) || ( $aktuellesmonat < 3 )) || ( ( $aktuellesmonat == 3 ) && ( $aktuellertag < 2 )) || (( $aktuellesmonat == 3 ) && ( $aktuellertag == 2 ) && ( $aktuellestunde < 22 )) || (( $aktuellesmonat == 3 ) && ( $aktuellertag == 2 ) && ( $aktuellestunde == 22 ) && ( $aktuelleminute < 15 )) )
{
$winter = true;
}
else
{
$winter = false;
}
$winter = false; //Winter bzw. Schneeflocken ausgeschalten!
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MCVienna | Replica of Vienna in Minecraft</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Wien-Nachbau in Minecraft">
  <meta name="author" content="Harald  Niemeczek" >

	
	<link href="/assets/css/design.css" rel="stylesheet">
   <link href="/assets/lightbox/lightbox.css" rel="stylesheet">
  	<link rel="shortcut icon" href="/assets/img/design/favicon.ico">

	<?php
		//SCHNEEFLOCKEN SCRIPT
		//Ein PHP-Script fügt den entsprechenden Codetag je nach Jahreszeit ein
		//Beginn u. Ende siehe Oben!

		if ( $winter == true )
			{echo '<script type="text/javascript" src="/assets/js/schnee.js"></script>  <!-- -->';}
	?>
<!-- End Piwik Code -->
</head>
	<body>
	<script src="/assets/lightbox/lightbox-plus-jquery.min.js"></script>
		<?php // SCHNEEFLOCKEN DIV BEGINN 	
			//Ein PHP-Script fügt den entsprechenden Codetag je nach Jahreszeit ein
			//Beginn u. Ende siehe Oben!
		
			if ( $winter == true )
				{echo '<div id="winter">';}
			else
				{echo '<div>';}
		?>
				<div id="nav-menue">
				<div id="grayarea"></div><!-- Mobile Steuerung, Abdunklung des restlichen Bereichs -->
				<div id="mobile-top-bar">
					<a id="mobile-title" href="/en/">Minecraft Vienna</a>
					
					<a class="menue-button menue-button-beschr-close" id="nav_menu_opener" href="#" >
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
					</a>		
			<!--		<a class="menue-button menue-button-beschr-open" id="nav_menu_opener" href="#nav-menue" >
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
						<span class="menue-button-line"></span>
					</a> -->
					</div>
				

				<div id="white-box">
					<?php require("sidebar.php"); ?>
					<div id="content-column">
					<img src="/assets/img/design/buildingviennaheader.jpg" alt="Building Vienna">
						<div id="content">

	
