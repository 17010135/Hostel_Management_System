<!DOCTYPE html>
 <html>
 <head>
       <title>Register Form</title>
      <style>
       
         body{
             background: skyblue;
             }     
          
     </style>
    </head>
<body>
  <form action="student.php" class="container" method="POST">
    <h1>Login</h1>

    <label for="roll"><b>Username</b></label>
    <input type="int" placeholder="Roll No." name="roll" >

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" >

    <input type="submit" name="login" value="Login"> 
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
   
	$roll=$_POST["roll"];
	$pass=$_POST["pass"];
   $sql =<<<EOF
      select * from studentlogin where roll={$roll} AND pass='{$pass}';

      
EOF;

   $ret = pg_query($db, $sql);
   if(pg_fetch_row($ret)) {
      	header("location: text.php");
	//include("text.php");
   } else {
	echo "Roll No. or Password is Incorrect";     
   }
      
   
   pg_close($db);
}	
?>
