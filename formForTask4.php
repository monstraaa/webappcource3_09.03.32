<?php
function cut($string,$charsToSave = 10){
    if(!is_numeric($charsToSave)) $charsToSave = 10;
    return substr($string,0,$charsToSave);
}
echo cut($_POST['text'],$_POST['number']);