<?php

require_once __DIR__."/vendor/autoload.php";

use App\Database;

$db = new Database();
$students = $db->index();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
</head>
<body>

    <div class="container">
        <h3 class="text-center text-success m-3">Students Dashboard</h3>
        <a href="create.php" class="btn btn-primary my-2">Create New Student</a>
        <table class="table table-striped table-bordered">
            <thead class="table-success text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DATE OF BIRTH</th>
                <th scope="col">AGE</th>
                <th scope="col">CITY</th>
                <th scope="col">CREATED_AT</th>
                <th scope="col">UPDATED_AT</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                
            <?php foreach($students as $idx=>$student): ?>
            <tr>    
                <th scope="row"><?php echo ++$idx; ?></th>
                <td><a class="text-decoration-none" href='<?php echo "show.php?id=$student->id;" ?>'><?php echo $student->name ?></a></td>
                <td><?php echo $student->email ?></td>
                <td><?php echo $student->dob ?></td>
                <td><?php echo $student->age ?></td>
                <td><?php echo $student->city ?></td>
                <td><?php echo $student->created_at ?></td>
                <td><?php echo $student->updated_at ?></td>
                <td>
                    <a href='<?php echo "edit.php?id=$student->id" ?>' class="btn btn-primary btn-sm" ><i class="bi bi-pencil-square"></i></a>
                    <a href='<?php echo "destroy.php?id=$student->id" ?>' class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>    
                <?php endforeach; ?>
            

            </tbody>
        </table>

    </div>

</body>
</html>