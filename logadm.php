<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADS</title>
    <style type="text/css">
table{
    border: 1.5px solid black;
background-color:peru;
}
th{
    border-bottom: 10px solid #000;
}
td{
    border-bottom: 8px solid #666;
}

        </style>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <img class="as" src="img/112.jpg" alt="no">
    <h1 style="color: white;">DATABASE </h1>
    <hr>
    &nbsp;<a style="font-size: 22px; float:right; color:aliceblue;" href="logout.php"> Logout</a>
    <?php
    include('connection.php');
    $sql ="SELECT * FROM users;";
    $result=mysqli_query($con,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        echo "<table>";
        echo"<tr><th>ID</th> <th>NAME</th><th>EMAIL</th><th>PASSWORD</th><th>CONTACT</th><th>CITY</th><th>ADDRESS</th>";
        while($row=mysqli_fetch_assoc($result)){
            echo"<tr><td>";
            echo $row['id'];
            echo"</td><td>";
            echo $row['name'];
            echo"</td><td>";
            echo $row['email'];
            echo"</td><td>";
            echo $row['password'];
            echo"</td><td>";
            echo $row['contact'];
            echo"</td><td>";
            echo $row['city'];
            echo"</td><td>";
            echo $row['address'];
            echo"</td></tr>";

        }
    }
    
    
    ?>
    
</body>
</html>