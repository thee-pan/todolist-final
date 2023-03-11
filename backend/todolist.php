<?php
session_start();

if (isset($_SESSION['User'])) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="shortcut icon" type="image/png" href="list.png" />

		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../style.css">

		<title>To-do List</title>
	</head>

	<body>
		<header>
			<div class="container">
				<div id="header">
					<h2><i class="fas fa-clipboard-check"></i> To-do List</h2>
					<?php
					echo '<a href="logout.php?logout">Logout</a>';
					?>

				</div>
			</div>
		</header>

		<div class="col-md-3"></div>
		<div class="col-md-6 well">
			<hr style="border-top:1px dotted #ccc;" />
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<center>
					<form method="POST" class="form-inline" action="add_query.php">
						<input type="text" autocomplete="off" class="form-control" name="task" required />
						<button class="btn btn-primary form-control" name="add">Add Task</button>
					</form>
				</center>
			</div>
			<br /><br /><br />
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Task</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require 'conn.php';
					$query = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
					$count = 1;
					while ($fetch = $query->fetch_array()) {
					?>
						<tr>
							<td><?php echo $count++ ?></td>
							<td><?php echo $fetch['task'] ?></td>
							<td><?php echo $fetch['status'] ?></td>
							<td colspan="2">
								<center>
									<?php
									if ($fetch['status'] != "Done") {
										echo
										'<a href="update_task.php?task_id=' . $fetch['task_id'] . '"class="btn btn-success"><i class="fas fa-solid fa-check"></i></a> |';
									}
									?>
									<a href="delete_query.php?task_id=<?php echo $fetch['task_id'] ?>" class="btn btn-danger"><i class="fas fa-sharp fa-solid fa-trash"></i></a>
								</center>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</body>

	</html>



<?php
} else {
	header("location:index.php");
}
