 <!DOCTYPE html>
<html>
<title>Hostel Manegement</title>
<body>
 <div style="background-color:MediumSeaGreen;" > 
<img src="iiitm-logo.png" style="float:left;width="115px" height="90px">
 <img src="hindi.png">          
            

	<!--end-logo-->
	<!--start-top-nav-->
	<div class="top-nav" >
        <div style="float:right" >
	<ul>
        <li><a href="student.php">Student Login</a></li>
	<li class="active"><a href="login1.php">Home </a></li>					
	<li><a href="contact.php">Contact</a></li>
	</ul>					
	</div>
	<div class="clear"> </div>
	<!--end-top-nav-->
	</div>
	<!--end-header-->

<h2><a href="#">Indian Institute of Information Technology Senapati, Manipur</a></h2>
	
<!img src="iiitm.png" alt="iiitm" style="width:100%;">
 <!img src="iiitm.png" alt=" iiitm" style="width:100%; class="center"> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
{
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("iiitm.png");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: rgb(240, 240, 240);
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="bg-img">
  <form action="mn.php" class="container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="login">Login</button>
  </form>
</div>
 
<!div style="float:left" >

<h3> Essential Documents </h3><hr>
<ul>

<li> <a style="text-decoration:none;" href="./Document/leaveform.pdf" target="_blank"> Leave Application for Student</a></li>

<li> <a style="text-decoration:none;" href="./Document/hostelrules.pdf" target="_blank">  
General Rules for Hostel Residents  </a></li>

<li> <a style="text-decoration:none;" href="./Document/leaverules.pdf" target="_blank">  
Leave Rules  </a></li>

<li> <a style="text-decoration:none;" href="./Document/feeStructure(1).pdf" target="_blank">Fee Structure</a></li>


<li> <a style="text-decoration:none;" href="./Document/Bonafied.docx" target="_blank">Bonafied Formate</a></li>
<?php
	if($_POST["login"]){
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname = hostel";
   $credentials = "user = postgres password=root";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "<h1>Error : Unable to open database</h1>\n";
   } else {
      echo "<h1>Opened database successfully</h1>\n";
   }
	$name=$_POST["name"];
	$password=$_POST["password"];
   $sql =<<<EOF
      INSERT INTO login VALUES ('$name','$password');

      
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
}	
?>

</body>
</html> 
