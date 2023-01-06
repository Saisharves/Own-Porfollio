<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "myporfolio");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$Email = $_REQUEST['Email'];
            $Number = $_REQUEST['Number'];
            $Message = $_REQUEST['Message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO details VALUES ('$Name',
			'$Email','$Number','$Message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

echo nl2br("\n$Name\n $Email\n "
				. "$Number\n $Message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
