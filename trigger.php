<?php
$myFile = "uploads/stored_file.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Contents of the File";
fwrite($fh, $stringData);
fclose($fh);
?>
