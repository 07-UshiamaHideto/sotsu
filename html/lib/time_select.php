<?php

function select_hour(){
$hour = "";
for ($t=0; $t < 24; $t++) {
 $hour .= "<option value=\"" . $t . "\">" . $t . "時</option>";
}

echo $hour;

}

function select_min(){
$min = "";
for ($m=0; $m < 60; $m++) {
 $min .= "<option value=\"" . $m . "\">" . $m . "分</option>";

}

echo $min;

}

 ?>