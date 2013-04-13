<html>
  <head> <title>moodSounds</title>
<style>



</style>
  </head>
  <body class="play">

<?php
$con = mysql_connect("localhost","francis","izotopsxtc200893");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{
$selected = mysql_select_db("all_songs",$con) or die("Could not select examples");
}

$result = mysql_query("SELECT ID, url FROM  songs ORDER BY RAND() LIMIT 1 ") or die("Could not select examples");

$result1 = mysql_query("SELECT * FROM songs");
$num_rows = mysql_num_rows($result1);

$row = mysql_fetch_assoc($result);

if ($_COOKIE["songid"]==NULL)
{
setcookie("songid", serialize($row['ID']), time()+3600);
setcookie("time", 1, time()+3600);
echo "<iframe width='420' height='315' src='http://www.youtube.com/embed/$row[url]' frameborder='0' allowfullscreen></iframe>";
}

else
{
$i=0;
$j=0;
$time = $_COOKIE['time'];
if($time==1){
$data[] = unserialize($_COOKIE['songid']); setcookie("time", 2, time()+3600);}

else
{
$data = unserialize($_COOKIE['songid']);}

while($data[$i]!=NULL)
{
if($data[$i]==$row['ID'])	
{

$j=$i+1;

if($j==$num_rows)
{header('Location: index.php?warn=1&warn1=$j'); exit;}

else
{header('Location: play.php'); exit;}
}
$i=$i+1;
}
$data[] = $row['ID'];
setcookie("songid", serialize($data), time()+3600);
$data=NULL;
echo "<iframe width='420' height='315' src='http://www.youtube.com/embed/$row[url]' frameborder='0' allowfullscreen></iframe>";
}

mysql_close($con);
?>

<a href="index.php">Back</a>

  </body>
</html>
