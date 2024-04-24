<?php





function create( int $g,  int $a): void {
    $file = fopen("log.txt" , "a");
    fwrite($file, $g. " " .$a);
    fclose($file);
}
create( $argv[1], $argv[2]);
echo "Аргументи били успешно записани  в log.txt\n";
$file = fopen("log.txt" , "r");
function readLogFile($filename) : string
{
    $log = file_get_contents($filename);
    $logLines = explode("\n" , trim($log));
    $lastLine = end($logLines) ;
    return $lastLine ;



}
$lastArguments = readLogFile("log.txt");
echo " Последние аргументи , которие били введенни: " . $lastArguments . "\n";
