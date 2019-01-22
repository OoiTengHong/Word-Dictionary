<?php 

	session_start();

	$mysqli = new mysqli('localhost', 'root', '', 'word') or die(mysqli_error($mysqli));

	$id = 0;
	$update = false;
	$word = '';
	$antonym = '';
	$synonym = '';
	$definition = '';

	if (isset($_POST['save'])) {
		
		$word = $_POST['word'];
		$antonym = $_POST['antonym'];
		$synonym = $_POST['synonym'];
		$definition = $_POST['definition'];

		$mysqli->query("INSERT INTO data (word, antonym, synonym, definition) VALUES('$word', '$antonym', '$synonym', '$definition')") or die($mysqli->error);

		$_SESSION['message'] = "Record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: 6.Word Dictionary.php");
	}

	if (isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);
		$mysqli->query("ALTER TABLE data DROP COLUMN id") or die($mysqli->error);
		$mysqli->query("ALTER TABLE data ADD id INT NOT NULL AUTO_INCREMENT Primary key FIRST") or die($mysqli->error);
		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: 6.Word Dictionary.php");
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
		if (count($result) == 1){
			$row = $result->fetch_array();
			$word = $row['word'];
			$antonym = $row['antonym'];
			$synonym = $row['synonym'];
			$definition = $row['definition'];
		}
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$word = $_POST['word'];
		$antonym = $_POST['antonym'];
		$synonym = $_POST['synonym'];
		$definition = $_POST['definition'];

		$mysqli->query("UPDATE data SET word='$word', antonym='$antonym', synonym='$synonym', definition='$definition' WHERE id=$id") or die($mysqli->error);

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";

		header("location: 6.Word Dictionary.php");
	}

	
 ?>