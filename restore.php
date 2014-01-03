<?php
$projectPath = '/Users/farico/Projects/eskimi';
$backupPath = '/tmp/recover/good_files';

$changeList = <<<TEXT
TEXT;

$files = explode("\n", $changeList);
foreach($files as $file)
{
$fileName = ltrim($file, "AMD ");
system("mv $backupPath/$fileName $projectPath/$fileName");
}
echo "Done moving files\n";
