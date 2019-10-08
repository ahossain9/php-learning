<?php
header( 'X-XSS-Protection:0' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 30px;
        }

    </style>
</head>

<body>
    <div class="container">
       <?php
        $allowedTypes = array(
            'image/png',
            'image/jpg',
            'image/jpeg'
        );
        if($_FILES['photo']){
            if(in_array($_FILES['photo']['type'], $allowedTypes) !== false){
                move_uploaded_file($_FILES['photo']['tmp_name'], "assets/img/". $_FILES['photo']['name']);
            }
        }
        ?>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="text-center pb-4">File Upload</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fname1">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="photo">Example file input</label>
                        <input type="file" class="form-control-file" name="photo" id="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
    <!--proper js-->
    <script src="assets/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
