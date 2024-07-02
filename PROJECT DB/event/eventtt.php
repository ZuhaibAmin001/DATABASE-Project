<?php
if(isset($_POST['submit'])){
	$EventName = $_POST['event_name'];
	$EventDate= $_POST['event_date'];
	$location= $_POST['location'];
	
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'mytutor';
	
	$conn = mysqli_connect($host,$user,$pass,$dbname);
	$sql = "INSERT INTO event(Eventname,Eventdate,Location) values('$EventName','$EventDate','$location')";
	
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
            color: rgb(205, 11, 11);
        }
        h1{
            color: black;
        }
        h4{
            color: rgba(0,0,0,0.502);
        }
        body{
            background-color: lightgoldenrodyellow;
        }
        body {
            background-image: url('https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
        b{
            color: darkgoldenrod;
        }
    </style>
</head>
<body>
<form action = "#" method = "POST">
     <h2>Add Event</h2>
     <hr>
     <b>
    <form action="process_event.php" method="post">
        EventName: <input type="text" name="event_name"><br>
        EventDate: <input type="date" name="event_date"><br>
        Location: <input type="text" name="location"><br>
        <input type="submit" name = "submit" value="Add Event">
	 
     </form>
     </b>

</form>
<hr>

<p>
    <h1>
        Join Us for an Unforgettable Evening at the Annual Gala!
    </h1>

    <h4>
       " Elite Event Planners is thrilled to invite you to our highly anticipated Annual Gala, an evening of elegance, entertainment, and extraordinary experiences. Set in the luxurious Grand Ballroom at the prestigious Riverfront Hotel, this year’s gala promises to be our most spectacular event yet."

"Guests will be treated to a gourmet dinner prepared by award-winning chefs, followed by live music performances and a captivating dance show. The night will also feature a silent auction with exclusive items, with all proceeds supporting local charities."
    </h4>
</p>
</body>
</html>
