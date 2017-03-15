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
                <?php
                    $username = "root";
                    $password = "";
                    $hostname = "localhost"; 

                    //connection to the database
                    $dbhandle = mysql_connect($hostname, $username);
                    if (!$dbhandle)
                    {
                        die('Could not connect: ' . mysql_error());
                    }
 
                    mysql_select_db("saga_task", $dbhandle);
 
                    $sql="INSERT INTO users (name, email,contact)
                    VALUES
                    ('$_POST[name]','$_POST[email]','$_POST[contact]')";
 
                    if (!mysql_query($sql,$dbhandle))
                    {
                        die('Error: ' . mysql_error());
                    }
                    $query="SELECT * FROM users";
                    $result=mysql_query($query);
                    mysql_close($dbhandle);
                ?>
                <table border="2">
                    <tr>
                        <th>SNO</th>
                        <th> NAME </th>
                        <th>EMAIL</th>
                        <th>PHONE NO</th>
                    </tr>
                    <?php

                        while($array= mysql_fetch_row($result))
                        {
                                print "<tr><td> $array[0] </td><td> $array[1] </td><td> $array[2] </td><td> $array[3] </td> </tr>";
                        }

                    ?>
                    </table>
                </div>
            </div>                  
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