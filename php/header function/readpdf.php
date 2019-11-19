<?php
$filename="New File is";
$filename=$filename.".pdf";


header("Content-type:application/pdf");

// It will be call and name the pdf file and view in browser
header("Content-Disposition:inline;filename=".$filename);

// The PDF source is in pdf file
readfile("SDLC_ Understand the Software Development Life Cycle.pdf");

?>


