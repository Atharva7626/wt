<?php

$dom=new DOMDocument();

$dom->load('movie.xml');

$mname=$dom->getElementsByTagName('name');
echo"<h2> List of movies <br>";
foreach($mname as $m)
{
    echo" <br> ".$m->textContent."<br>";

}




?>