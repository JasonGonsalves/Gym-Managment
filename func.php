<?php
$con=mysqli_connect("localhost","root","","loginsystem");

    if(isset($_POST['pat_submit']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mem_id=$_POST['mem_id'];
        $tran_id=$_POST['tran_id'];
        $query="insert into mem_det(fname,lname,email,mem_id,tran_id)values('$fname','$lname','$email','$mem_id','$tran_id')";
        $result=mysqli_query($con,$query);
        if($result)
        {
        echo "<script>alert('Member added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 

function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>

            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['trainer_id'];
        $Name=$row['name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['customer_name'];
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
        <td>$customer_name</td>
            </tr>";

    }
}

if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            $customer_name=$_POST['customer_name'];
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type,customer_name)values('$Payment_id','$Amount','$customer_id','$payment_type','$customer_name')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            }

?>



