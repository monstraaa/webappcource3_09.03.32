<?php
$fileNames = ["1.txt","2.txt","3.txt"];
foreach ($fileNames as $fileName) {
    file_put_contents($fileName, "!", FILE_APPEND);
}
foreach ($fileNames as $fileName) {
    readfile($fileName);
    echo "<br>";
}