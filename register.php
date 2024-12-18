<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nandudb";
$ob="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   $ob=array('status'=>false,'msg'=>'failed'.$conn->connect_error);
   $conn->close();
   echo json_encode($ob);
   return;
}
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$address=$_GET['address'];
$location=$_GET['location'];
$guests=$_GET['guests'];
$arrival=$_GET['arrival'];
$leaving=$_GET['leaving'];
$sql_query = "insert into book(name,email,phone,address,wherefrom,howmany,arrival,leaving)values('$name','$email','$phone','$address','$location','$guests','$arrival','$leaving')"; 
 


if($conn->query($sql_query)){

    //echo '<script>alert("data success");</script>';
    $ob=array('status'=>true,'msg'=>'Datasaved');
       $conn->close();
       echo json_encode($ob);
       return;
    
   
    }
    else{
   
       $ob=array('status'=>false,'msg'=>'failed'.$conn->connect_error);
       $conn->close();
       echo json_encode($ob);
       return;
   
    }
    $conn->close();
   
   ?>
   
   