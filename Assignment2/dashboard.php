<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once("navbar.php") ?>
<!DOCTYPE html>
<html lang='en'>

<header>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #fff4ee;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        .container {
            background-color: #fff4ee;
            height: auto;
            width: 100%;
            margin-top: 6rem;
            padding-bottom: 50px;
            margin-right: auto;
            padding-left: 5rem;
        }

        .container-books {
            background-color: #fff4ee;
            height: auto;
            width: 100%;
            overflow-x: hidden;
            padding-bottom: 50px;
            padding-right: 5rem;
            padding-left: 6rem;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
            display: flex;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 10px -5px;
            display: flex;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        img {
            height: auto;
            padding-left: auto;
            padding-right: auto;
            padding-bottom: 10px;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 16px;
            text-align: center;
            background-color: rgb(119, 15, 15);
        }

        .no {
            float: left;
            font-size: 100%;
            font-weight: 700;
            padding: 3px;
        }

        .container h2 {
            font-weight: 550;
        }

        .container h3 {
            margin-top: 7rem;
            font-size: 15px;
            padding: 30px;
            font-weight: bold;
            border-radius: 10px;
            border-color: grey;
            border-width: medium thick;
            border-style: solid;
            background-color: white;
            color: black;
            text-align: center;
        }

        .view {
            float: right;
            color: white;
            /* margin-bottom: 30px; */
            padding: 5px;
            background-color: rgb(119, 15, 15);
            border-radius: 25px;
        }

        p {
            color: white;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</header>

<body>
    <!-- container for annoucement -->
    <div class="container">
        <h3>Annoucement: Due to pandemic COVID-19, the library will be operated from Monday to Friday from 10am to 4pm. </h3>
    </div>
    <!-- end container for annoucement -->
    <!-- container for top 10 books -->
    <div class="container-books">
        <h2>Top 10 Books.</h2>
        <!-- first row -->
        <div class="row">
            <div class="column">
                <div class="card">
                    <p class='no'>1</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41TnRNC9Q8L._SX327_BO1,204,203,200_.jpg">
                    <p>Your Next Five Moves: Master the Art of Business Strategy</p>
                    <p>By Patrick Bet-David</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>2</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51S1IFlzLcL._SX321_BO1,204,203,200_.jpg">
                    <p>The 7 Habits of Highly Effective People</p>
                    <p>By Stephen R. Covey</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>3</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41vToljAPzL._SX351_BO1,204,203,200_.jpg">
                    <p>Pediatric Dentistry: Infancy Through Adolescence, 5E</p>
                    <p>By Arthur J. Nowa</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>4</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41cjiat--2L._SX331_BO1,204,203,200_.jpg">
                    <p>C# 8.0 in a Nutshell: The Definitive Reference 1st Edition</p>
                    <p>By Joseph Albahari</p>
                </div>
            </div>
        </div>
        <!-- second row -->
        <div class="row">
            <div class="column">
                <div class="card">
                    <p class='no'>5</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51nxKl+2NdL._SX258_BO1,204,203,200_.jpg">
                    <p>Cancer In Children and Adolescents</p>
                    <p>By William Carroll, Jonathan Finlay</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>6</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41Ap6pmf58L._SX382_BO1,204,203,200_.jpg">
                    <p>Practical Clinical Oncology</p>
                    <p>By Tom Crosby</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>7</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51LIiyyNlVL._SX379_BO1,204,203,200_.jpg">
                    <p>Modern PHP: New Features and Good Practices 1st Edition</p>
                    <p>By Josh Lockhart</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>8</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41zLisPNN2L._SX376_BO1,204,203,200_.jpg">
                    <p>Effective Java 3rd Edition</p>
                    <p>By Joshua Bloch</p>
                </div>
            </div>
        </div>
        <!-- third row -->
        <div class="row">
            <div class="column">
                <div class="card">
                    <p class='no'>9</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51MSWCvCmcL._SX377_BO1,204,203,200_.jpg">
                    <p>Eloquent JavaScript, 3rd Edition</p>
                    <p>By Marijn Haverbeke</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p class='no'>10</p>
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51FCCOYzLZL._SX398_BO1,204,203,200_.jpg">
                    <p>A Brief Introduction To Fluid Mechanics, 5th Edition</p>
                    <p>By Bruce R. Munson</p>
                </div>
            </div>
        </div>
        <!-- view all button -->
        <a class='view' href="#"><i class="next"></i><span>View All &raquo</span></a>
    </div>
    <!-- end container for top 10 books -->
    <!-- container for recently added -->
    <div class="container-books">
        <h2>Recently Added</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41TnRNC9Q8L._SX327_BO1,204,203,200_.jpg">
                    <p>Your Next Five Moves: Master the Art of Business Strategy</p>
                    <p>By Patrick Bet-David</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51S1IFlzLcL._SX321_BO1,204,203,200_.jpg">
                    <p>The 7 Habits of Highly Effective People</p>
                    <p>By Stephen R. Covey</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41vToljAPzL._SX351_BO1,204,203,200_.jpg">
                    <p>Pediatric Dentistry: Infancy Through Adolescence, 5E</p>
                    <p>By Arthur J. Nowa</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41cjiat--2L._SX331_BO1,204,203,200_.jpg">
                    <p>C# 8.0 in a Nutshell: The Definitive Reference 1st Edition</p>
                    <p>By Joseph Albahari</p>
                </div>
            </div>
        </div>
        <!-- end row for recently added -->
    </div>
    <!-- end container for recently added -->

</body>

</html>