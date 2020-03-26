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
<form action="create_a.php" method="post" accept-charset="utf-8">
	
<h3 class="text-center py-4">Add new media</h3>
<table class="table-dark table-bordered mb-4">
	<tr>
		<td>Mediatype</td>
		<td>
			<select name="mediatype">
				<option value="Book">Book</option>
				<option value="CD">CD</option>
				<option value="DVD">DVD</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>ISBN-13</td>
		<td><input name="ISBN" required="required"></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><input name="title" required="required"></td>
	</tr>
	<tr>
		<td>Author ID</td>
		<td><input name="author_id" required="required"></td>
	</tr>
	<tr>
		<td>Publisher ID</td>
		<td><input name="publisher_id" required="required"></td>
	</tr>
	<tr>
		<td>Publish Date</td>
		<td><input name="date" required="required"></td>
	</tr>
	<tr>
		<td>Cover Image</td>
		<td><input name="image" required="required"></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="description" placeholder="Hi" required="required"></textarea></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
			<select name="status">
				<option value="available">available</option>
				<option value="reserved">reserved</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td class="text-center"><button type="submit">Submit</button></td>
	</tr>
</table>
</form>

</body>
</html>