<?php
include('connection.php');
if(isset($_POST['submit'])){
    $sn=$_POST['sn'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    $sql ="insert into contact (sn, fname, lname, country, subject) values ('$sn','$fname','$lname','$country','$subject')";
    $result=mysqli_query($conn,$sql);
    if($result){
    header("location:contact.php");
    }else{
      die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
<link rel="stylesheet" href="css/contact.css">
<img class="qs" src="img/1321.jpg" alt="food">
<div class="container">
    <div style="text-align:center">
      <h1 style=" color: darkgreen; background-color:rgb(240, 247, 243);">Contact Us <br>
      : Swing by for a cup of coffee, or leave us a message : <br></h1><hr>
      <p style=" color: darkgreen;font-size: 32px; background-color: rgb(240, 247, 243);">
      “There is a spiritual aspect to our lives — when we give, we receive —
        when a business does something good for somebody, that somebody feels good about them!”
        <br> If you have a suggestion, feedback, question, or suggestion regarding our website 
        <br> please write to us. 
        <br>
        We value all of our readers and we try to get back to each email sent as soon as possible. 
        <br><br><br>
        <br> Use our Suggestions Page.
    </div>
    <div class="row">
      <div class="column">
      </div>
      <div class="column">
        <form method="post">
          <label  style="color:white; background-color:darkgreen; font-size: 15px; font-family:Verdana, Geneva, Tahoma, sans-serif;" for="fname">First Name</label>
          <input style="border-color: black;" type="text" id="fname" name="firstname" placeholder="Your name..">
          <label style="color:white; background-color:darkgreen; font-size: 15px; font-family:Verdana, Geneva, Tahoma, sans-serif;" for="lname">Last Name</label>
          <input style="border-color: black;" type="text" id="lname" name="lastname" placeholder="Your last name..">
          <label style="color:white; background-color:darkgreen; font-size: 15px; font-family:Verdana, Geneva, Tahoma, sans-serif;" for="lname">Country</label>
          <input  style="border-color: black;"type="text" id="country" name ="country" placeholder="Your country">
          <label style="color:white; background-color:darkgreen; font-size: 15px; font-family:Verdana, Geneva, Tahoma, sans-serif;" for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Your Space is here  " style="height:140px"></textarea>
          <input style="border-color: black;" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>

</body>
</html>