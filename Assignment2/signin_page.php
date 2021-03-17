<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email, username, password FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if email exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $email = $row["email"];
                        $_SESSION['email'] = $email;
                        $username = $row["username"];
                        $_SESSION['username'] = $username;
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;                          
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>

<html>
<header>
    <meta charset='utf-8'>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style_navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            margin-top: 12.5rem;
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


        .check_box {
            text-align: right;
            padding: 10px;
            width: 100%;

        }

        p {
            text-align: center;
        }

        a {
            color: black;
            font-weight: 700;
        }

        @media (max-width:800px) {
            .container {
                margin-top: 30rem;
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
                margin-top: 20rem;
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
    <div class='header'> <img class="mb-4" src="images\UNIMYLogo.png" alt="" width="65">
        UNIMY Library Management</div>
    <div class='container'>
        <div class="my-input-row">
            <h3>Sign In</h3>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="my-input-row <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
            <input id="email" class="my-input" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span class="my-input-row"><?php echo $email_err; ?></span>
        </div>
        <div class="my-input-row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <input id="password" class="my-input" type="password" name="password" placeholder="Password" >
            <span class="my-input-row"><?php echo $password_err; ?></span>
        </div>
        <div class="my-input-row">
            <input type="submit" name = "submit" id="send" value="Submit" >
        </div>
        <div class="my-input-row">
            <p>Have you created an account? <a href="signup_page.php">Sign Up</a></p>
        </div>
        </form>
    </div>
    <div class='footer'>Copyright &#169; 2020 UNIMY. All rights reserved.</div>
    <?php
    ?>
</body>

</html>