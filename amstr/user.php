<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $sql = "insert into `crud` (name,email,mobile,password) 
        values('$name','$email','$mobile','$password')";
        $result = mysqli_query($con, $sql);
        if($result){
            //echo "Data is inserted successfully";
            header('location:display.php');
        }
        else {
            echo "Data is not inserted successfully";
        }

    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label>Name</label>
                <input value="munna" type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input value="" type="text" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>