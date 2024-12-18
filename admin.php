<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nandana";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}
    
    $uname=$_GET['uname'];
    $passwd=$_GET['psw'];




$sql_query = "select * from admin where username='$uname' and password='$passwd'"; 

$result=$conn->query($sql_query);   

                                                      
    if($result->num_rows>0)
			{
             
               
				while ($row=$result->fetch_assoc()) {
                    session_start();
                    $_SESSION['uname']=$row['username'];
                    $_SESSION['psw']=$row['password'];
                    header("location:display.php");
                    return;
                  
				}
            }

 
 else{

echo "<script type='text/javascript'>
alert('Wrong username and password!');window.location.href='admin.html';
</script>";

 }
 $conn->close();

?>

