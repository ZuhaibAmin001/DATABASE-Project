<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$city = $_POST['city'];
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'mytutor';
	
	$conn = mysqli_connect($host,$user,$pass,$dbname);
	$sql = "INSERT INTO STUDENT(name,email,mobile,city) values('$name','$email','$mobile','$city')";
	mysqli_query($conn,$sql);
	
	
	
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Description</title>
    <style>
        h2{
            color: darkgray;
        }
        h1{
            color: darkgrey;
        }
        h4{
            color: rgba(0,0,0,0.502);
        }
        body{
            background-color: lightgoldenrodyellow;
        }
        body {
            background-image: url('https://images.pexels.com/photos/1587927/pexels-photo-1587927.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
        b{
            color: darkgoldenrod;
        }
        
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
</head>
<body>
<form action = "#" method = "POST">
    <p>
        <b>
     name : <input type = "text" name = "name" > <br>
	 Email : <input type = "email" name = "email"> <br>
	 Mobile : <input type = "number" name = "mobile" > <br>
	 City : <input type = "text" name = "city"> <br>
	 <input type = "submit" name = "submit" value = "Save Data">
	 
     
    </p>
</b>
</form>
</body>
</html>