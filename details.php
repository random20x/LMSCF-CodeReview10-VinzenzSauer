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
		.wrap {
			width: 48rem;
			margin: 0 auto;
		}

		.floatleft {
			width: 16rem;
			float: left;
		}

		img {
			width: 100%;
			border: 1vw outset #000;
		}
	</style>
</head>
<body>
<?php require_once('nav.php'); ?>
<?php
$sql = "SELECT * FROM media
INNER JOIN authors ON authors.author_id = media.author_id
INNER JOIN publishers ON publishers.publisher_id = media.publisher_id
WHERE id={$_GET['id']};
";

$result = $conn->query($sql); # $result = mysqli_query($conn, $sql);
// print_r($result);

$row = $result->fetch_assoc();
mysqli_close($conn);

?>
<!-- `id`, `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status` -->

<div class="container mt-5">
	<div class="wrap">
		<div class="floatleft"><img src="<?php echo $row['image'] ?>" alt="cover"></div>
		<div class="card" style="width: 24rem;">
  		<div class="card-body">
    		<h5 class="card-title"><?php echo "{$row['mediatype']}: {$row['title']}" ?></h5>
    		<p class="card-text">by <?php echo $row['fname'] .' '. $row['sname']?></p>
    		<p class="card-text"><?php echo "(ISBN: {$row['ISBN']})" ?></p>
    		<p class="card-text"><?php echo "{$row['description']}" ?></p>
    		<p class="card-text"><u>Publisher info</u></p>
    		<p class="card-text"><?php echo "{$row['name']} (size: {$row['size']})" ?></p>
    		<p class="card-text"><?php echo "{$row['address']}" ?></p>		
    		<a href="update.php?<?php echo $row['id'] ?>" class="btn btn-primary">Update</a>
    		<a href="delete.php?<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
  		</div>
		</div>
	</div>
</div>

</div>
</div>


</body>
</html>


