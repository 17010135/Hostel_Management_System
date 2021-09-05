<!DOCTYPE html>
<?php
  
 if(isset($_POST['login']))
 {
   if($_POST['name']=="Ravi" && $_POST['password']=="123456")
   {
     
     echo '<html>
    <head>
     <style>
       
         body{
             background: skyblue;
             }     
      ul{
        list-style-type:none;
         
         padding: 0;
         width:200px;
         background-color: white;
         text-transform:uppercase;
          
    
   border-radius: 20px;
 

         }
          
         li>a{
          display:block;
          color:black;
          padding: 6px 6px;
          text-decoration:none;
     
    
    border-radius: 30px;
    

          }
           li>a:hover{
            background-color: #888;
            color:white;
    
    border-radius: 30px;
    

          
           }
          
     </style>
      
     </head>
      <h1>WELCOME TO MY PATIENT MANAGEMENT SYSTEM</h1><hr>
    <body>
         
  -    <ul>
          <li><a href="frm.php">New  Patients  Registration</a></li><hr>
          <li><a href="oldP.php">OPD</a></li><hr>
          <li><a href="Smedi.php">search  Medicine  name  by  symptoms</a></li><hr>
          <li><a href="Sphone.php">search  Patients  by  phone number</a></li><hr>
          <li><a href="Semail.php">search  Patients  Details  by  email</a></li><hr>
          <li><a href="Sdate.php">List  of  Patients  at  Date</a></li><hr>
          <li><a href="#Report">Patients  Report</a></li><hr>
          <li><a href="Supdate1.php">Update  Patient  list</a></li><hr>
       </ul>
    </body>
</html>';
   }
else
{
  echo   "hello world";
}
   
 }
?>
  
