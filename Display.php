<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
        </button><br><br>
        <table>
            <thead>
                <tr>
                    <th scope="col">No:</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>


               <?php

            $sql="Select * from `crud`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $password=$row['password'];
                    echo ' <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-dander"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                  </td>
                </tr>';
             }
            }

            ?>
  
            </tbody>
        </table>

    </div>
  
</body>
</html>
