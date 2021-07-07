<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .data{
      display: flex;
      flex-direction: column-reverse;
    }
    .container {
        display: flex;
        justify-content: space-between;
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">+Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>







<div class="data">
<?php

$conn = mysqli_connect('localhost', 'root', '', 'employee');
if(!$conn){
  die('connection error :' . mysqli_connect_error());
}

$sql = "SELECT * FROM `info`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);




if($num>0){
  while($row = mysqli_fetch_assoc($result)){
    $name = $row['name'];
    $role = $row['role'];
    $mobile = $row['mobile'];
    $manager = $row['manager'];
    $office = $row['office'];
    $time = $row['time'];
    echo '<div class="container border border-3 border-success bg-dark rounded text-light my-3 p-3">
    <div>
    <p>Name : '. $name .'</p>
    <p>Role : '. $role .'</p>
    <p>mobile : '. $mobile .'</p>
    </div>
    <div>
    <p>manager : '. $manager .'</p>
    <p>office : '. $office .'</p>
    <p>joining date : '. $time .'</p>
    </div>
              </div>';
  }

}
else{
  echo '<p class="alert alert-warning">No data found</p>';
}
?>
</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>