<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .file-icon img {
        width: 70px;
        height: 70px;
        cursor: pointer;
    }

    .file-icon input[type="file"] {
        display: none;
    }


    .preview img {
        width: 100%;
        border: 10px solid #fff;
        display: none;
    }
    </style>
</head>

<body>

    <?php

/**
 * Form Submit
 */

if ( isset( $_POST['submit'] ) ) {

    // full array
    $file = $_FILES['photo'];

// Get file info
    $file_name     = time() . "_" . rand() . "_" . $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_type     = $file['type'];

    $allowedTypes = [
        'image/png',
        'image/jpg',
        'image/jpeg',
        'image/gif',
    ];

    if ( in_array( $file_type, $allowedTypes ) !== false ) {
        move_uploaded_file( $file_tmp_name, "./image/" . $file_name );
    } else {
        $msg = "<p class = \"alert alert-danger d-flex justify-content-between\">File type is not matched<button class=\"btn-close\" data-bs-dismiss= \"alert\"></button></p>";
    }

}

?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div>
                            <h1>File Upload System</h1>
                            <p>Please upload your photo...</p>
                        </div>
                        <div class="preview">
                            <img id="preview_photo" class="shadow" src="" alt="">
                            <?php echo $msg ?? ''; ?>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="my-5 file-icon">
                                <input name="photo" id="fileUpload" type="file" class="form-control">
                                <label for="fileUpload"><img src="https://static.thenounproject.com/png/1156518-200.png"
                                        alt=""></label>
                            </div>
                            <input name="submit" type="submit" value="Upload" class="form-control btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
    $('#fileUpload').change(function(e) {
        $('#preview_photo').show();
        let file = URL.createObjectURL(e.target.files[0]);
        $('#preview_photo').attr('src', file);
    })
    </script>
</body>

</html>