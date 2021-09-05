<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>check Patient detail by date</title>
      <style>
       
         body{
             background: skyblue;
             }     
          
     </style>
 
</head>
<body>
<h2>Enter the Date</h2>

<form name="display" action="Sdate.php" method="POST" >
<input type="text" name="date" />
<input type="submit" value=" submit" ="" /></br></br>
</form>
</body>
</html>
<?php
$db = pg_connect("host=127.0.0.1 port=5432 dbname=doctor user=postgres password=ravi");
$result = pg_query($db, "SELECT * FROM patient where date = '$_POST[date]'");


echo "<table border='4'>

<tr>
<th>           </th>
<th>First Name</th>

<th>Last Name</th>

<th>Full Address</th>

<th>Gender</th>

<th>Age</th>

<th>Email Id</th>

<th>Phone number</th>

<th>Appointment to Doctor</th>

<th>Visiting Date</th>

<th>Visiting Time</th>

</tr>";

while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center
' width='200'>" . $row['Fname'] . "</td>";
echo "<td align='center' width='250'>" . $row['fname'] . "</td>";
echo "<td align='center' width='250'>" . $row['lname'] . "</td>";
echo "<td align='center' width='250'>" . $row['address'] . "</td>";
echo "<td align='center' width='250'>" . $row['gender'] . "</td>";
echo "<td align='center' width='250'>" . $row['age'] . "</td>";
echo "<td align='center' width='250'>" . $row['email'] . "</td>";
echo "<td align='center' width='250'>" . $row['phone'] . "</td>";
echo "<td align='center' width='250'>" . $row['doctor'] . "</td>";
echo "<td align='center' width='250'>" . $row['date'] . "</td>";
echo "<td align='center' width='250'>" . $row['time'] . "</td>";
echo "</tr>";}echo "</table>";?>
</div>
</body>
</html>
