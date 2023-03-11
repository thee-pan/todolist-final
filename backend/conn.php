<?php
	$conn = new mysqli("localhost", "root", "rootroot", "db_task");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
