<?php
function isNumberInRange($number){
   return $number > 0 && $number < 10;
}

echo "Число - " . $_POST['number'];

if(isNumberInRange($_POST['number'])){
    echo " true";
}
else{
    echo " false";
}
