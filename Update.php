<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

   $sql="update `crud` set id='$id',name='$name',email='$email',password='$password' where id=$id";
    $result=$con->query($sql);
    if($result){
       // print "Update successfully";
       header('location:display.php');
    }else{
       die(mysqli_error($con));
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
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" value=<?php echo $name;?>>
            </div><br><br>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" value=<?php echo $email;?>>
            </div><br><br>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password" value=<?php echo $password;?>>
            </div><br><br>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
