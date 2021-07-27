<?php
	//database connection
	$connection = mysqli_connect('localhost', 'root', '', 'loginsystem');
?>
<?php
// update the data
	if (isset($_POST['update'])) {

	$mem_id = $_GET['edit']; 
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $fname = $_POST['fname'];
    $tran_id = $_POST['tran_id'];

	mysqli_query($connection, "UPDATE mem_det SET fname='$fname', lname='$lname', email='$email',tran_id='$tran_id' WHERE mem_id=$mem_id");
	echo "Data updated...";
	
}
?>
<html>
	<head>
		<title>CRUD Operations</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			body{
				
				max-width: 450px;
				background: #FAFAFA;
				padding: 30px;
				margin: 50px auto;
				box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
				border-radius: 10px;
				border: 6px solid #305A72;
				background-image: url("images/14.jpg");
				color:white;

			}
	
			
			
			
		</style>
	</head>
	<body>
		<?php 
		
				$mem_id = $_GET['edit']; 
				$results = mysqli_query($connection, "SELECT * FROM mem_det WHERE mem_id=$mem_id");
					$row = mysqli_fetch_array($results);
                     $fname = $row['fname'];
                     $lname = $row['lname'];
					 $email = $row['email'];
					 $tran_id = $row['tran_id'];
		?>	
		<section class="main-container">
		<div class="main-wrapper" align="center">
	<form method="post">
		
		<div class="input-group">
			<label>fName</label>
			<input type="text" name="fname"  value="<?php echo $fname; ?>"><br>
		</div>
        <div class="input-group">
			<label>lName</label>
			<input type="text" name="lname"  value="<?php echo $lname; ?>"><br>
		</div>
		<div class="input-group">
			<label>email</label>
			<input type="text" name="email"  value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>tran_id</label>
			<input type="text" name="tran_id"  value="<?php echo $tran_id; ?>">
		</div>
		<div class="input-group">
			<button class="btn btn-primary" type="submit" name="update" align="center">Edit</button>
			<a href="members_details.php"><button type="button" name="back" class="btn">Back</button></a>
		</div>
	</form>
	</div>
	</section>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>