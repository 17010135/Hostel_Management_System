<html>
<head>
<title>Login from Design</title>
      
     <link rel="stylesheet" type="text/css" href="new.css">
<body>
    <?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = doctor";
   $credentials = "user = postgres password=ravi";

   $db = pg_connect( "$host $port $dbname $credentials"  );
?>
     <div class="loginbox">
      <img src="avatar.png" class="avatar">
             <h1>Login Here</h1>
              <form action='mn.php' method='post'>
               <p>DoctorName</p>
               <input type="text" name="name" placeholder="ENTER username">
                <p>Password</p>
               <input type="password" name="password" placeholder="ENTER Password">
               <input type="submit" name="login" value="Login">   
               </form>

      </div>

</body>
 </head>
</html> 
