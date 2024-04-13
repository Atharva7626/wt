<?php
session_start();

if (isset($_SESSION['no']))
   $no=$_SESSION['no'];
if (isset($_SESSION['name']))
   $name=$_SESSION['name'];
if (isset($_SESSION['addr']))
   $addr=$_SESSION['addr'];

$_SESSION['sal']=$_POST['sal'];
$_SESSION['da']=$_POST['da'];
$_SESSION['hra']=$_POST['hra'];
// session_destroy();
?>

<html>
   <head>
         <title> Details </title>
   </head>
   
   <body>
     
       <fieldset>
             
        Employee no : <?php echo$no; ?>
        <br><br>

        Employee name : <?php echo$name; ?>
        <br><br>

        Employee addr : <?php echo$addr; ?>
        <br><br>
        
        Employee Salary : <?php echo$_SESSION['sal']; ?>
        <br><br>

        Employee DA : <?php echo$_SESSION['da']; ?>
        <br><br>
        
        Employee HRA : <?php echo$_SESSION['hra']; ?>
        <br><br>

        Total salary :  <?php echo$_SESSION['hra']+$_SESSION['da']+$_SESSION['sal']; ?>

       </fieldset>

   </body>

</html>
