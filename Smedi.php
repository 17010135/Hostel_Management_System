<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>check Student detail by Roll Number</title>
      <style>
       
         body{
             background: skyblue;
             }     
          
     </style>
 
</head>
<body>
<h2>Enter the Roll Number</h2>

<form name="display" action="Smedi.php" method="POST" >
<input type="text" name="roll" />
<input type="submit" value=" submit" name="" /></br></br>

</form>
</body>
</html>
<?php
$db = pg_connect("host=127.0.0.1 port=5432 dbname=hostel user=postgres password=root");
$result = pg_query($db, "SELECT * FROM student where roll = '$_POST[roll]'");

echo "<table border='4'>


<th>Roll No.</th>

<th>Name</th>

<th>Branch</th>

<th>Semester</th>

<th>Email</th>

<th>Phone No.</th>

<th>Hostel Name</th>

<th>Room No.</th>

<th>Bed No.</th>

<th>Almirah & Key No.</th>

<th>Table & Key No.</th>

<th>Chair No.</th>

<th>Other item</th>

<th>Date of Allotment</th>

<th>Password</th>

</tr>";

while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center
' width='200'>" . $row['roll'] . "</td>";
echo "<td align='center' width='250'>" . $row['sname'] . "</td>";
echo "<td align='center' width='250'>" . $row['branch'] . "</td>";
echo "<td align='center' width='250'>" . $row['sem'] . "</td>";
echo "<td align='center' width='250'>" . $row['email'] . "</td>";
echo "<td align='center' width='250'>" . $row['phone'] . "</td>";
echo "<td align='center' width='250'>" . $row['hostel'] . "</td>";
echo "<td align='center' width='250'>" . $row['room'] . "</td>";
echo "<td align='center' width='250'>" . $row['bed'] . "</td>";
echo "<td align='center' width='250'>" . $row['almirah'] . "</td>";
echo "<td align='center' width='250'>" . $row['tabno'] . "</td>";
echo "<td align='center' width='250'>" . $row['chairno'] . "</td>";
echo "<td align='center' width='250'>" . $row['other'] . "</td>";
echo "<td align='center' width='250'>" . $row['date'] . "</td>";
echo "<td align='center' width='250'>" . $row['pass'] . "</td>";

echo "</tr>";}echo "</table>";?>

</div>
</body>
</html>
