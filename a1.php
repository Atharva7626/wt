<?php
    
    session_start();

    // $_SESSION['cnt']=0;

    if (isset($_SESSION['cnt']))
    {
        $_SESSION['cnt']=$_SESSION['cnt']+1;
    }
    else
    {
        $_SESSION['cnt']=1;
    }

    $msg="The webpage has been accessed ".$_SESSION['cnt']."  times..";

?>

<html>
    <body>
        <fieldset>
            <br>

            <p> <?php echo$msg; ?></p>
        </fieldset>
    </body>
</html>