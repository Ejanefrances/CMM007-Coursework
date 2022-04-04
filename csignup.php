<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Sign Up page</title>
   <style>
     body{
     /* This is for putting background
     image, its position and size on the
     web page*/
     background-image: url(background2.jpeg);
     background-position-x: 50%;
     background-position-y: 50%;
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
    }
     .row{
     /* This is what styles the rows
     giving it position, size and height*/
     margin: auto;
     max-width: 500px;
     height: 700px;
     background: linear-gradient(to top, rgba(0,0,0,0,8)50%, rgba(0,0,0,0,8)50%);
     position: center;
     top: -20px;
     left: 870px;
     border-radius: 10px;
     padding: 10px;
     margin-bottom: 100%;
    }
     .row h1{
     /* This is for styling the ctreate account
      box at the top*/
     width: 300px;
     font-family: sans-serif;
     text-align: center;
     color: #ff7200;
     font-size: 22px;
     background-color: #fff;
     border-radius: 40px;
     margin: 5px;
     padding: 10px;
     position: relative;
     margin-top: 80px;
    }
     .row input{
     /* This is for the rows, making it
     appear inline and transparent*/
     display: inline;
     width: 80%;
     height: 35px;
     background: transparent;
     border-top: none;
     border-right: none;
     border-left: none;
     color: #fff;
     font-size: 15px;
     letter-spacing: 1px;
     margin-top: 30px;
     font-family: sans-serif;
    }
     .row input:focus{
      /* This is also for styling the row*/
     outline: none;
    }
     :placeholder{
     /* This is making the text
     appear in white color when 
     typing*/
     color: white;
     font-family: 'Arial';
    }
     .btnn{
     /* This styles the sign up
     button*/
     width: 100px;
     height: 40px;
     background: #ff7200;
     border: none;
     margin-top: 50px;
     font-size: 18px;
     border-radius: 40px;
     cursor: pointer;
     color: white;
     transition: 4 ease;
    }
     .btnn:hover{
      /* This is what makes the
      sign up button change color when
      the cursor is placed on it*/
     background: white;
     color: orange;
    }
    </style>
 </head>
  <body>
    <form method="post" action="signup.php">
      <div class="row">
        <h1>Create an account</h1>
        <div class="col">
        <input type="text" name="firstname" class="form-contrl" placeholder="First name" aria-label="First name"> 
      </div>
        <div class="col">
      <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
        </div> 
      <div class="col">
       <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
      </div>
      <div class="col">
       <input type="password" name="password" class="form-control" placeholder="password" aria-label="password">
      </div>
         
      <select name="role" id="">
        <option value="">--Select Role--</option>
        <option value="reader">Reader</option>
        <option value="storyteller">Story teller</option>
      </select>
          
      <button type="submit" class="btnn">SignUp</button>

    </form>  
 </body>
</html>
