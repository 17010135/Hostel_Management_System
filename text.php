<!DOCTYPE html>
<html>
<body>
<head>
<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 20%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Responsive Form</h2>


<div class="container">
  <form name="insert" action="text.php" method="POST" >
  <div class="row">
    <div class="col-25">
      <label for="subject">Roll No. :</label>
    </div>
    <div class="col-75">
      <input type="integer" name="roll" placeholder="Write Roll No .." style="height:20px">
    </div>
   </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Name :</label>
    </div>
    <div class="col-75">
      <input type="text" name="sname" placeholder="Write name .." style="height:10px">
    </div>
</div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea  name="abc" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <td> <input type="Submit" value="Submit" name="login"> </td>
  </div>
  </form>
</div>

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
  $sname=$_POST["sname"];
  $name=$_POST["abc"];

$sql1 =<<<EOF
      select * from studentlogin where roll=$roll;

      
EOF;
$ret1=pg_query($db, $sql1);
if(pg_fetch_row($ret1)) {
  $sql =<<<EOF
      INSERT INTO query VALUES ($roll,'$sname','$name');
 

EOF;
   $ret = pg_query($db, $sql);
   pg_query($db, $sql1);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
	}
else{
	echo "Enter correct Roll No...";
}
   pg_close($db);
	}
?>


