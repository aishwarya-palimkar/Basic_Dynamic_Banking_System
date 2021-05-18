<?php 
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
$select="SELECT id,first_name,last_name,email,contact,Balance FROM customers_data";
$select_result=mysqli_query($con,$select) or die(mysqli_error($con));
?>
<html>
    <head>
        <title>Customers</title>
        <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet"  type="text/css" href="css/style.php">
<meta name="viewport" content="width=device-width,intial-scale=1">
<style>
    table {
    margin: 0 auto;
    font-size:x-large;
    border: 3px solid black;}


h1 {
    text-align: center;
    color: darkblue;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT', 
    ' Calibri', 'Trebuchet MS', 'sans-serif';
}

td {
    background-color:while;
    border: 2px solid black;
}
th{
    font-size:x-large;
    color:red;
}
th,
td {
    font-size:large;
    border: 3px solid black;
    padding: 10px;
    text-align: center;
}

td {
    font-weight:bolder;
}  
h4{
    color:white;
} 

</style>
    </head>
    <body style="background-color:aqua;">
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
                        <li><a href="transaction.php"> <span class="glyphicon glyphicon-time"></span>Transaction History </a></li> 
                        <li><a href="AboutUs.php"><span class="glyphicon glyphicon-eye-open"></span>About Us</a></li>
                        <li><a href="bank.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        
        <section>
        <h1> Customers Data</h1>
        <table class="table table-striped table-bordered table-hover">
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>View Details</th>
        </tr>
        <?php while($r=mysqli_fetch_array($select_result)) {?>
        <tr>
        <td><?php echo $r['id'];?></td>
        <td><?php echo $r['first_name'];?></td> 
        <td><?php echo $r['last_name'];?></td>  
        <td><?php echo $r['contact'];?></td>
        <td><a class="btn btn-transparent" href="customer_detail.php?id=<?php echo $r['id'] ?>"><button type="button" class="btn btn-primary">Details</button></a></td>   
        </tr>
        <?php
        }
        ?>
        </table>
        </section>
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