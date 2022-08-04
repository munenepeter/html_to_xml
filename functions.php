<?php

function getPathWithFilename($path){
    //remove the '.zip' part
    return substr($path, 0, strpos($path, '.'));
}

function is_dir_empty($dir){
    if (!is_readable($dir)) return NULL;
    return (count(scandir($dir)) == 2);
}
function extractZip($sourceDir, $filePath, $destinationDir){

    if (!is_dir_empty($sourceDir)) {
        $zip = new ZipArchive();
        $res = $zip->open($filePath);

        if ($res === true) {
            $zip->extractTo($destinationDir);
            $zip->close();

            return true;
        } else {
            return false;
        }
    }
}
