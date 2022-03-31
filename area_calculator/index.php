<?php
include_once './functions.php'
;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/4ef435b7e3.js"></script>
</head>
<body>

<?php

if ( isset( $_POST['calculate'] ) ) {

    $type   = $_POST['type'];
    $length = $_POST['length'];
    $width  = $_POST['width'];

    if ( $type == 'Circle' || $type = 'Square' ) {

        if ( empty( $_POST['length'] ) || empty( $_POST['type'] ) ) {
            $msg = setAlert( "Missing Area Type or Length field!" );
        } else {
            $msg = setAlert( areaCalculate( $type, $length, $width ), "success" );
        }

    } else {

        if ( empty( $_POST['length'] ) || empty( $_POST['width'] ) || empty( $_POST['type'] ) ) {
            $msg = setAlert( "Missing Area Type or Length or Width field!" );
        } else {
            $msg = setAlert( areaCalculate( $type, $length, $width ), "success" );
        }

    }

}

;?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-primary text-center"><i class="fa fa-calculator" aria-hidden="true"></i> Area Calculator </h1>
                    <hr>
                    <?php echo $msg ?? ''; ?>
                    <form action="" method="POST">

                    <div class="my-3">
                        <label for="">Area Type</label>
                        <select class="form-control" name="type" id="">
                            <option value="">-select-</option>
                            <option value="Rectangle">Rectangle</option>
                            <option value="Square">Square</option>
                            <option value="Circle">Circle</option>
                            <option value="Triangle">Triangle</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="">Length (m)</label>
                        <input name="length" class="form-control" type="number">
                    </div>
                    <div class="my-3">
                        <label for="">Width (m)</label>
                        <input name="width" class="form-control" type="number">
                    </div>
                    <div class="my-3">
                        <input name="calculate" class="btn btn-primary" type="submit" value="Calculate">
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>