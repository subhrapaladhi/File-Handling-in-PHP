<?php
    $sampleFile = fopen("sample.txt","r") or die("unable to open file!");
    $fileSize = filesize("sample.txt");
    echo fread($sampleFile, $fileSize);
    fclose($sampleFile);
?>

<!-- 1. fopen(): open a file -->
<!-- 2. fread(): The fread() function reads from an open file. -->
<!-- 3. filesize(): get the length of file -->
<!-- 4. fclose(): The fclose() function is used to close an open file. -->