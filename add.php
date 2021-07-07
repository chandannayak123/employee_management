<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>

    <!-- ***************nav heading*************** -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Employee management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="employee.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">+Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container border border-3 border-success bg-dark rounded text-light my-3 p-3">
        <form action="add.php" method="post">
            <div class="name">
                <div>Name</div>
                <div><input type="text" name="name"></div>
            </div>
            <div class="role">
                <div>role</div>
                <div><input type="text" name="role"></div>
            </div>
            <div class="mobile">
                <div>mobile</div>
                <div><input type="text" name="mobile"></div>
            </div>
            <div class="manager">
                <div>manager</div>
                <div><input type="text" name="manager"></div>
            </div>
            <div class="Office">
                <div>Office</div>
                <div><input type="text" name="office"></div>
            </div>
            <div class="date">
                <div>Date</div>
                <div><input type="date" name="time"></div>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-success my-3">Submit</button>
            </div>
        </form>
    </div>


    <?php

        $conn = mysqli_connect('localhost', 'root', '', 'employee');
        if(!$conn){
            die('connection error :' . mysqli_connect_error());
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $role = $_POST['role'];
            $mobile = $_POST['mobile'];
            $manager = $_POST['manager'];
            $office = $_POST['office'];
            $time = $_POST['time'];

            $sql = "INSERT INTO `info`(`name`, `role`, `mobile`, `manager`, `office`, `time`) VALUES ('$name','$role','$mobile','$manager','$office','$time')";
            $result = mysqli_query($conn, $sql);
        }

        ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>