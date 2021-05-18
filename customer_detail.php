<?php 
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
$select="SELECT id,first_name,last_name,email,contact,Balance FROM customers_data";
$select_result=mysqli_query($con,$select) or die(mysqli_error($con));

if(mysqli_num_rows($select_result)>0)
{;
?>
<html>
<head>
    <title>
        Sealed safe Bank
    </title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet"  type="text/css" href="style.css">
 <style>
     h1,h3{
         color: white;
     }
     h4,h5{
         color:black;
     }
     </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav navbar-nav navbar-left">
                    <h3><img src="download.jpg"alt="bank"width="40px" height="40px"><b> Sealed Safe Bank</b></h3></a>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customers.php" > <span class="glyphicon glyphicon-user"></span>Customers</a></li>
                        <li><a href="transaction.php"> <span class="glyphicon glyphicon-time"></span>Transaction History </a></li> 
                        <li><a href="AboutUs.php"><span class="glyphicon glyphicon-eye-open"></span>About Us</a></li>
                        <li><a href="bank.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div id="back_image">
         
        <div class="container">
        <?php
        while($r=mysqli_fetch_assoc($select_result))
        {
            $id=$r['id'];
            if($id==$_GET['id']){ 
        ?>
        <div class="card">
    <h4 class="card-header"><b>First Name:</b><?php echo $r["first_name"]; ?></h4>
    <h4 class="card-header"><b>Last Name:</b><?php echo $r["last_name"]; ?></h4>
    <div class="card-body">
      <h4 class="card-title"><b>Email:</b> <?php echo $r["email"]; ?></h5>
      <h4 class="card-title"><b>Contact number:</b> <?php echo $r["contact"]; ?></h5>
      <h4 class="card-text"><b>The customers current balance is <u><?php echo $r["Balance"]; ?></u></b> .</h4>
      <a href="transfer.php?id=<?php echo $r["id"] ?>" class="btn btn-primary">Transfer Money</a>
</div>

<?php }}}?>
        </div>
        </div>
        </div>
        <footer>
          <centre>
            <div class="contain">
                <div class="container">
              <h4 style="text-align: center"><b>FIND US ON SOCIAL MEDIA</b></h4>
              <center>
              <img src="download.png"alt="google"width="40px" height="40px">
              <img src="download (1).png"alt="twitter"width="40px" height="40px" style="text-align: center">
              <img src="download (2).png"alt="linkedin"width="40px" height="40px" style="text-align: center">
              <img src="download (3).png"alt="facebook"width="40px" height="40px" style="text-align: center"><br>
              </center>
              <p><b>Created by:Aishwarya Sudhir Palimkar</b></p>
              <p style="text-align:center">“Copyright © Sealed Safe Bank. All Rights Reserved | Contact Us: +91 90000 00000”.</p>
                 </div>
            </div>                 
              
          </centre>
      </footer>  
</body>
</html>