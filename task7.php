<?php
require("count.txt");

$fs = fopen("count.txt","r+");

file_put_contents("count.txt",file_get_contents("count.txt") + 1);

fclose($fs);