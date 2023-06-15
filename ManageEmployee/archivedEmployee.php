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
    <h1 class="text-center emdetail">Archived Employee's</h1>
    <div class="container">
        <button class="btn btn-success my-4"><a href="viewEmployee.php" class="text-light">Add more to Archive</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>

            <tbody>
                <?php
                        include 'myconnection.php'; 
                        $q = "select * from `archivedemployee`";
                        $query = mysqli_query($con,$q);
                        while($result = mysqli_fetch_assoc($query)){
                  ?>
                <tr>
                    <td> <?php echo $result['id'];  ?> </td>
                    <td> <?php echo $result['name'];  ?> </td>
                    <td> <?php echo $result['phone'];  ?> </td>
                    <td> <?php echo $result['email'];  ?> </td>
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