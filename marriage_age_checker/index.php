<?php
include_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php

/**
 * Form Validation
 */

if ( isset( $_POST['check'] ) ) {
    //Get Value
    $name   = $_POST['name'];
    $byear  = $_POST['byear'];
    $gender = $_POST['gender'] ?? '';

// Form Validation
    if ( empty( $name ) || empty( $byear ) || empty( $gender ) ) {
        $msg = setAlert( "All fields are required!", "danger" );
    } else {
        $msg = marriageChecker( $name, $byear, $gender );
    }

}

?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- <a href="?profile=Prince Noman&skill=Laravel Developer">Click</a> -->
                        <h2>Marriage Checker</h2>
                        <hr>
                        <?php echo $msg ?? ''; ?>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Birth Year</label>
                                <input name="byear" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Gender</label>
                                <br>
                                <input name="gender" type="radio" value="Male" id="Male"><label for="Male">Male</label>
                                <br>
                                <input name="gender" type="radio" value="Female" id="Female"><label for="Female">Female</label>
                            </div>
                            <div class="my-3">
                                <input name="check" type="submit" class="btn btn-primary" value="Check Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>