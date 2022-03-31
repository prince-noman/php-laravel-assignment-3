<?php
include_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headline Creator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
/**
 * Taking Value
 */

if ( isset( $_POST['submit'] ) ) {

    //Get Value From Form
    $text         = $_POST['text'];
    $heading_type = $_POST['heading'];
    $color        = $_POST['color'];
    $fs           = $_POST['fs'];
    $alignment    = $_POST['alignment'];

// Form validation

    if ( empty( $text ) || empty( $heading_type ) || empty( $color ) || empty( $fs ) || empty( $alignment ) ) {
        $msg = setAlert( 'All fields are required!' );
    } else {
        $msgs = createHeading( $text, $heading_type, $color, $fs, $alignment );
    }

}

?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center text-primary">Create Your Heading</h2>
                    <hr>
                    <?php echo $msg ?? ''; ?>
                    <form action="" method="POST">
                    <div class="my-3">
                        <label for="">Enter Your Text</label>
                        <input name="text" type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Select Heading Tag</label>
                       <select name="heading" id="" class="form-control">
                           <option value="">-select-</option>
                           <option value="h1">H1</option>
                           <option value="h2">H2</option>
                           <option value="h3">H3</option>
                           <option value="h4">H4</option>
                           <option value="h5">H5</option>
                           <option value="h6">H6</option>
                       </select>
                    </div>
                    <div class="my-3">
                        <label for="">Color</label>
                        <input name="color" type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Font Size</label>
                        <input name="fs" type="text" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Alignment</label>
                       <select name="alignment" id="" class="form-control">
                           <option value="">-select-</option>
                           <option value="center">center</option>
                           <option value="right">right</option>
                           <option value="left">left</option>
                       </select>
                    </div>
                    <div class="my-3">
                        <input name="submit" type="submit" class="btn btn-primary">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
<?php echo $msgs ?? ''; ?>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>