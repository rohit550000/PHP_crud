<?php
include 'header.php';
 include 'myconnection.php';
 if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    $q = " update employeetable set id=$id, name='$name', phone='$phone', email='$email' where id=$id ";
    $query = mysqli_query($con,$q);
    header('location:viewEmployee.php');
 }

 if(isset($_POST['cancel'])){
     header('location:viewEmployee.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center emdetail">Edit Employee Details</h1>
    <div class="container my-4  cont">
        <form method="post" class="addForm">

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" autocomplete="off" name="name" required>
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="number" class="form-control" placeholder="Enter phone no." autocomplete="off" name="phone" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" name="email" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg" name="submit">Edit</button>
                <button class="btn btn-danger btn-lg cancel"><a href="viewEmployee.php" class="text-light">Cancel</a></button>
            </div>


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>
</html>