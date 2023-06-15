<?php
include 'header.php';
$filledEmpty='';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
    if (empty($_POST["name"]) || empty($_POST["phone"]) || empty($_POST["email"])) {
        $filledEmpty = "please fill all the required fields";
    }else {
        include 'myconnection.php';
        $q = " INSERT INTO `employeetable`(`name`,`phone`,`email`) VALUES ( '$name', '$phone', '$email' )";
        $query = mysqli_query($con,$q);
    if($query){
        echo "<script>
                 alert('Employee details stored successfully'); window.location.href='viewEmployee.php'
              </script>";
    }else{
        die(mysqli_error($con));
    }
  }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="text-center emdetail">Add Employee Details</h1>
    <div class="container my-4  cont">
        <form method="post" class="addForm">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" autocomplete="off" name="name">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="Enter phone no." autocomplete="off" name="phone">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" name="email">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </div>

                <div class="text-center">
                    <span class="error text-danger h2"><?php echo $filledEmpty;?></span>
                </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>