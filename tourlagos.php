<!DOCTYPE html>
<html lang="en">
 <head>
    <title>storytelling web application</title>
    <style>
    body{
    /* putting a background image*/
    background-image: url(https://www.dentons.com/-/media/images/website/background-images/offices/lagos/lagos.jpg);
    background-position: center;
    }


   .web-name h1{
    /*Styles the web name and giving 
    it posotion*/
    font-family: 'verdana';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 2%;
    text-align: center;
    color: orange;
    


   }
   .content{
    /* This styles the content on the
    web page*/
    width: 1000px;
    height: auto;
    margin: auto;
    color: black;
    position: relative;
    float: left;
    


   }


   .content .par{
    /* This is for styling the
    paragraph content*/
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: 'sans-serif';
    letter-spacing: 1.2px;
    line-height: 30px;
    color: white;
    font-size: xx-large;
    font-weight: bold;


   }


   .content h1{
    /* This is for the h1 content*/
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 4%;
    letter-spacing: 2px;
    
   }

   .content .cn{
    /* This is for styling the
    take a look button*/
    width: 160px;
    height: 40px;
    background-color: black;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
    }

   .content .cn a{
    /* This is for the styling
    the text on the button*/
    text-decoration: none;
    color: white;
    transition: .3s ease;
    
    

    }

    .content h2{
    /* This is for the h2 content 
    on the web page*/ 
    color: black;
    font-size: xx-large;
 }  
 </style>
  
 </head>
   <body class="tourlagos">
  <div class="web-name">
  <h1> TOURLAGOS </h1>
  </div>

  <div class="content">
  <h1>Do you love places that make you realize<br>how tiny your problems are?</h1>
  <p class="par">It is better to see something once than to<br>hear about it thousand times.</p>
  <h2>Find the perfect tourism centers in Lagos Nigeria<br>by reading stories from our visitors</h2>

  <button type="submit" class="cn"><a href="index.php">Take a look</a></button>
     </div>
     </body>
</html>