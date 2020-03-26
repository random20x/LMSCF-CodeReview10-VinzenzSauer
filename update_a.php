<?php 
require_once('db_connect.php');

if(isset($_POST)){
	//GENERAL PURPOSE UPDATE
	$table = '`media`';
	$a = [];
	foreach($_POST as $key=>$value) {
		array_push($a, "`$key`='$value'");
	}
	$updates = implode(',',$a);
	$updates = strip_tags($updates);

	$sql = "UPDATE $table SET $updates WHERE id={$_POST['id']};";
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
		echo '<a href="insert.php">go back</a>';
	}
}
 
?>
