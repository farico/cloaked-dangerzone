<?php
$projectPath = '/Users/farico/Projects/eskimi';
$backupPath = '/tmp/recover/good_files';

$changeList = <<<TEXT
TEXT;

system("rm -rf $backupPath");
system("mkdir -p $backupPath");

$files = explode("\n", $changeList);
foreach($files as $file)
{
$fileName = ltrim($file, "AMD ");
$destFile = substr($fileName, strrpos($fileName, '/'));
$dir = substr($fileName, 0, strrpos($fileName, '/'));

system("mkdir -p $backupPath/$dir");
echo $fileName . " in ($dir) -> $destFile\n";
#echo $projectPath . '/' . $fileName . "\n";
system("cp $projectPath/$fileName $backupPath/$dir$destFile");
}
echo "Done copying files";
