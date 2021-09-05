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
      <h1>Enter the Patient Details</h1> 
   <form name="insert" action="frm.php" method="POST" >
     <table>
        <tr>
             <td> First Name : </td>
             <td> <input type="text" name="fname"> </td>
        </tr>
        <tr>
             <td>Last Name : </td>
             <td> <input type="text" name="lname"> </td>
        </tr>
         <tr>
             <td>Address : </td>
             <td> <input type="text" name="address"> </td>
        </tr>
            <tr>
              <td>Gender :</td>
               <td>
                <input type="text" name="gender"></td>
              
            </tr>
               <tr>
             <td>Age : </td>
             <td> <input type="text" name="age"> </td>
        </tr>
          <tr>
             <td>Email : </td>
             <td> <input type="text" name="email"> </td>
        </tr>
             <tr>
             <td>Phone no : </td>
             <td> <input type="phone" name="phone"> </td>
        </tr>
             
             <tr>
             <td>Appointment to Doctor : </td>
             <td> <input type="text" name="doctor"> </td>
        </tr>
            
            <tr>
             <td>Visiting date: </td>
             <td> <input type="text" name="date"> </td>
        </tr>
              <tr>
             <td>Visiting Time : </td>
             <td> <input type="text" name="time"> </td>
        </tr>
              <tr>
             
             <td> <input type="Submit" value="Submit" name=""> </td>
        </tr>
     </table>
   </form>
 </body>
 </html>
<?php
$db = pg_connect("host=127.0.0.1 port=5432 dbname=project user=postgres password=root");
$query = "INSERT INTO patient VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[address]', '$_POST[gender]', '$_POST[age]', '$_POST[email]','$_POST[phone]', '$_POST[doctor]', '$_POST[date]', '$_POST[time]')";
$result = pg_query($query); 
if(!$retesult) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
	}
?>  
