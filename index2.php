<?
// $array = array(8,2,3,5,7,14,67);
// function maxMin($array){
//     $count = count($array);
//     $max = $array[0];
//     $min = $array[0];
//     for($i=0;$i<$count;$i++){
//         if($min < $array[$i]){
//             $min = $array[$i];
//         }
//         if($max > $array[$i]){
//             $max = $array[$i];
//         }
//     }
//     return $max.", ".$min;
// }
// echo maxMin($array);
// $array = [1,2,3,5,6,5,5];
// function inArray($array){
//     $count = 0;
//     for($i = 0;$i < count($array);$i++){
//         if($array[$i] != 5){
//             continue;
//         }else{
//             // $result = $array[$i];
//             $count++;
            
//         }
//         $result = $count;
//     }
//     return $result;
// }
// echo inArray($array);

// $a = 99;
// $b = 9;
// $res = $a++/$b++;
// $c = 8;
// $res = $res + --$c;
// echo $res;

// $array = [
//     1,2,3,4,5
// ];
// for($i=0;$i<count($array);$i++){
//     if($i>2){
//         continue;
//     }
//     echo $array[$i];
// }

/**
 * Доробити: 
 * другий цикл
 */
// $array = [1,2,3,4,5,6,1,2,3,1,3,5,6];
// function countElements($array){
//     $count = count($array);
//     $newArray = array();
//     for($i = 0;$i < $count;$i++){
//         $numb = $array[$i];
//         $count_numb = 0;
//         for($y = 0;$y < $count;$y++){
//             if($i == $y){
//                 continue;
//             }
//             if($numb != $array[$y]){
//             continue;
//             }
//             $count_numb++;
//         }
//         $newArray []= [$numb => $count_numb];
//     }
    
// }

// countElements($array);

// $array = [
//     'one' => 1,
//     'two' => 2,
//     'three' => 3,
//     'four' => 4
// ];
// function changeKey($array){
//     $newArray = array();
//     foreach($array as $key => $value){
//         $newArray []= [$value => $key];
//     }
//     var_dump($newArray);
// }

// changeKey($array);

// $array = [1,2,3,4];

// function sum($array){
//     $result = 0;
//     foreach($array as $value){
//         $result += $value;
//     }
//     return $result; 
// }

// echo sum($array);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello</p>
</body>
</html> 