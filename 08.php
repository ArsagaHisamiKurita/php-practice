<?php
$hoge = "私は見習いプログラマです。";

print str_replace("見習い", "ベテラン", $hoge);

$hoge = "オレンジ|アップル|バナナ|グレープ|パイナップル";

print_r(explode("|", $hoge));

$hoge = ['orange', 'apple', 'banana', 'grape', 'pineapple'];
sort($hoge);
print_r($hoge);
