<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>#1 Meme factory</title>
</head>
<body>
<ul class="main-container">
<?php 

$pictures = glob("/../pictures/*.*");
$videos = glob("/../videos/*.webm");

$var1 = 9;

for ($i=$var1; $var1<count($videos) && $i <= 9; $i++) { $num = $videos[$var1]; 
$var1++;
echo '<video class="post" controls="true" loop="true">
<source src='.$num.' type=video/webm >
</video>'; }

for ($i=$var1; $i<count($pictures) && $i <= 9; $i++) {$num = $pictures[$var1];
$var1++;
echo '<img class="post" src='.$num.' height="700" width="700">'; }

?>
</ul>
</body>
</html>