<?php
require_once 'conn.php';
if (isset($_POST['add'])) {
	if ($_POST['task'] != "") {
		$task = $_POST['task'];

		$conn->query("INSERT INTO `task` VALUES('0', '$task', '')");
		header('location:todolist.php');
	}
}
