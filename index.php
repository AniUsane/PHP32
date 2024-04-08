<?php

//exercise1
// $color = ['white', 'green', 'red', 'blue', 'black'];

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";


//exercise2
// $color = ['white', 'green', 'red'];

// echo $color[1] . "<br>";
// echo $color[2] . "<br>";
// echo $color[0] . "<br>";


//exercise3
// $ceus = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];

// foreach($ceus as $ceu=>$key) {
//     echo "The capital of $ceu is $key <br>";
// }


//exercise4
// $x = [1, 2, 3, 4, 5];
// var_dump($x);

// echo "<br>";
// array_pop($x);

// var_dump($x);


//exercise5
// $color = [4 => 'white', 6 => 'green', 11=> 'red'];

// echo $color[4];


//exercise 6
// $books = [
//     "Title" => "The Cuckoos Calling",
//     "Author" => "Robert Galbraith",
//     "Publisher" => "Little Brown",
// ];

// foreach($books as $book=>$key){
//     echo "$book : $key <br>";
// }


//exercise 7
// $x = [1, 2, 3, 4, 5];

// echo "Original array : <br>";
// foreach($x as $y){
//     echo $y . " ";
// }
// echo "<br>";
// array_push($x, "$");

// echo "After inserting '$' the array is : <br>";
// foreach($x as $z){
//     echo $z . " ";
// }


//exercise 8
//a) ascending order sort by value
// $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
// asort($array);
// echo "ascending order sort by value: <br>";

// foreach($array as $key=>$value){
    
//     echo $value . " ";
// }
// echo "<br>";

//b) ascending order sort by Key
// $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
// ksort($array);
// echo "ascending order sort by Key: <br>";
// foreach($array as $key=>$value){
//     echo "$key => $value . <br>";
// }

//c) descending order sorting by Value
// $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
// rsort($array);
// echo "descending order sorting by Value: <br>";
// foreach($array as $key=>$value){
    
//         echo $value . " ";
//     }

//d) descending order sorting by Key
// $array = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
// krsort($array);

// echo "descending order sorting by Key: <br>";

// foreach($array as $key=>$value){
//         echo "$key => $value . <br>";
//     }


//exercise 9
// $temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
// $sum=0;
// $count = sizeof($temps);
// foreach($temps as $temp){
//     $sum += $temp;
// }
// $avgTemp= $sum / $count;
// echo "The average temperature is: $avgTemp <br>";

// $temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
// asort($temps);

// $low_temp = array_slice($temps, 0, 7, true);
// echo "7 lowest temperatures: <br>";

// foreach($low_temp as $temp){
//     echo $temp . " ";
// }

// echo "<br>";

// $high_temp = array_slice($temps, sizeof($temps) - 7, sizeof($temps), true);
// echo "7 highest temperatures: <br>";

// foreach($high_temp as $highTemp){
//     echo $highTemp . " ";
// }


//exercise 10
//?????????


//exercise 11
//ზუსტად ისე არაა დამერჯილი როგორც მაგალითში 
// $array1 = [[77, 87], [23, 45]];
// $array2 = ["w3resource", "com"];

// $array = array_merge($array1, $array2);
// var_dump($array);


//exercise 12
// $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

// $color = array_map('strtolower', $Color);
// echo "Values are in lower case: <br>";
// print_r($color);
// echo "<br>";

// $COLOR =  array_map('strtoupper', $Color);
// echo "Values are in upper case: <br>";
// print_r($COLOR);


//exercise 13
// for($i=200; $i<=250; $i++){
//     if($i%4==0){
//         echo "$i ";
//     }
// }


//exercise 14
// $array = ["abcd","abc","de","hjjj","g","wer"];

// $length = array_map('strlen', $array);

// echo "The shortest array length is " . min($length) . "<br>";
// echo "The longest array length is " . max($length);


//exercise 15
// $num = range(11,20);
// shuffle($num);
// for($i=0; $i <10; $i++){
//     echo $num[$i] . " ";
// }


//exercise 16 ragac ar mushaobs
// $array = [
//     "Italy" => "Rome",
//     "Luxembourg" => "Luxembourg",
//     "Belgium" => "Brussels",
//     "Denmark" => "Copenhagen",
//     "Finland" => "Helsinki",
//     "France" => "Paris",
//     "Slovakia" => "Bratislava",
//     "Slovenia" => "Ljubljana",
//     "Germany" => "Berlin",
//     "Greece" => "Athens",
//     "Ireland" => "Dublin",
//     "Netherlands" => "Amsterdam",
//     "Portugal" => "Lisbon",
//     "Spain" => "Madrid",
//     "Sweden" => "Stockholm",
//     "United Kingdom" => "London",
//     "Cyprus" => "Nicosia",
//     "Lithuania" => "Vilnius",
//     "Czech Republic" => "Prague",
//     "Estonia" => "Tallin",
//     "Hungary" => "Budapest",
//     "Latvia" => "Riga",
//     "Malta" => "Valetta",
//     "Austria" => "Vienna",
//     "Poland" => "Warsaw"
// ];

// $largest_key = max(array_keys($array));
// echo "Largest key value is: " . $largest_key;


//exercise 17 esec ver gevige


//exercise 18


