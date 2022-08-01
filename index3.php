<?
$str = "sdfgjiop0";

function explode_x($str){
    $len = strlen($str);
    $array = array();
    for($i = 0;$i<$len;$i++){
        $array []= $str[$i]; 
    }
    var_dump($array);
}

function strLast($str){
    echo $str[strlen($str)-1];
}

function numberElement($str){
    $len = strlen($str);
    $symbol = "o";
    $count = 0;
    for($i = 0;$i<$len;$i++){
        $count++;
        if($str[$i] == $symbol){
            break;
        }
    }
    return $count;
}

echo numberElement($str);


?>