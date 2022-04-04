<?php
require_once "connection.php";
if ($db->connect_error){
  die("connection failed: ".$db->connect_error);
}

  $sql = "SELECT * FROM upload";
  $results=mysqli_query($db,$sql);
  if(mysqli_query($db, $sql)) {

  }

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <style>
         body{
          min-height: 100vh; 
         }
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
                <a class="nav-link active"  href="AboutUs.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fileupload1.php">Publish</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tourlagos.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adlog.php">Manage Profile</a>
              </li>
            </div>
        </div>
      </nav>
  </nav>
      <header>
      <h1 class="text-center mt-5">Tour in Lagos</h1>
      </header>
<div class="container mt-5">
    <div class="row">

    <?php
     foreach($results as $result){?>

      <div class="col">
         <img src="<?php echo $result['fileupload']; ?>" class="img-fluid" alt="...">  
         <h1><?php echo $result ['tourismcentre']; ?></h1>
         <P><?php echo $result['caption']; ?></P>
       </div>
       <?php }?>
       
      <div class="col">
          <img src="museum.jpg" class="img-fluid" alt="...">
          <h3>NATIONAL MESEUM</h3>
          <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet dele enim asperiores<br> a laboriosam dolores tempora, tempore<br> totam eius. Suscipit voluptas asperiores nisi explicabo delectus impedit esse accusamus.</P>
       </div> 
      <div class="col">
         <img src="nationaltheatre.jpg" class="img-fluid" alt="...">
         <h3>NATIONAL THEATRE</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipis<br>icing elit. Possimus odio dolores debitis id repellendus, maxime expedita amet optio quo asperiores fugit obcaecati <br>provident, maiores quas quidem aspernatur magnam reprehenderit inventore.</p>
         </div>
       </div>
    
      <footer class= "footer">
        <h3>Contact Us</h3>
        <p>Email: reubenugochi123@gmail.com</p>
        <p>Tel: +2348164465683</p>
     </footer>
    
  
     

</body>
</html>