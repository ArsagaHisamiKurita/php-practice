<?php 
// BMI = 体重 kg ÷ (身長 m × 身長 m)

// $height = 175;
// $weight = 55;

function calc_BMI($height, $weight) {
    $height_m = $height / 100;
    $bmi = $weight / ($height_m * $height_m);
    return $bmi;
}

// print calc_BMI($height, $weight);

$members = [
    [
        'name' => '田中',
        'height' => 172,
        'weight' => 69,
    ],
    [
        'name' => '鈴木',
        'height' => 158,
        'weight' => 46,
    ],
    [
        'name' => '佐藤',
        'height' => 168,
        'weight' => 72,
    ],
];

foreach ($members as $member) {
    $bmi = calc_BMI($member['height'], $member['weight']);
    print "{$member['name']}さんのBMIは{$bmi}です。\n";
}

$max = 30;

function fizz_Buzz($i) {
    if($i % 3 === 0 && $i % 5 === 0) {
        return "FizzBuzz\n";
    } elseif($i % 3 === 0) {
        return "Fizz\n";
    } elseif($i % 5 === 0) {
        return "Buzz\n";
    } else {
        return (string) $i . "\n";
    }
}

for ($i=1; $i <= $max; $i++) { 
    print fizz_Buzz($i);
}