<?php
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>#1 Meme factory</title>
	<link rel="icon" sizes="32x32" href="key-pics/favicon-32x32.png">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
       <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="/admin/dashboard.php"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp
          Logout</a></li>
          </ul>
          <ul id="Welcome">
            <div id="copyright"><img src="key-pics/dot.gif" width="300" height="50" /></div>
          </ul>
        </div>
      </div>
  </nav>
<ul class="main-container">
<?php 

require_once ('scripts/php/count.php');

for ($i=0; $vidnum<count($videos) && $i <= 9; $i++) { $num = $videos[$vidnum]; 
$vidnum++;
echo '<video class="post" controls="true" loop="true">
<source src='.$num.' type="video/webm">
</video>'; }

for ($i=0; $picnum<count($pictures) && $i <= 9; $i++) {$num = $pictures[$picnum];
$picnum++;
echo '<img class="post" src='.$num.' height="700" width="700">'; }



function load() {
	header("Location: pages/page1.php");
}

?>
<script>
$('#button').click(function() {
	load();
});    
</script>

<form>
	<button id="button">Hello</button>
	<a href="home.php?load_moar=true">Load More!</a>
</form>
</ul>
</body>
</html>