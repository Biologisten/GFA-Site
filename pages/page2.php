<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>#1 Meme factory</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
<ul class="main-container">
<?php 

$pictures = glob("../pictures/*.*");
$videos = glob("../videos/*.*");

$vidnum = 20;
$picnum = 20;

for ($i=0; $vidnum<count($videos) && $i <= 9; $i++) { $num = $videos[$vidnum]; 
$vidnum++;
echo '<video class="post" controls="true" loop="true">
<source src='.$num.' type=video/webm >
</video>'; }

for ($i=0; $picnum<count($pictures) && $i <= 9; $i++) {$num = $pictures[$picnum];
$picnum++;
echo '<img class="post" src='.$num.' height="700" width="700">'; }

?>
</ul>
</body>
</html>