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
			text-shadow: 0px 0px 5px black;
		}

		th {
			text-align: center;
		}
		img {
			width: 80px;
			height: 120px;
		}

		button {
			width: 40px;
		}

		.btn-success {
			width: 100%;
		}

		.description {
			width: 30%;
		}

		td:not(.description){
			width: 1%;
			white-space:nowrap;
			padding: 0 .35vw;
		}

		td:first-child, td:last-child, td:nth-last-child(2) {
			padding: 0 !important;
		}

	</style>
</head>
<body>
<?php require_once('nav.php'); ?>
<?php
$sql = "SELECT * FROM media
INNER JOIN authors ON authors.author_id = media.author_id
INNER JOIN publishers ON publishers.publisher_id = media.publisher_id
";

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
	echo '<table class="table-striped table-dark table-bordered">';
	// `id`, `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status`
	echo '<tr><th>image<br></th><th>ISBN</th><th>type</th><th>title</th><th>author</th><th class="d-none d-lg-table-cell description">description</th><th>publisher</th><th>date</th><th>status</th><th colspan="2"><a href="create.php"><button class="btn btn-success"><i class="fas fa-wrench"></i> <i class="fas fa-plus"></i></button></a></th></tr>';

	while($row = $result->fetch_assoc()) {
		echo "<tr><td><a href='details.php?id={$row['id']}'><img src='{$row['image']}' alt='pic'></a></td><td>{$row['ISBN']}</td><td>{$row['mediatype']}</td><td>{$row['title']}</td><td>{$row['sname']}</td><td class='d-none d-lg-table-cell description'>{$row['description']}</td><td>{$row['name']}</td><td>{$row['date']}</td><td>{$row['status']}</td>";
		echo "<td><a href='update.php?id={$row['id']}'><button class='btn btn-primary'><i class='fas fa-edit'></i></button></a></td>";
		echo "<td><a href='delete.php?id={$row['id']}'><button class='btn btn-danger'><i class='far fa-trash-alt'></i></button></a></td></tr>";
	}
	echo '</table>';
	// echo $html;
}


mysqli_close($conn);
?>
</body>
</html>


