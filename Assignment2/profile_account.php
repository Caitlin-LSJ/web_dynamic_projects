<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once("navbar.php");

$email_user = $_SESSION['email'];
echo '<script>console.log("' . htmlspecialchars($email_user) . '");</script>';

?>
<html>
<header>
    <meta charset='utf-8'>
    <title>Profile Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            font-size: 14px;
        }

        body {
            background-color: #fff4ee;
            overflow-x: hidden;
        }

       
        .container {
            background-color: #fff4ee;
            padding: 0%;
            margin-top: 3rem;
            width: 100%;
        }

        .my-profile-row {
            background-color: #fff4ee;
            width: 100%;
            height: 30%;
        }

        .user_icon {
            background-color: #fff4ee;
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 100%;
            padding-top: 100px;
            text-align: center;
        }

        .user_icon i {
            background-color: #4A751A;
            margin-left: auto;
            margin-right: auto;
            border-radius: 100px;
            padding: 20px;
            color: white;
        }

        .my-info {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 50px;
            padding-left: 10rem;
            padding-right: 10rem;
        }

        .my-info-row {
            padding-top: 8px;
            width: 50%;
            padding-left: 45px;
            margin-left: auto;
            margin-right: auto;
        }

        .my-label {
            padding: 5px;
            text-align: right;
        }

        .my-label1 {
            float: right;
            text-align: left;
        }

        #button {
            display: block;
            width: 30%;
            height: 40px;
            color: white;
            border-radius: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            background-color: #770F0F;
        }

        hr.solid {
            color: grey;
            width: 50%;
            border-top: 1px solid #bbb;
        }
        

        @media(max-width:414px) {
           
            hr{
                margin-left: 4rem;
                padding-left: 5rem;
            }

            body {
                text-align: center;
            }

            .my-label {
                padding-left: 1rem;
            }

            .my-label1 {
                text-align: right;
                float: left;
                margin-left: 1.75rem;
            }

            #username-label{
                margin-left:.5rem;
            }
            
            #email-label {
                margin-left: 15px;
            }

            #username{
                margin-left: 22.5px;
            }
            
            #email {
                margin-left: -35px;
            }

            #password {
                margin-left: 30px;
            }

            .container {
                padding-top: 5rem;
                margin-left: 5rem;
                text-align: center;
                width: 80%;
            }

            .my-info {
                padding: 0%;
            }

            .my-info-row {
                padding-top: 8px;
                padding-right: 15rem;
                padding-bottom: 3rem;
            }

            #button {
                width: 80%;
            }
        }


        @media(min-width: 768px) and (max-width: 800px){
            .container{
                padding-top: 10rem;
            }
            
             hr{
                margin-left: 15rem;
                padding-left: 14rem;
            }
            
            .my-info{
               padding: 0%;
               margin-left: -3rem;
                   
            }
            
            .user_icon{
               padding-top: 20rem; 
            }
            
            #button{
                margin-left: 30rem;
                margin-top: 5rem;
            }
        }
       
    </style>
    <script></script>
</header>

<body>

    <div class='container'>
        <div class="my-profile-row">
            <div class='user_icon'><i class="fas fa-user-alt fa-4x"></i><span></span></div>
        </div>
        <div class="my-info">
            <div class="my-info-row">
                <label id="username-label" class="my-label" for="username">Username</label>
                <label id="username" class="my-label1" for="username"><?php echo $username_nav; ?></label>
            </div>
            <hr class="solid">
            <div class="my-info-row">
                <label id="email-label" class="my-label" for="email">Email</label>
                <label id="email" class="my-label1" for="email"><?php echo $email_user; ?></label>
            </div>
            <hr class="solid">
            <div class="my-info-row">
                <label id="password-label" class="my-label" for="password">Password</label>
                <label id="password" class="my-label1" for="password">******</label>
            </div>
            <div class="my-button-row">
                <button id="button" data-toggle="modal" data-target="#myModal">Edit Information</button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">

            <!--Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!--need to put the coding -->
                    <form action="profile_account.php" method="POST">
                        New Username: <input type="text" name="newUsername" required><br><br>
                        New Password: <input type="text" name="newPassword" required><br><br>
                        <input type="submit" name="update" class="modal-footer btn btn-secondary" value="Update Data">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>

    </script>

</body>

</html>

<?php
//include 'config.php';

if (isset($_POST['update'])) {

    //get the values
    $newUserName = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    $pdoQuery = "UPDATE users SET username=:username, password=:password WHERE email=:email ";
    $pdoQuery_run = $pdo->prepare($pdoQuery);
    $pdoQuery_run->bindParam(':email', $param_email_user, PDO::PARAM_STR);
    $pdoQuery_run->bindParam(':username', $param_newUserName, PDO::PARAM_STR);
    $pdoQuery_run->bindParam(':password', $param_newPassword, PDO::PARAM_STR);


    $param_email_user = $email_user;
    $param_newUserName = $newUserName;

    echo '<script>console.log("' . htmlspecialchars($param_email_user) . '");</script>';
    echo '<script>console.log("' . htmlspecialchars($param_newUserName) . '");</script>';

    $param_newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    echo '<script>console.log("' . htmlspecialchars($param_newPassword) . '");</script>';

    if ($pdoQuery_run->execute()) {
        echo '<script>alert("Data Updated")</script>';

        //update the value in the session/cookies
        $_SESSION['username'] = $param_newUserName;
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo '<script>alert("Data Not Updated")</script>';
    }
    unset($pdoQuery_run);
}

?>