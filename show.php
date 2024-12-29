<?php

require_once "./db.php";
$db = new DB();
$student = $db->show($_GET['id']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/fontawesomepro/css/all.min.css" />
</head>
<body>

    <div class="container">
        <h3 class="text-center text-primary my-3">Student Detail</h3>
        <div class="row justify-content-center text-start">
            <div class="col-md-4">
                <p ><b>Name:</b> <?php echo $student->name ?></p>
                <p><b>Email:</b> <?php echo $student->email ?></p>
                <p><b>Date Of Birth:</b> <?php echo $student->dob ?></p>
                <p><b>Age:</b> <?php echo $student->age ?></p>
                <p><b>City:</b> <?php echo $student->city ?></p>

                <a href="index.php" class="btn btn-warning">Back</a>
                <a href='<?php echo "edit.php?id=$student->id" ?>' class="btn btn-primary">Edit</a>
                <a href='<?php echo "destroy.php?id=$student->id" ?>' class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                
            </div>

        </div>
    
    </div>

</body>
</html>


