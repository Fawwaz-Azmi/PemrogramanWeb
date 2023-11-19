<?php

function generator($n)
{
    for ($i = 1; $i <= $n; $i++){
    
    // Jika i habis dibagi dengan 3 dan 5, maka cetak “HelloWorld”
    if ($i % 3 === 0 && $i %5 === 0){
        echo "HelloWorld\n";
    }
    // Jika i habis dibagi 3 (Ndak habis dibagi 5), maka cetak “Hello”
    elseif($i % 3 === 0){
        echo "Hello\n";
    }    
    // Jika I habis dibagi 5 (Ndak habis dibagi 3), maka cetak “World”
    elseif($i % 5 === 0){
        echo "World\n";
    }
    else {
        echo $i . "\n";
    }

    }
}

generator(15);
