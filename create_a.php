<?php 
require_once('db_connect.php');

$table = '`media`';
$columns = '`'.implode('`, `',array_keys($_POST)).'`';
$values = "'".implode("', '",$_POST)."'";
$values = strip_tags($values);

$sql = "INSERT INTO $table ($columns) VALUES ($values);";
echo "$sql <br><br>";

if ($conn->query($sql)) {
	echo '<b style="color:green">Success :)</b>';
	echo '
		<script>
			setTimeout(function(){
				window.location.href = "index.php";
			}, 2500);
		</script>';
}
else {
	echo '<b style="color:red">Error! Failed to execute query.</b><br>';
	echo '<a href="index.php">go home</a>';
}

mysqli_close($conn);
?>