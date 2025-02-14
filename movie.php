<?php
$xml=simplexml_load_file("movie.xml");
foreach($xml->M as $Mm)
{
echo"book No =$Mm->Mno<br>";
echo"book Name =$Mm->Mname<br>";
echo"Author name=$Mm->Actorname<br>";
echo"year =$Mm->Ryear<br>";
}
?>
