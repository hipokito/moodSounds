<html>
  <head>


    <title>moodSounds</title>
<?php echo Asset::css('bootstrap.css'); ?>

<style>
.back{background-color:#000000;
-moz-user-select: none; 
        -khtml-user-select: none; 
        -webkit-user-select: none; 
        -o-user-select: none;
         user-select: none;}

.backw { 
        -moz-user-select: none; 
        -khtml-user-select: none; 
        -webkit-user-select: none; 
        -o-user-select: none;
         user-select: none;
  	position: fixed;
 	top: 50%;
  	left: 50%;
	margin-top: -257px;
	margin-left: -460px;
	background-color:#000000;
         }

</style>
  </head>
  <body class="back">
  

  
<?php
$warn = Input::get('warn');
$warn1 = Input::get('warn1');

 if ($warn==1){echo '<span class="warn" style="color:#AFA;text-align:center;">Nothing to suggest in this category!</span>';}; echo $warn1;?>

<img class= "backw" src="/assets/img/duglogobigtextwhite.png" width="920" height="515" alt="moodSounds"
usemap="#faces">
<map name="faces">
  <area shape="circle" coords="138,142,100" alt="Happy" href="play.php">
 <area shape="circle" coords="456,142,100" alt="Angry" href="play.php">
  <area shape="circle" coords="767,142,100" alt="Stoned" href="play.php">
<area shape="circle" coords="138,383,100" alt="inLove" href="play.php">
 <area shape="circle" coords="456,383,100" alt="Party" href="play.php">
  <area shape="circle" coords="767,383,100" alt="Sad" href="play.php">
</map>

  </body>
</html>
