<!DOCTYPE html>
<html>
   
    <head>
    <title>Sign Up</title>
      <style>
       body{
         background: skyblue;
        }
        .wrap{
              width: 320px;
              margin:auto;
              background: pink;
              margin-top: 5px;
              padding:5px;
         }
           from{
                
                 padding: 5px;
                 font-family:arial;
                 border:1px dotted white;
                 margin:5px;
        }
        h2{
             text-align:center;
             background:orange;
             color:white;
             padding:0px;
             border-radius:5px;
        }
          input{
                padding:5px;
                margin:5px;
                border-radius:5px;
                 border:none;
        }
       input[type=text], input[type=email], input[type=number], input[type=password] 
       {width:90%;}
       input[type=submit]{width:90%; background:orange; cursor:pointer; font-size:20px; font-weight:bold;  color:white;}
             input[type=submit]:hover{
                  background:blue; 
        }
          select{
                  padding:5px;
                   width:50%;
                    border-radius:5px;
         }
          
        </style>
    </head>
    <body>
     <div class ="wrap"> 
        <from>
         <h2>Sign Up</h2>
         <input type="text" name="yourname" placeholder="Your Name">
         <input type="email" name="email" placeholder="Your Email">
          <input type="number" name="mnumber" placeholder="Mobile Number">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="conformpassword" placeholder="Conform Password">
               <br>
               <br>
           <span style ="font-size:18px;"> Date of Birth</span>
           <br>
          
           <select name ="DoBmonth">
              <option>Month</option>
              <option value ="january">January</option> 
              <option value ="february">February</option>
           </select>
              
           <select name ="DoBmonth">
              <option>Day</option>
              <option value ="1">1</option> 
              <option value ="2">2</option>
           </select>
            
           <select name ="DoBmonth">
              <option>Year</option>
              <option value ="2000">2000</option> 
              <option value ="1990">1990</option>
           </select>
            <br>
            <br>
           <input type ="radio" name="gender" value="male"> Male
           <input type="radio" name="gender" value="female"> Female
            <br>
             <input type="checkbox"> I Agree to The Terms of Use
            <input type="submit" value="Submit Now"> 
       </from>
     </div>
    </body>
</html>
