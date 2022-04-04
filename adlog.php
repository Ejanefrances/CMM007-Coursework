<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <style>
      body{
      /* This is what gives the page a 
      background image and position to
      fit and cover the entire background*/
      background-image: url(signup.jpeg);
      background-position-x: 50%;
      background-position-y: 50%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
      .row{
      /* This pushes the email and password row 
      center  and top of the page and also
      determines the height and width of the border*/
      margin: auto;
      max-width: 500px;
      height: 700px;
      background: linear-gradient(to top, rgba(0,0,0,0,8)50%, rgba(0,0,0,0,8)50%);
      position: center;
      top: -20px;
      left: 870px;
      border-radius: 10px;
      padding: 10px;
      margin-top: 100px;
    }
      .row h1{
      /* This is for the first admin login
      row at the top. it stlyes 
      both the text and the border*/
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
      /* This styles the email and password row
      and makes it appear inline*/
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
      /* This also styles
      the email and password row*/
      outline: none;
    }
      :placeholder{
      /* This is what makes the text
      appear in white while inputing
      email and password*/
      color: white;
      font-family: 'Arial';
    }
      .btnn{
      /* This is for stlying the login button */
      width: 100px;
      height: 40px;
      background: #ff7200;
      border: none;
      margin-top: 150px;
      font-size: 18px;
      border-radius: 40px;
      cursor: pointer;
      color: white;
      transition: 4 ease;
    }
      .btnn:hover{
      /* This changes the button color
      when the pointer touches it*/
      background: white;
      color: orange;
    }
    </style>
  </head>
  <body>
    <form method="post" action="aadlog.php"> 
      <div class="form" method="post" action="aadlog.php"> 
        <div class="row">
          <h1>Admin Login</h1>
          <div class="col">
          </div>
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
          </div>
          <div class="col">
            <input type="password" name="password" class="form-control" placeholder="password" aria-label="password">
          </div>
          <button type="submit" class="btnn">Login</button>
       </div>
      </div>
    </form>  
 </body>
</html>