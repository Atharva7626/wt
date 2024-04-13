<?php

echo"<br> Book Details : <br>";

$xml=simplexml_load_file("book.xml");

foreach($xml->bookinfo as $b)
{
    echo" Book no : ".$b->no."<br>";
    echo" Book name : ".$b->name."<br>";
    echo" Publish year : ".$b->pyear."<br>";
    echo" Author : ".$b->author."<br>";
    echo"<br>";
}


?>