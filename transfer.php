<?php 
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
$select="SELECT id,first_name,last_name,email,contact,Balance FROM customers_data";
$send="SELECT from_person,to_person,id_transfer,time,Date FROM transactions";
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
     h4,h5,h2{
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
        </nav> <br><br><br><br><br>
   
<div class="container">
<div class="jumbotron" style="background-color:skyblue;">
        <h2 class="text-center"><b>Transfer Money To....</b></h2>

<?php

while($row = mysqli_fetch_assoc($select_result)) 
  {  
    $id=$row['id'];
    if($id==$_GET['id']){

?>
<div class="col d-flex justify-content-center">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-center"><b>Cash transfer from:</b> <?php echo  $row["first_name"];?> </h4>
            <h4 class="card-center"><b>Current balance:</b>  <?php echo  $row["Balance"];?> </h4>
        </div>
    </div>
</div>
<?php }}}?>
 
<?php 
$select1="SELECT id,first_name,last_name,email,contact,Balance FROM customers_data";

$select_result1 = mysqli_query($con, $select);
if(mysqli_num_rows($select_result1) > 0) 
{
    
?> 
<div class="col d-flex justify-content-center">
    <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-center"><b>Transfer to:</b></h4>
            <form method="POST" action="">
                <select name="customer_name">   
                  <option><h4>--SELECT--</h4></option> 

                  <?php
                  $z=""; 
                  $y=0; 
                  $change_id=0;
                  while($row1 = mysqli_fetch_assoc($select_result1)) 
                  {   
                      if($row1['id']==$_GET['id'])
                        {    
                          $z.=$row1["first_name"]; 
                          $y=$row1["Balance"]; 
                          $change_id=$row1['id'];
                        }
                  ?>
                  <option value="<?php echo $row1['first_name'] ?>"><h4><?php echo $row1['first_name'] ?></h4></option>
                  <?php } ?><input type="number" name="num" value="num" placeholder="Enter the value" required><br>
                  <input type="submit" name="submit" class="btn btn-success" >

                  <?php
                
                    
                    if(isset($_POST['submit']))
                    {
                      $transfer_salary=$_POST['num'];
                      $to=$_POST["customer_name"];
                      $updated_salary=$y-$transfer_salary; 
                      $salary_to_increase=0;
                      $select2="SELECT id,first_name,last_name,email,contact,Balance FROM customers_data";
                      $select_result2 = mysqli_query($con, $select2);
                      while($row5 = mysqli_fetch_assoc($select_result2)) 
                      {
                        if($row5['first_name']==$to){
                          $salary_to_increase=$row5['Balance'];
                        }
                      }  
                      if($updated_salary>200)
                      {
                            $select_result3 = " INSERT INTO transactions (from_person,to_person,money_transfer)
                                    VALUES ('$z','$to','$transfer_salary') ";
                                    if(mysqli_query($con, $select_result3))
                                    {   
                                        $total=$salary_to_increase+$transfer_salary;
                                        //echo "Records added successfully.";
                                        $select_result4="UPDATE customers_data SET Balance=$updated_salary WHERE id=$change_id";
                                        $select_result5 = "UPDATE customers_data SET Balance=$total WHERE first_name='$to'";
                                        if(mysqli_query($con, $select_result4))
                                        {
                                            echo "<br>Money transferred successfully.";
                                        } 
                                        else
                                        {
                                            echo "ERROR: Could not able to execute $select_result4. " . mysqli_error($con);
                                        } 
                                        if(mysqli_query($con, $select_result5))
                                        {
                                            //echo "<br>Money transferred successfully.";
                                        } 
                                        else
                                        {
                                            echo "ERROR: Could not able to execute $select_result5. " . mysqli_error($con);
                                        } 
                                        
                                    } else
                                    {
                                        echo "ERROR: Could not able to execute $select_result3. " . mysqli_error($con);
                                    }
                      }


                   }
                 }
                   ?> 
                   
                </select>
            </form>

        </div>
    </div>
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