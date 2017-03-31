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
    <div>
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
  //insertion

 function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
   
// Create directory if it does not exist 
     $desired_dir="img";
if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);  }  
   
if (!empty($_FILES["uploadedimage"]["name"])) {

  $file_name=$_FILES["uploadedimage"]["name"];
  $temp_name=$_FILES["uploadedimage"]["tmp_name"];
  $imgtype=$_FILES["uploadedimage"]["type"];
  $ext= GetImageExtension($imgtype);
  $imagename=date("d-m-Y")."-".time().$ext;
  $target_path = "img/".$imagename;
  

if(move_uploaded_file($temp_name, $target_path)) {

  $query_upload="INSERT into images (path,name,email,contact) VALUES 

('".$target_path."','$_POST[name]','$_POST[email]','$_POST[contact]')";
  mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
  echo "uploaded"; 
  
}else{

   exit("Error While uploading image on the server");
} 
}

include ("displayim.php");
mysql_close($dbhandle);
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
