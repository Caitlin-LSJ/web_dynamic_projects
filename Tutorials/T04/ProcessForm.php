<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Form Data Display</title>
    <style>
        h3{
            display:inline;
        }
    </style>
</head>

<body>
    <h2>POST Form Data Received</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "<pre>";
        echo "<h3>Name: </h3>" . $_POST["fullname"] . "<br>";
        echo "<h3>NRIC No.: </h3>" . $_POST["nric"] . "<br>";
        echo "<h3>Gender: </h3>" . $_POST["gender"] . "<br>";
        echo "<h3>Date of Birth: </h3>" . $_POST["dob"] . "<br>";
        echo "<h3>Favourite Color: </h3>" . $_POST["fav-colour"] . "<br>";
        echo "<h3>Email: </h3>" . $_POST["email"] . "<br>";
        echo "<h3>Password: </h3>" . $_POST["password"] . "<br>";
        echo "<h3>Bank: </h3>" . $_POST["bank"] . "<br>";
        echo "<h3>Account No.: </h3>" . $_POST["acc"];

    } else {
        echo "<p>Request method is not POST.</p>";
    }
    ?>
</body>

</html>