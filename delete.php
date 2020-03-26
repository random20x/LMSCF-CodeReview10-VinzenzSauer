<?php 

require_once('db_connect.php');

if(isset($_GET['id'])){
	$id = $_GET["id"];
	$sql = "DELETE FROM `media` WHERE id = $id";

	if ($conn->query($sql)) {
	echo '<b style="color:orange">Record deleted!</b>';
	echo '
		<script>
			setTimeout(function(){
				window.location.href = "index.php";
			}, 2500);
		</script>';
	}
	else {
	echo '<b style="color:red">Error! Failed to execute query.</b><br>';
	echo '<a href="index.php">go back</a>';
	}
}
?>