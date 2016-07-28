

<?php 

require_once("connection.php");



if(isset($_POST['name'])){
	$name = $_POST['name'];
	$sql = "Insert into user set name='$name'";
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

?>


<form action="" method="post">
	
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="Add" value="Add"></td>
		</tr>
	</table>
</form>