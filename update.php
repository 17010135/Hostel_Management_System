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

      <h1>Enter the Students Details</h1> 
   <form name="insert" action="update.php" method="POST" >
     <table>
        <tr>            
             <td> Roll No : </td>
             <td> <input type="integer" name="roll"> </td>
        </tr>
  

         <tr>
             <td> Name : </td>
             <td> <input type="text" name="sname"> </td>
        </tr>
           <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>



          <tr>
              <td>Branch :</td>
               <td>
                <input type="text" name="branch"></td>
              
            </tr>

               <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>



               <tr>
             <td>Semester : </td>
             <td> <input type="int" name="sem"> </td>
        </tr>

             <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>


          <tr>
             <td>Email : </td>
             <td> <input type="text" name="email"> </td>
        </tr>

            <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>

             <tr>
             <td>Phone no : </td>
             <td> <input type="text" name="phone"> </td>
        </tr>
           <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>
            <tr>
             <td>Hostel Name : </td>
             <td> <input type="text" name="hostel"> </td>
        </tr>
            <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>
 
            <tr>
             <td> Room No.: </td>
             <td> <input type="int" name="room"> </td>
        </tr>
         <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>
           
            <tr>
             <td>Bed No.: </td>
             <td> <input type="int" name="bed"> </td>
        </tr>
        <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>

           <tr>
             <td>Almirah & Key No.: </td>
             <td> <input type="int" name="almirah"> </td>
        </tr> 
        <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>
 
           <tr>
             <td>Table & Key No.: </td>
             <td> <input type="int" name="tabno"> </td>
        </tr>

        <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>
         <tr>
             <td>Chair No. : </td>
             <td> <input type="int" name="chair"> </td>
        </tr>

       <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>


        <tr>
             <td>Other item : </td>
             <td> <input type="text" name="other"> </td>
        </tr>

          <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>

        <tr>
             <td>Date of Allotment  : </td>
             <td> <input type="text" name="date"> </td>
        </tr>
 
             <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
         <tr>
             <td>Password : </td>
             <td> <input type="text" name="pass"> </td>
        </tr>

          <tr>
             <td> <input type="Submit" value="Submit" name="login"> </td>
             
        </tr>


        </tr>
     </table>
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
	$sname=$_POST["sname"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $hostel=$_POST["hostel"];
        $room=$_POST["room"];
        $bed=$_POST["bed"];
        $almirah=$_POST["almirah"];
        $tabno=$_POST["tabno"];
        $chair=$_POST["chair"];
        $other=$_POST["other"];
        $date=$_POST["date"];
        $pass=$_POST["pass"];
if($sname)
{	
   $sql =<<<EOF
      UPDATE student set sname ='$sname' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($branch)
{	
   $sql =<<<EOF
      UPDATE student set branch ='$branch' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($sem)
{	
   $sql =<<<EOF
      UPDATE student set sem ='$sem' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($email)
{	
   $sql =<<<EOF
      UPDATE student set email ='$email' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($phone)
{	
   $sql =<<<EOF
      UPDATE student set phone ='$phone' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($hostel)
{	
   $sql =<<<EOF
      UPDATE student set hostel ='$hostel' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($room)
{	
   $sql =<<<EOF
      UPDATE student set room ='$room' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}

if($bed)
{	
   $sql =<<<EOF
      UPDATE student set bed ='$bed' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($almirah)
{	
   $sql =<<<EOF
      UPDATE student set almirah ='$almirah' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($tabno)
{	
   $sql =<<<EOF
      UPDATE student set tabno ='$tabno' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($chair)
{	
   $sql =<<<EOF
      UPDATE student set chairno ='$chair' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($other)
{	
   $sql =<<<EOF
      UPDATE student set other ='$other' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}
if($date)
{	
   $sql =<<<EOF
      UPDATE student set date ='$date' where roll='$roll';

EOF;
$ret = pg_query($db, $sql);
}

if($pass)
{	
   $sql =<<<EOF
      UPDATE student set pass ='$pass' where roll='$roll';

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



  
