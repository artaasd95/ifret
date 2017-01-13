<?php
session_start();
if(!isset($_SESSION['documents']))
{
  //header("Location:./search.html");
}
$gottendocs=$_SESSION['documents'];
foreach ($gottendocs as $doc)
{
  var_dump($doc);
}
?>

<html lang="en">

<head>
    <title>Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="./jquery-3.1.1.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="./bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-sm-12" style="background-color:#e6e6e6 ;border:1px;border-style: solid;
         border-color: #e6e6e6;">
            <h3>ifret</h3>
        </div>
        <div class="col-sm-10">
  				<div class="form-group" style="margin-top: 15px" >
                <h4>File name: <?php echo $doc['filename'];  ?>
                <a href=<?php echo "\"".$doc['filepath']."\""; ?>>
                  <span class="glyphicon glyphicon-file"></span></a></h4>
        </div>


</body>

</html>
