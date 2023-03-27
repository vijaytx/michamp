<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="MICHAMP - 2021"/>
<meta name="og:description" content="How good is the reading ability of your class II children? MICHAMP - an online live reading contest."/>
<meta property="og:image" content="https://cdn1.npcdn.net/images/1587451672logo.png"/>
<title>MiChamp Registration</title>
<meta name="description"  content="A Phonics Based International Spoken English Programme for LKG, UKG and Std 1. Interested Schools can partner with MI Kids." />
<link href = "img/icon.png" rel = "icon"/>
<link href="css/form_style.css" type="text/css" rel="stylesheet"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.min.css"/>
<script src="js/sweetalert.min.js"></script>
<script scr="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body background="img/bgt.png"> 
<div class="header">
  <div id = "left"><img src="img/logo.png" width="140vw" height="90vh"></div>
  <div id = "right"><h1 class="close">MiChamp Event<br>Registration</h1></div>
</div>
<div>
  <div id="form_div"><!-- style="background-image: url(img/bg2.png);" -->
   <form method="post" action="" name="myForm">
    <table id="employee_table" align=center>
      <div>
        <input class = "temp" type="text" name="school_name" placeholder="Enter School Name" required>
      </div>
      <div>
        <input class = "temp" type="text" name="Place" placeholder="Place" required>
      </div>
      <div>
        <input class = "temp" type="text" name="principalName" placeholder="Enter Principal's Name" required>
      </div>
      <div>
        <tr>
          <td><input class="email "type="email" name="email" placeholder="Principal's Email ID" required>
          <input class= "phone"type="text" name="phone" placeholder="Principal's Contact Number" required></td>
        </tr>
        <tr>
        <td><input class ="address" type="text" name="address" placeholder="Enter Address" required></td></tr>
      </div>
    </table>
    <input type="submit" name="submit_row" value="SUBMIT">
   </form>
  </div>
</div>

<?php
if(isset($_POST['submit_row']))
{
 $host="sql201.epizy.com";
 $username="epiz_29868600";
 $password="4J5yzT6vP2PY4rb";
 $databasename="epiz_29868600_mikids";
 // Create connection
$conn = new mysqli($host,$username,$password, $databasename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
 $school_name = $_POST['school_name'];
 $Place = $_POST['Place'];
 $principalName = $_POST['principalName'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
  
  if($school_name!="" && $Place!="" && $principalName!="" && $email!="" && $phone!="" && $address!="")
  {
    $sql = "insert into michamp(school_name, Place, principalName, email, phone, address) values('$school_name', '$Place', '$principalName', '$email', '$phone', '$address')";
     $result =  mysqli_query($conn,$sql);
    if($result==1)
    {
      echo "<script type='text/javascript'>swal({
      title: 'Thank you !..',
      type: 'success',
      text: 'To know more about mikids click ok',
      customClass: 'swal-wide'
      }, function() {
      window.open('https://www.mikids.in','_blank');
      })</script>";
    }
    else
    {
      echo "<script type='text/javascript'>swal({
      title: 'Sorry, Try again later !...',
      type: 'warning'
      }, function() {
      window.location = 'index.php';
      })</script>";
      }
  }        

}

</body>
</html>