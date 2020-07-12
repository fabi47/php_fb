<<?php


/*10までの和*/

for($i = 1; $i < 11; $i++) {
    echo $i . ".";
}


/*20〜100までの和*/

for($i = 21; $i < 101; $i++) {
     echo $i . ".";
}




/*fizzbuzz 1~100まで*/

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
