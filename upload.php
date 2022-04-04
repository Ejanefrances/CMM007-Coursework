<?php
require_once "connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$dir = "images/";
$filename = $dir . basename($_FILES["file"]["name"]);
$uploadok = 1;
$file_type = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

if($uploadok = 0){
    echo "sorry upload was not successfull";
}
else{
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filename)){
        if(isset($_POST["name"])) $name = $_POST["name"];
        $picture = $filename;
        if(isset($_POST["caption"])) $caption = $_POST["caption"];

        $sql = "INSERT INTO upload (tourismcentre, fileupload, caption) VALUES ('$name', '$picture', '$caption')";
        $result=mysqli_query($db,$sql);
        header("location: home.php");
    }
    else{
        echo "Sorry could not upload";
        exit;
    }
}

}
?>