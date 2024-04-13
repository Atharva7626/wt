<?php

$st=$_POST['style'];
$si=$_POST['size'];
$color=$_POST['color'];
$bg=$_POST['bg'];

setcookie('style',$st);
setcookie('size',$si);
setcookie('col',$color);
setcookie('back',$bg);

?>

<html>

    <head>
        <title> Details </title>
    </head>

    <body>
       
        <fieldset>

            <form action="a22.php" method="post">

              The font style : <?php echo"".$st; ?>
              <br><br>

              The font size : <?php echo"".$si; ?>
              <br><br>

              The font color : <?php echo"".$color; ?>
              <br><br>

              The Background : <?php echo"".$bg; ?>
              <br><br>

              Click here to see implementation :
              <input type="submit" value="submit">

            </form>

        </fieldset>

    </body>

</html>