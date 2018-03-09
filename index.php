<!DOCTYPE html>
<html>
<head>
	<title>TODO_LIST</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">

		<label class="jumbotron col-md-12">TO-DO LIST</label><br>
		<div class="col-md-4"></div>
		<div id="input-group" class="col-md-4">
			<span id="msg"></span>
			<input type="hidden" id="id_task">
			<input type="text" id="task" maxlength="255">

			<input type="button" class="btn btn-primary" id="add_btn" value="ADD TASK" onClick="add_task();">
			<input type="button" class="btn btn-secondary" id="update_btn" value="UPDATE TASK" onClick="update_task();">

		</div>
		<table id="todolist" class="col-md-12">

		</table>

		<div>
			<p> Test </p>
		</div>

		<div>
			<p>This is AnotherBrach</p>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
