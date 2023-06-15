<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View details of employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
            <h1 class="text-center emdetail">Employee Details</h1>
            <div class="d-flex justify-content-between">
                <button class="btn btn-success my-4"><a href="index.php" class="text-light">Add More employee</a></button>
                <button class="btn btn-dark my-4"><a href="archivedEmployee.php" class="text-light">View Archived employee's</a></button>
            </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Employee code</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Functionalities</th>
                </tr>
            </thead>

            <tbody>
                <?php
                        include 'myconnection.php'; 
                        $q = "select * from `employeetable`";
                        $query = mysqli_query($con,$q);
                        while($result = mysqli_fetch_assoc($query)){
                 ?>
                <tr>
                    <td> <?php echo $result['id'];  ?> </td>
                    <td> <?php echo $result['name'];  ?> </td>
                    <td> <?php echo $result['phone'];  ?> </td>
                    <td> <?php echo $result['email'];  ?> </td>
                    <td> 
                        <button class="btn-danger btn">
                            <a href="delete.php?id=<?php echo $result['id']; ?>&name=<?php echo $result['name']; ?>&phone=<?php echo $result['phone']; ?>&email=<?php echo $result['email']; ?>"
                             class="text-white">Delete</a>
                        </button>
                    </td>
                    <td> 
                        <button class="btn-primary btn">
                           <a href="edit.php?id=<?php echo $result['id']; ?>" class="text-white">Update</a>
                         </button>
                    </td>
                 </tr>
                <?php 
}
?>
            </tbody>
        </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    
</body>
</html>