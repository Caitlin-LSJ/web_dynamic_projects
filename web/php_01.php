<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP: Hellow World</title>
</head>

<body>
    <?php
    // Impractical,
    //If can perform any task with Html, Css and JS
    //don't involve pHP
    //Use php only for backend processing, database access etc
    //Otherwise: Web server will be heavily loaded

    $str = "hello";
    $str .= "world! #2";
    echo "<p>" . $str . "</p>";
    $sum = 0; //Number
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }
    //Do not use + instead . to concatinate the strings
    echo "<p>Sum is " . $sum . ".</p>\n";
    echo "<p>Sum is {$sum}.</p>\n";
    $name = "sum";
    echo "<p>Sum is ${$name}.</p>\n";
    echo "<p>Sum is \${$sum}.</p>\n";  //To include the $
    //double quoted strings is more flexible as it allows variable substitutions?
    //single quoted won't inteprate the {$sum} at all
    echo '<p>Sum is {$sum}.</p>\n';
    echo '<p>Sum is $355.</p>' . "\n";
    echo <<<LONGSTR
    <p>A quick brown fox 
    jumps over 
    the lazy dog.</p>\n
    LONGSTR;
    ?>
    <pre>
    <?php
    // Associative Hetrogenous Array
    //- why array manipulaition is important?
    //Because Form data is available in an array
    // Database data is also in an array form
    $arr = array(
        2,
        3,
        5,
        7,
    );
    $arr[4] = 13;
    $arr[5] = 15;
    $arr[6] = 17;

    $arr_2 = array(
        99 => "more",
        "much more",
        'first_prime' => 2
    );
    // var_dump($var);
    // var_export($var);

    $arr = $arr + $arr_2;

    foreach ($arr as $key => $value) {
        echo "[key: {$key}] => $value\n";
        if (is_string($value)) {
            echo "  - String Value. \n";
        }
    }

    echo "-------------------------------\n";
    unset($arr[1]);
    for ($i = 0; $i < 7; $i++) {
        if (!array_key_exists($i, $arr)) {
            echo "[$i] does not exists!\n";
            continue;
        }

        // if (!isset($arr[$i])){
        //     echo "[$i] is not set!\n";
        //     continue;
        // }
        echo "[$i] => {$arr[$i]}\n";
    }
    echo "-------------------------------\n";
    echo $_SERVER['HTTP_USER_AGENT'];

    ?>
</pre>
<?php
     $str = "Tom &amp; Jerry &lt Jerry &gt My name is <hello> !";
    //  echo "<p>" . htmlspecialchars($str) . "</p>\n";
    echo "<p>" . $str . "</p>\n";
    $common_mistake_str = "<p><b>Bold &amp !</b></p>";
    echo "<p><b>" . htmlspecialchars($common_mistake_str) . "</b></p>\n";

    $str = <<<STR
    Line 1.
    Line 2.
    Line 3.
    Line 4. 
    Line 5.
    STR;

    echo "<p>" . nl2br($str) . "</p>";

    // $arr = array("abc", "def", 10=> "two");
    // $arr_serialized = serialize($arr);
    // // var_export($arr);
    // echo $arr_serialized;
    // $arr = unserialize($arr_serialized);
?>

</body>

<!-- W3Schools are good for learning client-side programming -->
<!-- If you want to learn PHP, go to php.net  -->

</html>