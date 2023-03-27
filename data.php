<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>MiChamp Entries</title>
<meta name="description"  content="A Phonics Based International Spoken English Programme for LKG, UKG and Std 1. Interested Schools can partner with MI Kids." />
<link href = "img/icon.png" rel = "icon"/>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #e7e9eb;
}
th{
    background-color:#15a6e0;
}

</style>
</head>
<body>
<table>
                              <thead>	
        <tr>
          <th scope="col">Time_stamp</th>
          <th scope="col">Sl.No</th>
          <th scope="col">School Name</th>
          <th scope="col">Place</th>
          <th scope="col">Principal</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Address</th>
        </tr>
<?php
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
 
                $sql="SELECT * FROM `michamp` order by s_no desc";
                $sl_no=0;
				$res=mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($res))
		{
			  
			?>	
				

      
		
		<tr>
            <td> <?php echo $row['submit_timestamp']; ?></td>
            <td> <?php echo ++$sl_no; ?></td>
            <td> <?php echo $row['school_name']; ?></td>
            <td> <?php echo $row['Place']; ?></td>
            <td> <?php echo $row['principalName']; ?></td>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['phone']; ?></td>
            <td> <?php echo $row['address']; ?></td>			
		</tr>
				<?php
			}?>
           
								  
                            </table>
</body>
</html>			
			