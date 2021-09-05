<!DOCTYPE html>
<html lang="en">
<head>
 <style>
       
         body{
             background: skyblue;
             }     
          
     </style>
<meta charset="utf-8">
<title>Complains</title>
</head>
<body>
<h1>List of all student complains</h1>

<?php
$db = pg_connect("host=127.0.01 port=5432 dbname=hostel user=postgres password=root");
$result = pg_query($db,"SELECT * FROM query");

echo "<table border='1'>
    
<th>Roll No.</th>

<th>Name</th>

<th>Complain</th>

</tr>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['roll'] . "</td>";
echo "<td align='center' width='250'>" . $row['sname'] . "</td>";
echo "<td align='center' width='800'>" . $row['name'] . "</td>";

echo "</tr>";}echo "</table>";?>
</div>
</body>
</html>
