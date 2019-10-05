<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>PHP</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 pt-5 mt-5">
                    <h2 class="text-center pb-4">User Form Sanitization</h2>
                    <div class="form-result pb-3">
                        <?php
                        $fname = "";
                        $lname = "";

                        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                            //$fname = htmlspecialchars( $_REQUEST['fname'] ); //fist way
                            //$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ; //second way
                            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING) ; //third way
                        }
                        if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                            //$lname = htmlspecialchars( $_REQUEST['lname'] ); //fist way
                            //$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS); //second way
                            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING); //third way
                        }
                        ?>

                        <?php if($fname):?>
                        <h6>First Name: <?php echo $fname;?></h6>
                        <?php endif?>
                        <?php if($lname):?>
                        <h6>Last Name: <?php echo $lname;?></h6>
                        <?php endif?>

                    </div>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Name"
                                value="<?php echo $fname;?>">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Name"
                                value="<?php echo $lname;?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div> <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

</html>