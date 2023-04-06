
<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "nadee");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $start=$_POST['start'];
    $departure=$_POST['departure'];
    $time=$_POST['time'];
    $number1=$_POST['passenger'];
    $number2=$_POST['350'];
  
    $passenger=$number1*$number2;
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO booking VALUES ('','$name',
			'$email','$phone','$start','$departure','$time','$passenger')";
		

		// Close connection
		mysqli_close($conn);
		?>