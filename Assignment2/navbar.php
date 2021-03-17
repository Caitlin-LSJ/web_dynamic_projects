<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once "config.php";

$username_nav = $_SESSION['username'];
echo '<script>console.log("' . htmlspecialchars($username_nav) . '");</script>';

?>
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset='utf-8'>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            font-size: 14px;
        }

        .header {
            background-color: rgb(119, 15, 15);
            width: 100%;
            height: auto;
            color: white;
            padding: 15px;
            position: relative;
            font-weight: 700;
            margin-top: auto;
            margin-bottom: auto;
            z-index: 10;
            position: fixed;
            top: 0;
        }

        .header i {
            float: left;
            padding-right: 10px;
            padding-top: 5px;
        }

        .search input {
            border-radius: 5px;
            font-weight: 500;
            padding: 5px;
            width: 100%;
            color: black;
        }


        #img-logo {
            width: auto;
            height: 70px;
        }

        .nav_bar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 6;
            top: 0;
            left: 0;
            padding: 10px;
            padding-top: 12.5rem;
            text-align: center;
            overflow-x: hidden;
            overflow-y: hidden;
            background-color: #184400;
            color: white;
            transition: .5s;
        }

        .sidenav a:hover {
            color: #184400;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .closebtn {
            float: left;
            font-size: 20px;
            font-weight: 700;
            color: white;
        }

        .menu {
            padding: 10px;
            padding-top: 20px;
            text-align: justify;
            color: white;
        }

        .user {
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            display: block;
        }

        span {
            padding: 12.5px;
            color: white;
        }

        i {
            color: white;
        }

        .menu a {
            padding: 8px 8px 8px 25px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .footer {
            background-color: #4a751a;
            padding: 10px;
            position: fixed;
            z-index: 10;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }

        @media(max-width: 414px) {
            .search {
                width: 100%;
            }

            .search input {
                float: left;
                padding: .75rem 1rem;
                border-width: 0;
                border-radius: 0;
            }
        }

        @media (max-width: 800px) {
            .nav_bar {
                padding-top: 12.5rem;
            }

            .header {
                width: 100%;
                padding: 1.5rem 1.75rem;

            }

            .search {
                float: left;
            }

            .search input {
                float: left;
                padding: .75rem 1rem;
                border-width: 0;
                border-radius: 0;
            }
        }
    </style>
    <script></script>
</header>

<body onload="userAttach()">
    <!-- 'COMPANY NAME' + SEARCH BAR -->
    <div class='header'>
        <a href=# onclick="openNav()" id="mySide"><i class="fas fa-bars fa-lg"></i></a>
        <p>UNIMY Library Management</p>
        <div class='search'>
            <input id="search" class="my-input" type="text" name="string" style="padding-left:1.5rem;" placeholder="Search Title / Author" />
        </div>
    </div>
    <!-- END HEADER -->
    <!-- NAVIGATION MENU -->
    <div class='nav_bar' id="mySidenav">
        <div class='top'>
            <div class='profile'>
                <a href="javascript:" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- Margin-left for the image is causing an overflow -->
                <img id="img-logo" src="images/UNIMYLogo.png"><span></span>
                <div id="profile_name" class='user'></div>
            </div>
            <div class='topics toggled'>
                <div class="menu">
                    <a href="dashboard.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
                    <a href="bookcatalog.php"><i class="fas fa-book-open"></i><span>Catalog</span></a>
                    <a href="history.php"><i class="fa fa-history"></i><span>History</span></a>
                    <a href="returned.php"><i class="glyphicon glyphicon-thumbs-up"></i><span>Returned</span></a>
                    <a href="notreturned.php"><i class="glyphicon glyphicon-thumbs-down"></i><span>Not Returned</span></a>
                    <a href="profile_account.php"><i class="fas fa-cogs"></i><span>Setting</span></a>
                    <a href="logout_process.php"><i class="glyphicon glyphicon-log-out"></i><span>Log Out</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVIGATION MENU -->
    <!-- FOOTER -->
    <div class='footer'>Copyright &#169; 2020 UNIMY. All rights reserved.</div>
    <script>
        function userAttach() {
            let text_name = "<?php echo $username_nav ?>";
            let data = document.getElementById("profile_name");
            data.innerHTML = text_name;
        }

        function openNav() {
            document.getElementById("mySidenav").style.width = "200px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }
    </script>

    <?php

    echo '<script>console.log("' . htmlspecialchars($_SESSION['username']) . '");</script>';

    ?>

</body>

</html>