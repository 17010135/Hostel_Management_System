<!DOCTYPE html>
<?php
  

   if($_POST['name']=="brijesh" && $_POST['password']==12345)
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
      <h1>WELCOME TO HOSTEL MANAGEMENT SYSTEM</h1><hr>
    <body>
         
     <ul>
          <li><a href="frm.php">New Students Registration</a></li><hr>
          <li><a href="oldP.php">Old Students Details</a></li><hr>
          <li><a href="Smedi.php">search  Students Details by  Roll Number</a></li><hr>
          <li><a href="Sphone.php">search  Students Details by  Phone Number</a></li><hr>
          <li><a href="Semail.php">search  Students  Details  by  Email</a></li><hr>
          <li><a href="Sdate.php">List  of Students  at  Date</a></li><hr>
          <li><a href="update1.php">Update Student Information</a></li><hr>
          <li><a href="delete.php">Delete  Students  list</a></li><hr>
          <li><a href="complain.php">Students Complain  </a></li><hr>
       </ul>
    </body>
</html>';
   }
else
{
  echo   "Invaild User Name or Password!!";
}
   
 
?>
  
