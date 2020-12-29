<?php
function dd($var){
	echo "<pre>";
	var_dump($var);
    echo "</pre>";
}

//Bai 1;
$n = 3;
$array = [11, 2, 8, 10, 5, 99, 1, 8, 9];
$array2 = [];
for($i = 0; $i < $n; $i++){
    array_push($array2, $array[$i]);

    for($y = $i + $n ; $y < count($array); $y += $n ){
        array_push($array2, $array[$y]);
    }
}
dd($array2);

//Bai 2;
rsort($array);
$value1 = $array[0];
$value2 = $array[1];
$tong = $value1 + $value2;
dd($tong);


//Bai 3;
$array3 = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
$kq = [];
    foreach($array3 as $value){
        foreach($array3 as $value2){
            $khoang_cach = $value - $value2;
            if($khoang_cach == 1){
                $arr = [];
                array_push($arr, $value);
                array_push($arr, $value2);
                $check = array_search($value2, $arr);
                if($check !== false){
                    $array = [$value, $value2];
                    sort($array);
                    array_push($kq, $array);
                }
            }
        }
    }
dd($kq);