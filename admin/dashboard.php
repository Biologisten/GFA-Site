<?php
session_start();
require_once '/../dbconnect.php';
if (!isset($_SESSION['userSession'])) {
	header("Location: ../index.php");
}

if (!isset($_SESSION['permission'])) {
	$q = $DBcon->query('SELECT permission_level FROM tbl_users WHERE user_id = $_SESSION["userSession"]');
	$_SESSION['permission'] = $q;
}

$perm = (int)$_SESSION['permission'];

if ($perm < 5) {
	header("location: ../account.php");
}

$users = $DBcon->query("SELECT * FROM tbl_users");
$count = $users->num_rows;
$userlist = $DBcon->query("SELECT username, email FROM tbl_users");
?>

<html>
<head>
	<title>#1 Meme factory</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<div id="header">
		<div class="logo"><a href="#">Steal<span>Memes©</span></a></div>
	</div>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a href="/../home.php">Home</a></li>
			</ul>
		</div>
		<div class="content">
			<?php
			echo '<table style="display: inline-block; margin: 0 auto;">
			<tr>
			<th>Username</th>
			<th>Email</th>
			</tr>';
			foreach ($userlist as $user_data) { 
			echo '<tr id="list">
			<td><font size="2" face="Lucida Sans Unicode">'.$user_data['username'].'</td>
			<td><font size="2" face="Lucida Sans Unicode">'.$user_data['email'].'</td>
			</tr>';
		}
		echo '</table>';
		?>
		</div>
	</div>
</body>
</html>