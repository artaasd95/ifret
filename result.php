<?php
session_start();
if(!isset($_SESSION['documents']))
{
  //header("Location:./search.html");
}
$gottendocs=$_SESSION['documents'];
$pointer=$_SESSION['pointer']; ?>

<html lang="en">

<head>
    <title>Results</title>
    <meta charset="utf-8">
    <meta name="result" content="result of ifret">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="./jquery-3.1.1.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="./bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>

    <div class="container">
        <div class="col-sm-12" style="background-color:#e6e6e6 ;border:1px;border-style: solid;
         border-color: #e6e6e6;">

            <h3>ifret</h3>
            <!-- <div id="custom-search-input">
                <div class="input-group col-md-6">
                    <input type="text" name="query" class="search-query form-control" placeholder="Search in ifret" />
                    <span class="input-group-btn">
                                <button class="btn btn-danger" type="submit">
                                    <span class=" glyphicon glyphicon-search"></span>
                    </button>

                    </span>
                </div>
            </div> -->
        </div>


<?php
$list_of_docs=array();
for ($i=0; $i < $pointer; $i++)
{
foreach ($gottendocs as $doc)
  {
    //var_dump($doc);


?>

        <?php  if (!in_array($doc['filename'],$list_of_docs))
            {


              echo "<div class=\"col-sm-10\">";
              echo "<div class=\"form-group\" style=\"margin-top: 15px\" >"
                ."<h4>File name: ".$doc['filename'].
                "<a href="; echo "\"".$doc['filepath']."\">".
                  "<span class=\"glyphicon glyphicon-file\"></span></a></h4>";
                  echo "</div>";
        echo "</div>";
        array_push($list_of_docs,$doc['filename']);
       }

        } }
        session_write_close();
        ?>
</body>
</html>
