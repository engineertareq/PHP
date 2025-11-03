<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload Using Php Protocol</h3>
    <?php
    if(isset($_POST['upload'])){
        // echo "<pre>";
        // print_r($_FILES);
        // echo $_FILES['myfile']['size'];
        // echo $_FILES['myfile']['name'];
        $filename = $_FILES['myfile']['name'];
        $tmpfile =  $_FILES['myfile']['tmp_name'];
        $destination = "file/" . $filename;
        $FileSize =  $_FILES['myfile']['size']; // BYTE
        $maxSize = 100000;
        echo $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $allowedTypes = ["jpg", "jpeg", "png"];
        $errors =[];

        if($FileSize>$maxSize){
            $errors[] = "File is to large 1 mb is max file size" . "<br>";
        }
        if(!in_array($ext, $allowedTypes)){
             $errors[] = "<br>" . " File Type not allowed";
        }
        
        if(count($errors)>0){
            foreach($errors as $error){
            echo $error;
            }

        }
        
        else {
            move_uploaded_file($tmpfile, $destination);
            echo "<br>" . "Sucessfull";

        }
    }   
        

        
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
    <input type="submit" value="UPLOAD" name="upload">
    </form>
</body>
</html>