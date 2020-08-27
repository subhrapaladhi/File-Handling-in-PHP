<?php
    $sampleFile = fopen("sample.txt", "w") or die("Unable to open file!");
    $date = date('m/d/Y h:i:s a', time());
    $sampleText = "This is a sample file.\nCreated by: Subhra Paladhi (18BIT0191).\nAt ".$date;
    fwrite($sampleFile,$sampleText);
    fclose($sampleFile);
    echo "Data written in the file is:-\n".$sampleText;
?>

<!-- 1. fwrite(): write to file -->