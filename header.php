<div class="topnav">
        <a style="font-size: 22px;" class="active" href="index.php">|ADS|&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="about.php">About</a>
        <a href="contact.php">Get In Touch</a>
        <link rel="stylesheet" href="css/style.css">
        <div class="login-container">
          <hr>
          <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                           <a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a>
                           <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                           <a href="products.php"><span class="glyphicon glyphicon-log-out"></span> Product</a>
                           <?php
                           }else{
                            ?>
                            <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                            <a href="admin.html"><span class="glyphicon glyphicon-user"></span> Admin</a>                   
                           <?php
                           }
                           ?>
                           
        </div>
      </div>