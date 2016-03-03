<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php


error_reporting(E_ALL);
ini_set("display_errors", 1);


function multTable() 
{
    echo("<table class='table'>");
    for($i = 0; $i <= 100; $i++)
    {
        echo("<tr>");
        for($j = 0; $j <= 100; $j++)
        {
            echo("<td>");
            if($i == 0 && $j == 0)
            {
             echo("");
            }
            elseif($i == 0)
            {
             echo($j);
            }
             elseif($j == 0)
            { 
             echo($i);
            }
            else
            {
             echo($i * $j);
            }
            echo("</td>");
        }
        echo("</tr>");
    }
    echo("</table>");
}

multTable();

?>
</body>
</html>