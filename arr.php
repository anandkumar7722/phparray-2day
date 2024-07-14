<?php
/*
arrays
*/
$arr=[1,2,3,4,5];
    //0,1,2,3,4
    printf("\n%d<br>",$arr[4]);
// for loop
for($i=0; $i<count($arr); $i++){
    printf("\n%d<br>",$arr[$i]);
}

$arr1=[1,2,3,4,"ak",012,true,0xff,$arr];

for($i=0; $i<count($arr1); $i++){
    printf("\n%d<br>",($arr1[$i]));
}
//associative arrays //not index but key
$arr2=[
    1 => 9.003,
    "one" =>4,
    "two" => 3,
    3 => 3,
    4=>"ak",
    6 => 012,
    7 =>true,
    8 =>0xff,
    9 =>$arr
];
 echo $arr2["one"]."<br>\n";

$flip=(array_flip($arr2));
//only intergal and string are key
$input1= array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input1, CASE_UPPER));



?>