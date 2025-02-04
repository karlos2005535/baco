<?php
require 'connection.php';
if(isset ($_POST["Submit"])){
    $name = $_POST ["Name"];
    if($_FILES["image"]["error"] === 4) {
      echo
      "<script>alert('image Does Not Exist');</script>"
      ;
    }
    else{
        $fileName : $_FILES["image"]["name"];
        $fileSize : $_FILES["image"]["size"];
        $tmpName : $_FILES["image"]["tmp_name"];
        $validImageExtantion = ['jpg','jpeg','png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo
            "<script> alert('Image Size To large'); </script>"
        ;
        }
        else{
            $newImegaName = uniqid();
            $newImegaName = '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/', $newImegaName);
            $quey ="INSRT INTO"
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type= "file" name="image" id="image"  accept=".jpg, .jpeg, .peng, " value=""> <br><br>
    <button type = "submit" name="button">Submit</button>
    <br>
    <a href="data.php">Data</a>
</body>
</html>