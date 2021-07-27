<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/sigimg.jpg'); background-size: cover;">
  <?php
  $login = false;
   
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "loginsystem";
      
      // connect to mysql database
      
      $connect = mysqli_connect($hostname, $username, $password, $databaseName);
      
      if (isset($_POST['submit'])){
   
      $uname=addslashes($_POST["uname"]);
      $pwd=addslashes($_POST["pass"]);

      $query= "SELECT * FROM `logintb` WHERE username='$uname'";
      $result = mysqli_query($connect, $query);

      $row = mysqli_num_rows($result);
      
        if($row==1){
          while($row=mysqli_fetch_assoc($result)){
            if(password_verify($pwd,$row['password'])){
              $login = true;
              session_start();
              $_session['loggedin']=true;
              $_session['username']=$uname;
              header('location: admin-panel.php');
            }
            else{
              echo'<div class="alert alert-danger" role="alert">
              Incorrect Username/Password!
            </div>';
            }
          }
         
      }
      
    }
?>


    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
      <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/cardback.jpg" class="card-img-top">
            <div class="card-body">
              <center>
              <h5>Admin Login</h5><br>
              <form class="form-group" method="POST">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="uname" class="form-control" maxlength="17" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="pass" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="inputbtn" name="submit"  value="Login" class="btn btn-primary"></center>
              </form>
            <a href="admin-signup.php"  class="btn btn-primary">Sign Up</a>
              
            </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </body>
</html>