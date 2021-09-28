
<html>
<head><title>Details</title>
<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>

	<style>
    .box{margin-top: 10px;border: 2px solid green;margin-left: 300px;position: relative;top:10px;color: wheat;background-color: whitesmoke;
    border-radius: 10px;box-shadow: 0 0 4px 2px navy;}
    .box2{background-image: url("image/brown.jpg");position: absolute;background-color: #686de0;}
    .box1{color: brown;border-width: 3px;}
    .update{padding: 10px;}
    .delete{padding:10px}

    .p3{margin-top: 40px;font-size: 50px;font-weight: bold;margin-left: 650px;color:wheat;}
   .b1{margin-top: 30px;margin-left: 650px;}
   .b2{margin-top: 30px;margin-left: 10px;}
   .b3{margin-top: 30px;margin-left: 10px;}
   .bi{margin-top: 30px;margin-left: 10px;}
   .b31{margin-top: 50px;margin-left: 30px;}



   
   
    </style>
</head>
<body class="box2">
    <p class="p3">Customer Details</p>
<a href="count.php" class="btn btn-primary btn-lg b31"><i class="fas fa-info-circle"></i> Search Customer</a>

<div class="box">
<table border="2">
<tr class="box1"> 
<th style=padding:10px;text-align:center>   ID</th>

<th style=padding:10px;text-align:center>Place_name</th>
<th style=padding:10px;text-align:center>District</th>

<th style=padding:10px;text-align:center>Description</th>
<
</tr>


<?php 
include('database.php');
$connect = mysqli_connect("localhost", "root", "", "travelrecommend");

$query="Select * from places";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);


if($total!=0)
{
    
    while($result=mysqli_fetch_assoc($data))
    {
echo "
<tr >
<td style=padding:10px;text-align:center>".$result['Place_name']."</td>
<td style=padding:10px>".$result['division']."</td>
<td style=padding:10px>".$result['Description']."</td>
<td style=padding:10px>".$result['email']."</td>
</tr>";

    }
}
else{
    echo 'No data found';
}
?>

</table></div>

<a href="room.php" class="btn btn-primary btn-sm b1">Reserve Room</a>
<a href="payment.php" class="btn btn-primary btn-sm b3">Details Search</a>

<a href="join.php" class="btn btn-primary btn-sm bi">View Room</a>
<a href="aggregate.php" class="btn btn-primary btn-sm b2">Total room reserved</a>
<a href="roomdetails.php" class="btn btn-primary btn-sm b2">Update room</a>

<a href="logout.php" class="btn btn-primary btn-sm b3"><i class="fa fa-home"></i>Admin Logout</a>

<script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</body>



</html>