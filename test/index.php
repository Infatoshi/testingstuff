

<!-- // indexed arrays

// $peopleOne = ['shaun', 'crystal', 'ryu'];
// $peopleTwo = array('ken', 'chun-li');

// echo $peopleOne[1];
// echo $peopleTwo[1];

// $ages = [20, 30, 40, 50];

// $ages[1] = 25;
// // print_r($ages);

// $ages[] = 60;
// // print_r($ages);

// array_push($ages, 70);
// print_r($ages);

// echo count($ages);

// associative arrays (key & value pairs)
// $blogs = [
// ['mario party', 'mario', 'lorem', 30],
// ['mario kart cheats', 'toad', 'lorem', 25],
// ['hidden cheats', 'link', 'lorem', 50],
// ];
// print_r($blogs[1][1]); -->

<?php

// binary search and sort alg

// $nums = [10, 30, 40, 45, 70, 80, 85, 90, 100];
// $words = ["at", "ball", "cat", "dog", "eye", "fish", "good"];
// $unsorted = [30, 20, 70, 40, 50, 100, 90];

// function binarySearch($anArray, $item) {
//     $li = 0;
//     $ui = count($anArray) - 1;

//     while ($li <= $ui) {
//         $mi = floor(($li + $ui) / 2);
        
//         if ($item == $anArray[$mi]) {
//             return $mi;
//         } else if ($item < $anArray[$mi]) {
//             $ui = $mi - 1;
//         } else {
//             $li = $mi + 1;
//         }
//     }
//     return -1;
// }
 
// echo(binarySearch($nums, 100));
// echo(binarySearch($nums, 75));
// echo(binarySearch($words, "fish"));
// echo(binarySearch($words, "at"));
// echo(binarySearch($unsorted, 70));

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);
$timerStopped = false; 

while ($timerStopped = false) {
echo date('h:i:s') . "<br>";

//sleep for 3 seconds
sleep(3);
}

// if(isset($_POST['submit'])) {
//     $inputStr = $_POST['input'];
//     $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
//     $txt = $inputStr;
//     fwrite($myfile, $txt);
//     fclose($myfile);
//     if (file_exists($txt)) {
//         readfile($txt);
//     }
// } else {
//     echo "Error. Please try again.";
// }

// ?>


<!-- // <form action="" method="POST">
//     <input type='text' name="input">
//     <input type="submit" name="submit" value="submit" >
// </form> -->






