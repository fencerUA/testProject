<?
// Задача на min Max
$array = [8,7,1,2,3,4,5,6];

function sorting($array){
    $newArray = array();
    
    
}
    

sorting($array);

function minMax(array $array){
    $min = $array[0];
    $max = $array[0];

    foreach($array as $value){
        $arrayValue = array();
        if($min > $value){
            $min = $value;
        }
        if($max < $value){
            $max = $value;
        }
    }
    $arrayValue ['min'] = $min;
    $arrayValue ['max'] = $max;
    return $arrayValue;
}

// echo minMax($array);

echo "hello2";


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