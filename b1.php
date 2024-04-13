<?php

   session_start();
   $user=$_POST["user"];
   $pass=$_POST["pass"];
   if (isset($_SESSION['cnt']))
   {
    $_SESSION['cnt']=$_SESSION['cnt']+1;

    if ($_SESSION['cnt']==1 || $_SESSION['cnt']==2)
    {
        if ($user==$pass)
        {
            echo" welcome ";
            $_SESSION['cnt']=0;
        }
        else if ($user!=$pass)
        {

            $_SESSION['cnt']=$_SESSION['cnt']+1;
            echo" its  your ".$_SESSION['cnt']." attempt";



            // header("location:b1.html");
    
        }
    }
    
    if ($_SESSION['cnt']==3)
    {
        echo"3 attempts over.";
        echo"";
        $_SESSION['cnt']=0;
        // header("location:b1.html");


    }
   }







?>

<html>
    <head>

    <script src=""></script>
    </head>

    <body>
        


    <script>

  <?php
if ($user!=$pass)
{
?>
        window.alert(<?php echo" its  your ".$_SESSION['cnt']." attempt";
        ?>);
<?php
}
else
{
    ?>
    window.alert(<?php echo" welcome";
        ?>);
<?php
}
?>


    </script>
    </body>


<html>