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
 * Form Valiadation
 */

if ( isset( $_POST['convert'] ) ) {
    $amount      = $_POST['amount'];
    $convertFrom = $_POST['convertFrom'];
    $convertTo   = $_POST['convertTo'];

    if ( empty( $amount ) || empty( $convertFrom ) || empty( $convertTo ) ) {
        $msg = setAlert( 'All fields are required!' );
    } else {
        $msg = setAlert( currencyConverter( $amount, $convertFrom, $convertTo ), 'success' );
    }

}

?>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Advance Currency Converter</h2>
                        <hr>
                        <?php echo $msg ?? ''; ?>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">Amount</label>
                                <input name="amount" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Convert From</label>
                                <select name="convertFrom" id="" class="form-control">
                                    <option value="">-select-</option>
                                    <option value="BDT">BDT</option>
                                    <option value="USD">USD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="Pound">Pound</option>
                                    <option value="Euro">Euro</option>
                                    <option value="Won">Won</option>
                                </select>
                            </div>

                            <div class="my-3">
                                <label for="">Convert To</label>
                                <select name="convertTo" id="" class="form-control">
                                    <option value="">-select-</option>
                                    <option value="BDT">BDT</option>
                                    <option value="USD">USD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="Pound">Pound</option>
                                    <option value="Euro">Euro</option>
                                    <option value="Won">Won</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <input name="convert" type="submit" class="btn btn-primary" value="Convert Now">
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