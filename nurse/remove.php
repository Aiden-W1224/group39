<?php
include "../scripts/connection.php";
include "../scripts/logout.php";


logout("n_id");

$connection = getConnection();
$output = "";

if (isset($_POST["remove"])) {
	$sql = "DELETE FROM Nurse 
			WHERE NurseID = " . $_SESSION["n_id"] . ";";

	$result = $connection->query($sql);
	resetUser();
}

$connection->close();

?>

<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<div id="header">
		<h1>Hospital Management System</h1>
	</div>

	<div class="content">
		<form method='post'><input hidden type='text' name='remove' value='1'><button type='submit'>Remove Nurse</button></form>
		<br><a href="./home.php"><button>Back</button></a>
	</div>

</body>

</html>