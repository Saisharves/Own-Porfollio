<?php
$servername="localhost";
$username="root";
$password=" ";
$database_name="myporfolio";
$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
die("Connection Failed:".mysqli_connect_error());
}
else if(isset($_PST["send message"]))
{
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Number=$_POST["Number"];
    $Message=$_POST["Message"];
    $sql_query="INSERT INTO details(name,email,number,message)  VALUES("$name","$email","$number","$message")";
    if(mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully !";
    
    }
    else{
        echo "Error:",$sql,"",mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>