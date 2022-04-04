<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    body{
    /* This is for the background image 
    how to position it*/
    background-image: url(background2.jpeg);
    background-position-x: 50%;
    background-position-y: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    }
    </style>


</head> 

<body>

   <form method="post" action="upload.php" enctype="multipart/form-data">
      <div class="container mt-5">
    
            <div class="row">
                <div class="col-md-4">
                <h4><label for="name">Tourism Centre</label></h4>
            </div>
                <div class="col-md-7">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
           
            <div class="row mt-3">
                <div class="col-md-4">
                  <h4><label for="Upload"> File Upload</label></h4>
                </div>
                <div class="col-md-4">
                    <input type="file" name="file" id="Upload" class="form-control">
                </div>
            </div>
        
           <div class="row mt-5">
                <div class="col-md-4">
                <h4><label for="caption">Caption:</label></h4>
            </div>
            <div class="col-md-7">
                <textarea name="caption" id="caption" cols="90" rows="10" class="form-control"></textarea>
            </div>
            </div>
            <div class="row mt-5">
              <div class="col-md-4">
              <button class="bg-secondary">Publish</button>
             </div>
            </div>
        </div>
    </form>

    <div class="errormsg">
    
            <?php
        if (isset($_GET["error"])) {
        
            if($_GET["error"]=="none") {
            echo "<p> Successful </p>" ;
            }

            else if  ($_GET["error"]== "fileTypeError"){ 
                echo "<p>Fields are required ! </p>" ;
            }

        }
        ?>
    </div>
    </div>

  
</body>

</html>