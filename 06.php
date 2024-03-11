<?php 

$number = 30;

if($number % 3 === 0 && $number % 5 === 0) {
    print "FizzBuzz";
} elseif($number % 3 === 0) {
    print "Fizz";
} elseif($number % 5 === 0) {
    print "Buzz";
} else {
    print $number;
}