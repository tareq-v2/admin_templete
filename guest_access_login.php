
<!DOCTYPE html>
<html>
<head>
	<?php include("css.php") ?>
</head>
<body>

	<form method="post">
		
		<div class="container">
			<div class="form-body">
			</div>
		</div>

	</form>




  <?php include("js.php") ?>

</body>
</html>
<style type="text/css">
	body {
    background: #f8fdff;
}

.form-body {
    background: white;
    max-width: 323px;
    padding: 16px;
    margin: auto;
}

.form-title {
    text-align: center;
    border-bottom: 1px solid lightgray;
}

.form-input {
    margin-top: 17px;
}

.form-title b {
    font-size: 20px;
    text-transform: uppercase;
    padding-bottom: 11px;
}

.form-input input:focus {
    box-shadow: none;
}

.form-input input {
    border-radius: 0px;
}
.form-input textarea:focus {
    box-shadow: none;
}

.form-input textarea {
    border-radius: 0px;
}
</style>