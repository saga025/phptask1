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
            <?php
                $con = mysql_connect('localhost', 'root'); 
                if (!$con) { die('Could not connect: ' . mysql_error()); } 
                mysql_select_db("saga_task", $con); 
                $result = mysql_query("SELECT * FROM images"); 
                echo "<table border='1' width='50%' >";
                echo "<tr><th>ID</th><th>Profile Picture</th><th>Name</th><th>Email</th><th>Contact</th></tr>" ;
                while($row = mysql_fetch_array($result)) { 
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td><img src='".$row[1]."'></td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>"; 
                }
                echo "</table>";
                mysql_close($con)
            ?>            
        </div>
    </center>

    <footer>
        <?php include('f.php'); ?>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>