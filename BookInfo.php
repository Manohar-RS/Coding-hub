<?php
$xml=simplexml_load_file("BookInfo.xml");
foreach($xml->book as $bk)
{
echo"book No =$bk->bookno<br>";
echo"book Name =$bk->bookname<br>";
echo"Author name=$bk->authorname<br>";
echo"book price =$bk->price<br>";
echo"year =$bk->year<br>";
}
?>
