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
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/fontawesomepro/css/all.min.css" />
</head>
<body>

    <div class="container">
        <h2 class="text-center text-primary my-5">Edit Student Info</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 rounded">
                <form action="update.php" method="POST">
                    <div class="row">
                        <div class="form-group col-md-12">                           
                            <input type="id" class="form-control" id="id" name="id" value='<?php echo $student->id ?>' hidden />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value='<?php echo $student->name ?>' placeholder="Enter Name..."/>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value='<?php echo $student->email ?>' placeholder="Enter Email..."/>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value='<?php echo $student->password ?>' placeholder="Enter Password..."/>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value='<?php echo $student->dob ?>' />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value='<?php echo $student->age ?>' placeholder="How old are you?" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="city" class="form-label">Date of Birth</label>
                            <input type="text" class="form-control" id="city" name="city" value='<?php echo $student->city ?>' placeholder="Where do you live?" />
                        </div>              

                    </div>              
                    
                    <div class="col-md-12 d-flex mt-3 justify-content-end">
                        <div class="">
                            <a href="index.php" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                        
                </form>

            </div>
        </div>
        
    
    </div>

</body>
</html>


