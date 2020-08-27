<?php
    $sampleFile = fopen("sample.txt","r") or die("unable to open file!");
    while(!feof($sampleFile)){
        echo fgetc($sampleFile);
    }
    fclose($sampleFile);
?>
<!-- 1. feof(): The feof() function checks if the "end-of-file" (EOF) has been reached. -->
<!-- 2. fgets(): The fgets() function is used to read a single line from a file. -->