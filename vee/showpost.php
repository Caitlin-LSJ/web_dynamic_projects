<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Form Data Display</title> 
    </head>
    <body>
        <h2>POST Form Data Received</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "<pre>";
            foreach ($_POST as $key => $val) { 
                if (is_array($val)) {
                    printf("%s = [array] %s\n\n", $key, implode(", ", 
                        array_map("htmlspecialchars", $val)));
                }
                else {
                    printf("%s = %s\n\n", $key, htmlspecialchars($val));
                }
            }
            echo "</pre>";
        }
        else {
            echo "<p>Request method is not POST.</p>";
        }
        ?>
    </body>
</html>
