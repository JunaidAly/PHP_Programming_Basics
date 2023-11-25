<?php

class newclass{
function cal(){
 $a=10;
 $b=20;
if($a<$b){
    echo "true";
}
else{
    echo "false";
}
}
}
$obj = new newclass();
echo $obj->cal();
?>