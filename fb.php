<?php


/*10までの和*/
    echo "10までの和\n";
for($i = 1; $i < 11; $i++) {
    echo $i . ".";
}


/*20〜100までの和*/
    echo "\n20~100の和\n";
for($i = 20; $i < 101; $i++) {
     echo $i . ".";
}


/* 1-100までの偶数と奇数を出す*/

    echo "\n偶数\n";
for ($i = 1; $i < 101; $i++) {

if ($i % 2 == 0) {
    echo $i . ".";
    }

}


    echo "\n奇数\n";
for ($i = 1; $i < 101; $i++) {

if ($i % 2 != 0) {
    echo $i . ".";
    }

}

/*fizzbuzz 1~100まで*/
    echo "\nfizzbuzz\n";
for ($i = 1; $i < 101; $i++) {
    
if ($i % 15 == 0) {
    echo "fizzbuzz" . ".";
    }

elseif ($i % 3 == 0) {
    echo "fizz" . ".";
    }

elseif ($i % 5 == 0) {
    echo "Buzz" . ".";
    }

else {
    echo $i . ".";
    }

}

 ?>
