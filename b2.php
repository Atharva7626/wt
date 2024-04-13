<?php
session_start();

$_SESSION['no']=$_POST['no'];
$_SESSION['name']=$_POST['name'];
$_SESSION['addr']=$_POST['addr'];

?>

<html>
    <head>
        <title> Accept </title>
    </head>

    <body>
        <fieldset>

            <form action="b22.php" method="post">

                Enter the Salary  : <input type="text" name="sal">
                <br><br>

                Enter the DA : <input type="text" name="da">
                <br><br>

                Enter the HRA : <input type="text" name="hra">
                <br><br>

                <input type="submit" value="submit">

            </form>

        </fieldset>
    </body>

 </html>
