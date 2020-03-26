<?php require_once('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Austrian National Library</title>
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/styles.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b0240f81b7.js" crossorigin="anonymous"></script>

	<style>
		table {
			width: 100%;
		}

		td:first-child, td:last-child, td:nth-last-child(2) {
			padding: 0 !important;
		}

	</style>
</head>
<body>
<?php require_once('nav.php'); ?>
<div class="container">
<h3 class="text-center py-4">Feel free to check our Publishers</h3>
<?php
$sql = "SELECT * FROM publishers";

$result = $conn->query($sql); # $result = mysqli_query($conn, $sql);
// print_r($result);

if($result->num_rows == 0) {
	echo '<table><tr><th>No result.</th></tr></table>';
}
else {
	// $data = $result->fetch_all(MYSQLI_ASSOC);
	sqlToTable();
}

function sqlToTable() {
	global $result;
	echo '<table class="table-striped table-dark table-bordered mt-3">';
	// `id`, `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status`
	echo '<tr><th>Publisher</th><th>Size</th><th>Address</th><th></th></tr>';

	while($row = $result->fetch_assoc()) {
		echo "<tr><td>{$row['name']}</td><td>{$row['size']}</td><td>{$row['address']}</td>";
		echo "<td><a href='publisher_a.php?publisher_id={$row['publisher_id']}'><button class='btn btn-secondary'>check media</button></a></td></tr>";
	}
	echo '</table>';
}


mysqli_close($conn);
?>
</div>
</body>
</html>


