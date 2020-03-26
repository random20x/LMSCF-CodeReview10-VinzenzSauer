<?php 
	require_once('db_connect.php');

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "SELECT * FROM media WHERE id = $id ";
		$result = mysqli_query($conn ,$sql);
		$row = $result->fetch_assoc();
	}

	// $type = $row['mediatype'];
	// $status = $row['status'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Austrian National Library</title>
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b0240f81b7.js" crossorigin="anonymous"></script>
	<style>
		
		table {
			margin: 0 auto;
		}

		input, textarea {
			width: 500px;
		}

		select {
			height: 30px;
			width: 133px;
		}

		td {
			padding: 1vw;
		}
	</style>
</head>
<body>
<?php require_once('nav.php'); ?>
	<!-- `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status` -->
<form action="update_a.php" method="post" accept-charset="utf-8">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	
<h3 class="text-center py-4">Update media</h3>
<table class="table-striped table-dark table-bordered">
	<tr>
		<td>Mediatype</td>
		<td>
			<select name="mediatype">
				<option value="Book" <?php if ($type=='Book') echo 'selected="selected"' ?>>Book</option>
				<option value="CD" <?php if ($type=='CD') echo 'selected="selected"' ?>>CD</option>
				<option value="DVD" <?php if ($type=='DVD') echo 'selected="selected"' ?>>DVD</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>ISBN-13</td>
		<td><input name="ISBN" required="required" value="<?php echo $row['ISBN'] ?>"></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><input name="title" required="required" value="<?php echo $row['title'] ?>"></td>
	</tr>
	<tr>
		<td>Author ID</td>
		<td><input name="author_id" required="required" value="<?php echo $row['author_id'] ?>"></td>
	</tr>
	<tr>
		<td>Publisher ID</td>
		<td><input name="publisher_id" required="required" value="<?php echo $row['publisher_id'] ?>"></td>
	</tr>
	<tr>
		<td>Publish Date</td>
		<td><input name="date" required="required" value="<?php echo $row['date'] ?>"></td>
	</tr>
	<tr>
		<td>Cover Image</td>
		<td><input name="image" required="required" value="<?php echo $row['image'] ?>"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="description" required="required"><?php echo $row['description'] ?></textarea></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
			<select name="status" value="<?php echo $row['status'] ?>">
				<option value="available" <?php if ($status=='available') echo 'selected="selected"' ?>>available</option>
				<option value="reserved" <?php if ($status=='reserved') echo 'selected="selected"' ?>>reserved</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td class="text-center"><button type="submit">Update</button></td>
	</tr>
</table>
</form>

</body>
</html>


