<?php
$g = 1;
$a = 3;




function create( int $g,  int $a): void {
    $file = fopen("log.txt" , "a");
    fwrite($file, $g. " " .$a);
    fclose($file);
}
create( 1, 3);
echo "Аргументи били успешно записани  в log.txt\n";
$file = fopen("log.txt" , "r");
$log = fread($file, filesize("log.txt"));
$logLines = explode("\n", trim($log));
$lastLines = end($logLines) ;
echo "Последние аргументи , которие били введени: " . $lastLines."\n";
fclose($file);