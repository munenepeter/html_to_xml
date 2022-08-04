<?php

include_once 'functions.php';

$files_dir = "test_files";
$zipped_dir = $files_dir . '/zipped';
$unzipped_dir = $files_dir . '/unzipped';

$firstFileName = scandir($zipped_dir)[2];

$unzipped_dir_with_filename = getPathWithFilename($unzipped_dir.'/'.$firstFileName);

$firstFilePath = $zipped_dir . '/' . scandir($zipped_dir)[2];

// echo $unzipped_dir_with_filename.PHP_EOL;
// var_dump(scandir($unzipped_dir));
// exit;


extractZip($zipped_dir , $firstFilePath, $unzipped_dir_with_filename);
exit;

$html_file = '';

if (true) {
    $html_file = 'gg';
}
