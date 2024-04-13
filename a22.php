<?php

if (isset($_COOKIE['style']))
    $style=$_COOKIE['style'];
if (isset($_COOKIE['size']))
    $size=$_COOKIE['size'];
if (isset($_COOKIE['col']))
    $color=$_COOKIE['col'];
if (isset($_COOKIE['back']))
    $bg=$_COOKIE['back'];
?>

<html>
    <head>
        <title> Implementation </title>
        <style>

body{
    background-color: <?php echo$bg; ?>;
    color: <?php echo$color; ?>;
    font-size: <?php echo$size; ?>;
    font-style: <?php echo$style; ?>;

}
h1{
    color: <?php echo$color; ?>;
    font-size: <?php echo$size; ?>;
    font-style: <?php echo$style; ?>;
}
</style>
    
    </head>

    

    <body>
         hello        
         <!-- <h1> Hello this is the text..</h1> -->
    </body>

</html>