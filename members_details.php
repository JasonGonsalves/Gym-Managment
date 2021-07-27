<!DOCTYPE html>

<?php
	//database connection
	$connection = mysqli_connect('localhost', 'root', '', 'loginsystem');
?>
<?php
// Delete data
	if (isset($_GET['del'])) 
	{
		$mem_id = $_GET['del'];
		mysqli_query($connection, "DELETE FROM mem_det WHERE mem_id=$mem_id");
	}
?>

<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: green;
    color: white;
    border-radius: 3px;
}

    .del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: red;
}
    </style>
</head>
<body>
<div class="jumbotron" style="background: url('images/12.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="members_search.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter member id"></div>
              <div class="col-md-2"><input type="submit" name="members_search_submit" class="btn btn-light" value="Search"> </div></div>           
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>First Name</th>
            <th>Last Name</th>
         <th>Email id</th>
         <th>Member ID</th>
         <th>Trainer ID</th>
         <th colspan="2">action</th>       
        </thead>

        
        <?php 
        
        $results = mysqli_query($connection, "SELECT * FROM mem_det");
		  while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['mem_id']; ?></td>
            <td><?php echo $row['tran_id']; ?></td>
			<td>
				<a href="edit.php?edit=<?php echo $row['mem_id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="members_details.php?del=<?php echo $row['mem_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
        
    </table>

     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
    <?php

include_once("footer.php");
?>
</html>