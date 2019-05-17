<?php
include "submitcomplaint.php";#posts information in the database

#read / get information from the complaint form
if(isset($_POST['name'])){

    $category=$_POST(['category']);
    $description=$_POST(['descrption']);

}




$target_dir = "complaints/photo/";
$target_file = $target_dir . basename($_FILES["photo"][photo]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//check if photo is actual image or fake
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["photo"]["complaint-photo"]);
    if($check !==false){
        echo "<p>image".$check["mime"]."</p>";
        $uploadOk=1;
    }else{
        echo "photo not image.";
        $uploadOk = 0;
    }
}

?>
