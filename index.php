
<head>
<script type="text/javascript" src="js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
</head>
<header class="center-block" name="home"><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
  <div class="intro-text type"> <br>
    <h1><strong>Revival - The Collection</strong></h1>
    <br>
    <p>Version: Magnus - 1 - Working Alpha</p><br>
    <link rel="stylesheet" type="text/css" href="style.css">
</header>
<div class="container">
<?php
require "yhteys.php";
?>
<!-- Stuff goes under this -->

   <?php
        $pvm=date('Y-m-j');
        $sql = 
         "
        SELECT games.GameID, games.GameN, games.Cover, games.Description, games.Platform, games.ReleaseDEU, games.ReleaseDJPN, games.ReleaseDUS, platform.PlatformID, platform.Platform
        FROM games
        INNER JOIN platform ON games.Platform = platform.PlatformID
        ";
        foreach($yhteys->query($sql) as $tapahtuma) {
        echo "
        <div class=\"element-card\">
		<div class=\"front-facing\">
			<img src=\"".$tapahtuma["Cover"]."\" alt=\"".$tapahtuma["GameN"]."\">
		</div>
		<div class=\"back-facing\">
            <p>".$tapahtuma["Description"]."<br><br></p>
            <p>JPN: ".$tapahtuma["ReleaseDJPN"]." <br>EU: ".$tapahtuma["ReleaseDEU"]."<br> US: ".$tapahtuma["ReleaseDUS"]."<br><br></p>

            <p>Platform: ".$tapahtuma["Platform"]."</p>
		</div>
	</div>
        ";
     }   
        ?>
  </div>
<script>
$(document).ready(function () {

$('.element-card').on('click', function () {

    if ($(this).hasClass('open')) {
        $(this).removeClass('open');
    } else {
        $('.element-card').removeClass('open');
        $(this).addClass('open');
    }
});
});
    </script>