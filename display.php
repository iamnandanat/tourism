<?php
echo"<!DOCTYPE html>";
echo"<html lang='en'>";
echo"<head>";
echo"<meta charset='utf-8'>";
echo"<title>Home</title>";
echo"<meta name='viewport' content='width=device-width, initial-scale=1.0' />";
echo"<meta name='description' content='' />";
echo"<meta name='author' content='http://webthemez.com' />";
echo"<!-- css -->";
echo"<link href='css/bootstrap.min.css' rel='stylesheet' />";
echo"<link href='css/fancybox/jquery.fancybox.css' rel='stylesheet'>";
echo"<link href='css/jcarousel.css' rel='stylesheet' />";
echo"<link href='css/flexslider.css' rel='stylesheet' />";
echo"<link href='css/style.css' rel='stylesheet' />";


echo"</head>";
echo"<body>";
echo"<div id='wrapper'>";
echo"<!-- start header -->";
echo"<header>";
echo"<div class='navbar navbar-default navbar-static-top'>";
echo"<div class='container'>";
echo"<div class='navbar-header'>";
echo"<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
echo"<span class='icon-bar'></span>";
echo"<span class='icon-bar'></span>";
echo"<span class='icon-bar'></span>";
echo"</button>";
echo"<img src='img/works/logo1.png'>";
echo"<a class='navbar-brand' href='home.html'></a>";
echo"</div>";
echo"<div class='navbar-collapse collapse'>";
echo"<ul class='nav navbar-nav'>";
echo"<li><a href='home.html'><img src='img/works/logo.png'>Logout</a></li>";
echo"</ul>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</header>";
echo"<section id='inner-headline'>";
echo"<div class='container'>";
echo"<div class='row'>";
echo"<div class='col-lg-12'>";
echo"<h2 class='pageTitle'>Admin Dashboard</h2>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</section>";

             
echo"<section id='content'>";
echo"<div class='container'>";		
echo"<section>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nandudb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}

$sql_query = "select * from book"; 

$name="name";
$email="email";
$phone="phone";
$address="address";
$location="location";
$guests="guests";
$arrival="arrival";
$leaving="leaving";

$result=$conn->query($sql_query);
if($result->num_rows>0)
			{   
                echo"<table class='table' align='center' border='2'>";
                echo"<tr>";
                echo"<th scope='col'>name</th>";
                echo"<th>email</th>";
                echo"<th>phone</th>";
                echo"<th>address</th>";
                echo"<th>wherefrom</th>";
                echo"<th>howmany</th>";
                echo"<th>arrival</th>";
                echo"<th>leaving</th>";
                echo"</tr>";
               
				while ($row=$result->fetch_assoc()) {
					$name=$row['name'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $address=$row['address'];
                    $location=$row['wherefrom'];
                    $guests=$row['howmany'];
                    $arrival=$row['arrival'];
                    $leaving=$row['leaving'];
                    echo"<tr>";
                    echo"<th>$name</th>";
                    echo"<th>$email</th>";
                    echo"<th>$phone</th>";
                    echo"<th>$address</th>";
                    echo"<th>$location</th>";
                    echo"<th>$guests</th>";
                    echo"<th>$arrival</th>";
                    echo"<th>$leaving</th>";
                    echo"</tr>";
                  
				}
                echo"</table>";
            }

 $conn->close();
 echo"<script src='js/jquery.js'></script>";
 echo"<script src='js/jquery.easing.1.3.js'></script>";
 echo"<script src='js/bootstrap.min.js'></script>";
 echo"<script src='js/jquery.fancybox.pack.js'></script>";
 echo"<script src='js/jquery.fancybox-media.js'></script>";
 echo"<script src='js/portfolio/jquery.quicksand.js'></script>";
 echo"<script src='js/portfolio/setting.js'></script>";
 echo"<script src='js/jquery.flexslider.js'></script>";
 echo"<script src='js/animate.js'></script>";
 echo"<script src='js/custom.js'></script>";
 
 ?> 
 <style>
    table{
        width:100%;
        display:block;
        overflow:auto;
        
    }
    table tr th:nth-child(2) {
        width: 100%;

}
</style>
 
 