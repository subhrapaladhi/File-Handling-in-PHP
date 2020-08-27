<?php
    // if(isset($_POST['submit'])){
        $queryName = $_POST['queryname'];
        
        if(file_exists($queryName)==1){
            $fileSize = filesize($queryName);
            $fileType = filetype($queryName);
            echo "<h2>Yes, the file ".$queryName." exits.</h2>\n";
            echo "<p>The file type is: ".$fileType."</p>\n";
            echo "<p>The file size is: ".$fileSize."</p>";
        } else {
            echo "<h2> No, the file ".$queryName." does not exits.</h2>";
        }
    // }
    // echo "hrer";
?>