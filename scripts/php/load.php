<?php
require_once ('count.php');

function load() {
	require ('scripts/php/count.php');

	for ($i=0; $vidnum<count($videos) && $i <= 9; $i++) { $num = $videos[$vidnum]; 
	$vidnum++;
	echo '<video controls="true" loop="true">
	<source src='.$num.' type="video/webm">
	</video>'; }

	for ($i=0; $picnum<count($pictures) && $i <= 9; $i++) {$num = $pictures[$picnum];
	$picnum++;
	echo '<img src='.$num.' height="700" width="700">'; }
}

for ($i=0; $vidnum<count($videos) && $i <= 9; $i++) { $num = $videos[$vidnum]; 
$vidnum++;
echo '<video controls="true" loop="true">
<source src='.$num.' type="video/webm">
</video>'; }

for ($i=0; $picnum<count($pictures) && $i <= 9; $i++) {$num = $pictures[$picnum];
$picnum++;
echo '<img src='.$num.' height="700" width="700">'; }
?>