<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: 01</title>
    </head>
    <body>
        <?php
            /* IMPRACTICAL!!
             * - Could have been done with HTML
             * - If can peform any task with HTML+CSS+JavaScript,
             *   DON'T involve PHP.
             * - Use PHP only for backend processing, database access, etc.
             * - Otherwise: Web server will be heavily loaded.
             */
            # This is a comment too
            $str = "Hello, ";
            $str .= "World! #2";
            echo "<p>" . $str . "</p>";
            $sum = 0;  // Number
            for ($i=1; $i<=100; $i++) {
                $sum += $i;
            }
            echo "<p>Sum is " . $sum . ".</p>\n";
            echo "<p>Sum is {$sum}.</p>\n";
            $name = "sum";
            echo "<p>Sum is ${$name}.</p>\n";
            echo "<p>Sum is \${$sum}.</p>\n";  // Include $

            echo '<p>Sum is $355.</p>' . "\n";

            echo <<<LONGSTR
<p>A quick brown fox
jumps over
the lazy dog.</p>\n
LONGSTR;
        ?>

<pre>
<?php
    // Associative Heterogenous Array
    // - Why array manipulation is important?
    //   - Form data is available in an array
    //   - Database data in array
    $arr = [2, 3, 5, 7,];
    $arr[4] = 11;
    $arr[] = 13;
    $arr[] = 17;

    $arr_2 = array(
        99 => "more",
        "much more",
        "first_prime" => 2,
    );
    // var_dump($arr);
    // var_export($arr);

    $arr += $arr_2;

    foreach ($arr as $key => $value) {
        echo "[{$key}] => $value\n";
        if (is_string($value)) {
            echo "  - String value.\n";
        }
    }

    echo "----------------\n";
    unset($arr[1]);
    for ($i=0; $i<7; $i++) {
        if (!array_key_exists($i, $arr)) {
            echo "[$i] does not exists!\n";
            continue;
        }
        // if (!isset($arr[$i])) {
        //     echo "[$i] is not set!\n";
        //     continue;
        // }
        echo "[$i] => {$arr[$i]}\n";
    }

    echo "----------------\n";
    echo $_SERVER['HTTP_USER_AGENT'];
?>
</pre>

<?php
    $str = "Tom &amp Jerry &lt Jerry &gt My name is <!-- !";
    // echo "<p>" . $str . "</p>\n";
    echo "<p>" . htmlspecialchars($str) . "</p>\n";

    $common_mistake_str = "Bold &amp !";
    echo "<p><b>" . htmlspecialchars($common_mistake_str) . "</b></p>\n";

    $str = <<<STR
Line 1.
Line 2.
Line 3.
Line 4.
Line 5.

STR;
    echo "<p>" . nl2br($str) . "</p>";

    /* Serialization */
    // $arr = array("abac", "def", 10 => "two",);
    // $arr_serialized = serialize($arr);
    // $arr = unserialize($arr_serialized);
    // var_export($arr);

    // '/' operator is NOT a integer division: Will return floating point
    echo "<p>"  . 3/2 . "</p>";
    echo "<p>"  . intdiv(3, 2) . "</p>";
?>
    </body>
</html>
