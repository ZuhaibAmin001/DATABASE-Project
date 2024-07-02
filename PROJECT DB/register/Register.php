
<?php
if(isset($_POST['submit'])){
	$FirstName = $_POST['first_name'];
	$LastName = $_POST['last_name'];
	$Email = $_POST['email'];
	
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'mytutor';
	
	$conn = mysqli_connect($host,$user,$pass,$dbname);
	$sql = "INSERT INTO register_user(first_name,last_name,email) values('$FirstName','$LastName','$Email')";
	mysqli_query($conn,$sql);
	
	
	
}


?>







<!DOCTYPE html>
<html>
<head>
    <title  >Register User</title>
    <style>
        body{
            background-color: lightgoldenrodyellow;
        }
        button{
            color: aqua;
        }
        body{
            color: darkgray;
        }
        h2{
            color: darkgray;
        }
        h1{
            color: black;
        }
        h4{
            color: rgba(0, 0, 0, 0.502);
        }
        form{
            color: darkgray;
        }
        body{
            
            background-image: url('https://media.istockphoto.com/id/1385168397/photo/conference-staff-member-scan-a-qr-code-from-attendee-upon-arrival-to-check-in-site.jpg?s=1024x1024&w=is&k=20&c=6JnBsISjXRcuui3woIFaBg58wutXxlEUO4W3CAkfhX0=');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        
        }
       
    </style>
</head>
<body>
    <h2>Register User</h2>
    <hr>
    <form action="#" method="post">
        First Name: <input type="text" name="first_name"><br>

        Last Name: <input type="text" name="last_name"><br>

        Email: <input type="email" name="email"><br>
        <input type="submit" name = "submit" value="Register User">
    </form>
    <hr>
    <br>
    <p>
        <h1>
            About our company:
        </h1>
        <h4>
            "Welcome to Elite Event Planners! We specialize in creating unforgettable experiences tailored to your unique vision. From corporate conferences and lavish weddings to intimate gatherings and grand celebrations, our dedicated team ensures every detail is flawlessly executed. With a passion for innovation and a commitment to excellence, we transform ordinary events into extraordinary memories. Trust Elite Event Planners to bring your dream event to life with creativity, precision, and a touch of magic. Let us handle the details while you enjoy the moment."
        </h4>
    </p>
    <hr>
	 
</body>
</html>