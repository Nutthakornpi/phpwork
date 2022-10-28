<?php

    $name ="Nutthakorn Pikhuntod";
    echo strlen($name);
    echo "<br>";
    $word="i love you";
    echo str_word_count($word);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strrev("NeilAldenArmstrong");
    echo "<br>";
    echo strpos($word,"e");
    echo "<br>";
    $wie = str_replace("love","hate",$word);
    echo $wie;
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    echo strtoupper($word);

?>