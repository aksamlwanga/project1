<?php
    $conn = mysqli_connect("localhost","root","","project");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $stmt = $conn->prepare("INSERT INTO tenant(firstName,lastName,nin,email,password,username) VALUES (?, ?, ?,?,?,?)");
    // $stmt->bind_param("ssssss", $firstname, $lastname,$nin,$email,$password,$username);
    if (isset($_POST["submit"])){
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $nin = $_POST["nin"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $username = $_POST["username"];
    }
    
    // $stmt->execute();
   $qn= "INSERT INTO tenant(firstName,lastName,nin,email,password,username) VALUES( '$firstName', '$lastName','$nin','$email','$password','$username')";
    if(mysqli_query($conn,$qn)){
        echo "successful";
    }
?>