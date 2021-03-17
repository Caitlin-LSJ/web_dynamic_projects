<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once "config.php";


//define the variable and initialize it as empty values
$username = $email = $password = $confirm_password = "";
//for the error message
$username_err = $email_err = $password_err = $confirm_password_err = "";

//Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    //validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please Enter A Email";
    } else {
        //prepare a select statement
        $sql = "SELECT email FROM users WHERE email = :email";

        if ($stmt = $pdo->prepare($sql)) {
            //Bind variable to the prepared statement
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            //set parameters
            $param_email = trim($_POST["email"]);

            //Attempt to execute the prepare statement
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $email_err = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                    $_SESSION['email'] = $email;
                }
                //end of the if else
            } else {
                echo "<script> alert ('Ops! Something went wrong. Please try again later.')</script>";
            }
            //Close the statement
            unset($stmt);
        }
    }
    //end of the validation of email

    //validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please Enter A Username";
    } else {
        $username = trim($_POST["username"]);
        $_SESSION['username'] = $username;
    }



    //validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please Enter A Password";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password Must Have At Least 6 Characters. ";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }



    //Check input errors before insert in database
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

        //Insert statement
        $sql = "INSERT INTO users (email,username, password) VALUES (:email, :username, :password)";

        if ($stmt = $pdo->prepare($sql)) {
            //Bind variable
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            //set parameters
            $param_email = $email;
            $param_username = $username;
            //create a password hash - to protect password
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                header("location:dashboard.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
            //close statement
            unset($stmt);
        }
    }

    //Close Connection
    unset($pdo);
}

?>




<html>
<header>
    <meta charset='utf-8'>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style_navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        "use strict";

        function passwordcheck() {
            let password = document.getElementById("password").value;
            let password2 = document.getElementById("confirm-password").value;

            if (password == password2) {
                echo("okay");
            } else {
                alert("You enter different password");
                header("location:signup_page.php");
            }
        }
    </script>
    <style>
        * {
            font-size: 14px;
            color: white;
        }

        body {
            background-color: #fff4ee;
        }

        .header {
            background-color: rgb(119, 15, 15);
            height: auto;
            color: white;
            padding: 15px;
            position: relative;
            font-weight: 700;
            margin-top: auto;
            margin-bottom: auto;
            position: fixed;
            top: 0;
            width: 100%
        }

        .footer {
            background-color: #582b39;
            padding: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }

        .container {
            background-color: #bb8378;
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding: 20px;
            width: 500px;
            margin-top: 10rem;
            border-radius: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        .my-input-row {
            padding: 1px;
            text-align: center;
        }

        .my-input {
            width: 100%;
            height: 45px;
            padding-left: .75rem;
            border-radius: 10px;
        }

        button {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            color: rgb(119, 15, 15);
            font-weight: 600;
            margin-top: 10px;
            padding: 10px;
            border-radius: 25px;
        }

        #send {
            background-color: #d2b48c;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            color: rgb(119, 15, 15);
            font-weight: 600;
            margin-top: 10px;
            padding: 10px;
            border-radius: 25px;
        }

        h3 {
            width: 20%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            font-weight: 600;
        }

        input {
            color: black;
        }



        @media (max-width:800px) {
            .container {
                margin-top: 22rem;
                width: 80%;
            }

            h3 {
                width: 40%;
                padding: 0;
            }

            .my-input {
                float: left;
                width: 100%;
                height: 45px;
                margin-top: .5rem;
                margin-bottom: .5rem;
            }
        }



        @media (max-width:414px) {
            body {
                text-align: center;
            }

            .container {
                width: 80%;
                margin-top: 15rem;
                padding: 1rem, .25rem;
            }

            .my-input {
                float: left;
                width: 100%;
                height: 35px;
                margin: 2px;
            }

            #send {
                margin-top: 3rem;
                padding-top: 1rem;

            }

            h3 {
                font-size: 18px;
                width: 30%;
            }

            footer {
                width: 100%;
            }

        }
    </style>
    <script></script>
</header>

<body>
    <div class='header'>
        <img class="mb-4" src="images\UNIMYLogo.png" alt="" width="65">
        UNIMY Library Management</div>
    <div class='container'>
        <div class="my-input-row">
            <h3>Sign Up</h3>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="my-input-row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input id="username" class="my-input" placeholder="Username" value="<?php echo $username; ?>" type="string" name="username" required />
                <span class="my-input"><?php echo $username_err; ?></span>
            </div>
            <div class="my-input-row <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input id="email" class="my-input" placeholder="Email" value="<?php echo $email; ?>" type="email" name="email" required />
                <span class="my-input"><?php echo $email_err; ?></span>
            </div>
            <div class="my-input-row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input id="password" class="my-input" placeholder="Password" value="<?php echo $password; ?>" type="password" name="password" required />
                <br><span class="my-input"><?php echo $password_err; ?></span>
            </div>
            <div class="my-input-row <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input id="confirm-password" class="my-input" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>" type="password" name="confirm_password" required />
                <span class="my-input"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="my-input-row">
                <input type="submit" name="submit" id="send" value="Submit">
            </div>

        </form>

    </div>
    <div class='footer'>Copyright &#169; 2020 UNIMY. All rights reserved.</div>
</body>



</html>