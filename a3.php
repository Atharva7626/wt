<?php
  $str =<<<XML
  <?xml version="1.0" encoding="UTF-8"?>
  <BookInfo>
       <book>
         <bookNO>1</bookNO>
         <bookName>Java</bookName>
         <authorname>Balguru swami</authorname>
         <price>10</price>
         <year>2006</year> 
      </book>
      <book>
         <bookNO>2</bookNO>
         <bookName>C</bookName>
         <authorname>Dennnis Ritchie</authorname>
         <price>500</price>
         <year>1971</year> 
      </book>     
  </BookInfo>
  XML;
  $file="BookInfo.xml";
  $fp=fopen($file,'w');
  fwrite($fp,$str);
  fclose($fp);
  
  echo"<br> Created xml file successfully ".$file."<br>";
  echo"<br> File contents are : <br>";
  readfile($file);
?>
