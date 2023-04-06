
<?php
    include_once 'config.php';
?>
 

<?php 
   $fname = $_REQUEST['firstname'];
   $lname = $_REQUEST['lastname'];
   $gender = $_REQUEST['gender'];
   $contact = $_REQUEST['contact'];
   $address = $_REQUEST['address'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['psw'];
    
    // assigning data in to a database
    $sql = "insert into register(fname, lname, gender, phone, address, email, password) 
    values('$fname','$lname','$gender','$contact','$address','$email','$password')";
    
    if(mysqli_query($conn,$sql)){
        echo "<script>alert ('Registerd successfully!')</script>";
        header("location:register.html");            
    }
    else{
        echo "<script>alert ('Error in inserting records')</script>";
    }
    mysqli_close($conn);
    ?>