<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Task</title>
    <meta name="description" content="Campus Ambassadors">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/7fe139a1a7.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">

</head>

<body>
    <header id="navigation" class="navbar navbg navbar-fixed-top animated-header">
        <h1><?php include('h.php'); ?></h1>
    </header>

    <center>
        <div id="form">
            <div class="container">
                <div class="row">
                <br>
                <br>
                    <form action="insertfinal.php" enctype="multipart/form-data" method="post">
                        <div class="form-group col-lg-12">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail">Email</label>
                            <input type="email"  name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputPassword">Phone number</label>
                            <input type="text" name="contact" class="form-control " placeholder="9999999999">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>UPLOAD PROFILE PICTURE:</label>
                            <input name="uploadedimage" type="file" id="imgInp" onchange="loadFile(event);">
                            <br>
                            <img src="images.png" class="preview iconimage" id="preview" alt="No Image">
                        </div>
                        <button class="btn btn-warning" name="Upload Now" type="submit" value="Submit"> SUBMIT </button>
                    
                    </form>
                </div>
            </div>                  
        </div>
    </center>

    <footer class="navbar navbg navbar-fixed-bottom animated-header">
        <?php include('f.php'); ?>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>