<?php
session_start();
if(!isset($_SESSION['documents']))
{
  //header("Location:./search.html");
}
$gottendocs=$_SESSION['documents'];
var_dump($gottendocs);
?>
<html lang="en">

<head>
    <title>Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-sm-12" style="background-color:#e6e6e6 ;border:1px;border-style: solid; border-color: #e6e6e6;">
            <h3>ifret</h3>
        </div>
        <div class="row">
          <?php foreach($gottendocs as $gotenitem)
              {
                  echo "<div class=\"col-sm-10\" style=\"font-family: Times New Roman, Times, serif; height: 30px;\">";
                    \\echo "<b>".$gotenitem['name']."</b>";
                    //link
                  echo "</div>";
              }  ?>
        </div>


</body>

</html>
