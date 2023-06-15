<!DOCTYPE html>
<html>
<title> EmbraceWild.com</title>
<head> 
 <link rel="stylesheet" href="../styles/checkout.css"> <!--connecting external css file -->
 <script src="../JS/CHECKJS.js"> </script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</head>  <!--Creating header -->
  <body style= "background-image: url('../images/6.jpg');background-size:100%;background-repeat: no-repeat;background-size:cover;">  <!--inserting background image -->
  <header class="head">

   <div id="logo">
       <a href="../../IT21309038/html/welcome.html"><img class="logo" src="../images/logo.jpg" alt="Image Not Found" width="100px" height="100px"></a>
    </div>

   <div id="login">
       <a href=""><img class="login" src="../images/login.png" alt="Image Not Found" width="100px" height="100px"></a>
   </div>

   <div id="note">
       <p>Are You Passionate We Will Lead You</p>
       <p>Come Embrece The Wild</p>
   </div>

   <ul id="navi">
       <li id="navi"><a href = "../../IT21309038/html/welcome.html">Home</a></li>
       <li id="navi"><a href = "">Login</a></li>
       <li id="navi"><a href = "../../IT21312212/html/packages.html">Packages</a></li>
       <li id="navi"><a href = "../../IT21312380/html/Offer.html">Offers</a></li>
       <li id="navi"><a href = "../../IT21312212/html/cart.html">Cart</a></li>
       <li id="navi"><a href = "../../IT21250088/html/AboutUs.html">About Us</a></li>
       <li id="navi"><a href = "../../IT21250088/html/contactUs.html">Contact Us</a></li>
       <input type="text" placeholder="Search..">
   </ul>

</header>

<body style= "background-image: url('../images/6.jpg');background-size:100%;background-repeat: no-repeat;background-size: cover;">  <!--inserting background image -->

  
   <h1 class="c">Checkout</h1>
  

  <form  class="form" style= "background-image: url('../images/11.webp');background-size:100%;background-repeat: no-repeat;background-size: cover;" > <!--inserting background image to the form's background -->
    

  

    <div>
      <h2 class="bd"> Booking Details</h2>
</div>

  

<div class="det" id="tbl">
  
<?php 

$servername = "localhost";
  $username  = "root";
  $password = "";
  $database = "safari_trip";

  //create connection
  $conn = mysqli_connect($servername,$username,$password,$database);

  //check connection

  if(!$conn)
  {
   die("connection failed: ".mysqli_connect_error());
  
  }

  
$sql = "SELECT calc_amount,discount,final_amount   FROM payment  ORDER BY  ID desc limit 1";
 //get values from the database to this .php file

 $result = mysqli_query($conn,$sql);

  echo "<table id = 'records'>";
  

     if(mysqli_num_rows($result) >0) //if statement for check if there is at least one record
     {
      while($row = mysqli_fetch_assoc($result) )
      {
        
        echo "<th> Total Bill </th>";
        echo "<th> Discount </th>";
        echo "<th> Final Pay </th>";
        echo " <tr><td> RS  ",$row['calc_amount'];
        echo " <td> RS ",$row['discount'];
        echo " <td> RS ",$row['final_amount']; 
       // print the details of columns what want's for checkout page
       

      }
       echo "</table>";
     }

     else
     {
      echo "empty table";

     }

     mysqli_close($conn); //close the connection

    
   ?>
    </div>
    
    <h2> * Please read the above details carefully and click pay to pay</h2>
    <div>
     <input onclick="DisplayMsg()"  class="button" type="submit" id="submitBtn" value="PAY" >
     
     <!--submit button for confirm the payment -->
   </div>
 
  </form>
</div>
<img src="../images/gif.gif" alt="Computer man" style="width:900px;height:300px;margin-top:100px;margin-left:200px;">
<footer>
            <!--creating footer -->

            <div class="first">
                Find Us
                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
                <h4>Embrace The Wild</h4>
                <h5>This is the only place to make your exploring dream come true</h5>
                <h5>Tel - 0714985511</h5>
                <h5>Email - janinduudnaaa2000@gmail.com</h5>
            </div>
    
            <div class="third">
                Locate Us
                <a href="https://www.google.com/maps/place/Sri+Lanka+Institute+of+Information+Technology/@6.9146775,79.9707558,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae256db1a6771c5:0x2c63e344ab9a7536!8m2!3d6.9146775!4d79.9729445" style="color: white;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;"></i></a>
                <br><br><br><br><br><br><br>
                <h5>Created by MLB_06.01_04</h5>
            </div>
    
            <div class="second">
                <h3>Quick Links</h3>
                <a class="foot" href="Gallery.html">Gallery</a><br>
                <a class="foot" href="../../IT21250088/html/AboutUs.html">Privacy & Policy</a><br>
                <a class="foot" href="../../IT21250088/html/AboutUs.html">Terms & Conditions</a><br>
            </div>

    </footer>
</body>
</html>