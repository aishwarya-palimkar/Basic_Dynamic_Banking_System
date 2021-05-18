<?php 
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
$select="SELECT from_person,to_person,id_transfer,time,money_transfer,Date FROM transactions";
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
     h4{
         color:white;
     }
     h1{
         color:black;
     }
     td{
         font-weight: bolder;
         font-size: larger;
         color: black;
     }
     </style>
</head>
<body>
<div id="b_image">
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
                        <li><a href="customers.php"> <span class="glyphicon glyphicon-user"></span>Customers</a></li>
                        <li><a href="AboutUs.php"><span class="glyphicon glyphicon-eye-open"></span>About Us</a></li>
                        <li><a href="bank.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                        <li><a href="transaction.php"> <span class="glyphicon glyphicon-time"></span>Transaction History </a></li> 
                    </ul>
                </div>
            </div>
        </nav> <br>
        <section>
            <div class="container">
        <h1><b> Transaction History </b></h1>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
  	<tr>
      <th>ID Transfer</th>
      <th>From</th>
      <th>To</th>
      <th>Transferred Amount</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
   
  <?php while($r=mysqli_fetch_array($select_result)) {?>
        <tr>
        <td><?php echo $r['id_transfer'];?></td>
        <td><?php echo $r['from_person'];?></td> 
        <td><?php echo $r['to_person'];?></td>  
        <td><?php echo $r['money_transfer'];?></td>
        <td><?php echo $r['Date'];?></td> 
        <td><?php echo $r['time'];?></td> 
        </tr>
  
  <?php }} ?>
            </tbody>
</table>
            </div>     
        </section>    
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