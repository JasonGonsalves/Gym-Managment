<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Admin Signup</title>
    <style>
    .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 50%; 
}
    </style>
</head>
<body  style="background:url('images/sigimg.jpg'); background-size: cover>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginsystem";
$conn = mysqli_connect($servername,$username,$password,$database);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uname=addslashes($_POST['uname']);
    $pass=$_POST['pass'];
    $hash= password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO logintb ( username, password) VALUES ('$uname', '$hash')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
      echo"Inserted successfully";
      header('location: index.php');
    }
    else{
        echo"connection failed with the error ".mysqli_error($conn);
    }
    }

    ?>

    <div class="span3 well">
  
    <form method="POST" action="#" class="modal-content">
    <h1>Sign up</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" name="uname"  maxlength="17" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pass" class="form-control" maxlength="11" id="exampleInputPassword1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    </div>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <a href="index.php" class="btn btn-light ">Go Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>