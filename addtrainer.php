<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add trainer</title>
</head>
<body>
    

<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new Trainer</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>Trainer ID</label>
<input type="text" name="Trainer_id" class="form-control"><br>
 <label>Name</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>Phone</label>
<input type="text" name="phone" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
     </div>
    </div>
    </div>
    <?php

include_once("footer.php");
?>
    </body>
  
</html>