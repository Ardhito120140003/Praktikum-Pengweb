<?php 
function ConvertToRoman($num){ 
    $num = intval($num); 
    $result = ''; 

    $romanNumber_Array = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumber_Array as $roman => $number){ 
        $matches = intval($num / $number); 
        $result .= str_repeat($roman, $matches); 
        $num = $num % $number; 
    } 

    return $result; 
} 

echo ConvertToRoman(1141); 
?>
