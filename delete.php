<!DOCTYPE html>
<html>
<head> 
<title></title>
      <style>
       
         body{
             background: skyblue;
             }     
          
     </style>
 
</head>
<body>
<h2>Enter the Roll Number</h2>

<form name="display" action="delete.php" method="POST" >
<input type="integer" name="roll" />
<input type="submit" value=" submit" name="login" /></br></br>
</form>
</body>
</html>

<?php
	
	if($_POST["login"]){
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname = hostel";
   $credentials = "user = postgres password=root";
 $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

        $roll=$_POST["roll"];
	

if($roll){
   $sql =<<<EOF
      DELETE from student where roll='$roll';
EOF;
$ret = pg_query($db, $sql);
}



   
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
	}
?>

