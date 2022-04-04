<!DOCTYPE html>
<html>
  
<head>
    <title>About us Page</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
  
    <style>
        *{
      margin:0; 
      padding:0;
    }
      #border{
      border-radius:9px;
    }
       
      .background{
       /* The background image on the border */  
       background-image: url(https://www.dentons.com/-/media/images/website/background-images/offices/lagos/lagos.jpg);
       background-size:cover; 
    }
      
      .firstsection{
      /* It is to make the height of the 
      viewport to be 100 */  
      height:100vh;
    }
      
     .box-main{
      /* This is to display the contact us and the 
      sentences below it to be displayed in flex */
      display:flex;
      justify-content:center;
      align-items:center;
      
      /* This is to display the text to have
      a color of white */  
      color:white;
      max-width:50%;
      
      /* Now we will set the margin to auto */
      /* This will make all the text to be 
      displayed at the center of the page */  
      margin:auto;
      
      /* This will make the text to display at
      the center of the page vertically */  
       height:80%;
    }
      /* This is the About Us class*/
     .firstHalf{    
      width:75%;
      display:flex;
      
      /* It is to specify the direction of 
      the flexible items */
      flex-direction:column;
      justify-content:center
    }
      
     .firstHalf img{    
      display:flex;
      border-radius:9050px;
    }
      
     /* This is used to make the text to 
      appear bigger */  
     /* Now we have used a font here to distinguish 
       itself from the next text */  
     .text-big{
      font-family: 'Piazzolla', serif;
      
     /* The text to have a style of bold */
     font-weight: bold;
      
     /* The size of the text to be appearing as
     bigger to distinguish itself from the text 
     in the class text-small */  
     font-size: 41px;
      
      /* The text to be aligned at center */  
      text-align:center;
    }
      
     .text-small{    
      font-family: 'Sansita Swashed', cursive;
      font-size: 18px;
      text-align:center;
    }
      
     /* This is used here in case if we want to 
     make the text appear at center */  
      .center{
       text-align: center;
    }   
     /* This is for the footer design*/  
     .footer{
       top: 100%;
       left: 0;
       position: sticky;
       width: 100%;
       background-color: orange;
       color: black;
       text-align: center;
       margin-top: auto;
     }

    </style>
</head>
  
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: orange;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TOURLAGOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                   <a class="nav-link active" href="AboutUs.php">About Us</a>
                </li>
               <li class="nav-item">
                 <a class="nav-link" href="fileupload1.php">Publish</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="firstpage.php">Logout</a>
               </li>
                <li class="nav-item">
                  <a class="nav-link" href="adlog.php">Manage Profile</a>
                </li>
             </ul>
            </div>
        </div>
      </nav>
  </nav>
    <section class="background firstsection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">About US</p>
  
                <p class="text-small">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi possimus amet consectetur, beatae dolorum optio, et similique obcaecati aliquam odio id fuga, sequi ab? Impedit eum cupiditate facere fugiat blanditiis!
                </p>
           </div>
        </div>
    </section>
  
   
    <footer class= "footer">
        <h3>Contact Us</h3>
        <p>Email: reubenugochi123@gmail.com</p>
        <p>Tel: +2348164465683</p>
    </footer>
</body>
  
</html>
  
   