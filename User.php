<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO crud(name,email,password) VALUES('$name','$email','$password')";
    $result=$con->query($sql);
    if($result){
       // print "Data inserted successfully";
       header('location:display.php');
    }else{
        print "data inserted unsuccessfully";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Crud operation</title>
</head>
<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off">
            </div><br><br>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" autocomplete="off">
            </div><br><br>
            <div class="form-group">
                <label type="background-color:yellow;">Password:</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password" autocomplete="off">
            </div><br><br>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
