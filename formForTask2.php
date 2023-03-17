<?php
function isEven($number){
   return $number % 2 == 0;
}

echo "Число - " . $_POST['number'];

if(isEven($_POST['number'])){
    echo " четное";
}
else{
    echo " нечетное";
}
