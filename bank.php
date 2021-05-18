<?php
include 'connection.php';?>
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
     #font{
         text-decoration-color:white;
         font-family: 'Times New Roman', Times, serif;}
         h4{
    color:white;
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
                    <h4><img src="download.jpg"alt="bank"width="40px" height="40px"><b> Sealed Safe Bank</b></h4></a>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customers.php" target="_blank"> <span class="glyphicon glyphicon-user"></span>Customers</a></li>
                        <li><a href="transaction.php"> <span class="glyphicon glyphicon-time"></span>Transaction History </a></li> 
                        <li><a href="AboutUs.php"><span class="glyphicon glyphicon-eye-open"></span>About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>      
        <div id="banner_image">
            <div id="inner_bannerimage">
                <div id="banner_content">
                    <h1>WELCOME</h1>
                    <h2><img src="download.jpg"alt="bank"width="50px" height="50px"><b> SEALED SAFE BANK</b></h2>
                    <a href="customers.php" target="_blank"><button type="button" class="btn btn-success">View Customers</button></a>
                </div>
            </div>
        </div>    
      <footer>
          <centre>
            <div class="contain">
                <div class="container">
              <h3 style="text-align: center"><b>FIND US ON SOCIAL MEDIA</b></h3>
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
