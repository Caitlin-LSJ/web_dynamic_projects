<?php require_once("navbar.php") ?>
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Catalog</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
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
            width: 100%;
            z-index: 10;
        }

        .header i {
            float: left;
            padding-right: 10px;
            padding-top: 3px;
            color: white;
        }


        .search {
            float: right;
        }

        .search input {
            border-radius: 25px;
            font-weight: 500;
            padding: 3px;
            color: black;
        }

        .menu {
            padding: 10px;
            padding-top: 20px;
            text-align: justify;
            color: white;
        }


        span {
            padding: 10px;
            color: white;
        }

        .container {
            margin-top: 80px;
            margin-left: 220px;
            margin-bottom: 70px;
            background-color: #fff4ee;
            color: black;
            padding: 0%;
            z-index: -1;
        }

        .my-profile-row {
            background-color: white;
            width: 100%;
            height: 40%;
        }

        .user_icon {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 5%;
            padding-top: 100px;
            background-color: white;
        }

        .user_icon i {
            background-color: rgb(119, 15, 15);
            margin-left: auto;
            margin-right: auto;
            border-radius: 100px;
            padding: 30px;
        }

        .my-info {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 50px;
        }

        .my-info-row {
            padding-top: 10px;
            width: 70%;
            padding-left: 50px;
            margin-left: auto;
            margin-right: auto;
            /* display: block; */
            /* background-color: blue; */
        }

        .my-label {
            padding: 5px;
            text-align: justify;
        }

        button {
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 80%;
            border-radius: 25px;
            margin-top: 30px;
            margin-bottom: 10px;
            background-color: rgb(119, 15, 15);
        }

        .title {
            margin-bottom: -60px;
        }

        body {
            background-color: #fff4ee;
            overflow-x: hidden;
        }

        .title {
            float: left;
            margin-bottom: -60px;
        }

        /** Book Item **/

        .bookitem {
            border: 1px solid silver;
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            text-align: center;
            height: 430px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .bookitem>a {
            color: #333333;
        }

        .bookitem>a:hover {
            text-decoration: none;
        }

        .bookimage {
            position: relative;
            margin-bottom: 20px;
            overflow: hidden;
            max-height: 220px;
        }

        .booktitle {
            font-weight: 600;
        }

        .bookdescription {
            color: gray;
        }

        .btn-primary {
            margin-top: 10px;
        }

        /** Category **/

        .form-group {
            float: right;
            width: 200px;
            margin-left: 670px;
        }

        .top-catalog {
            display: inline-block;
        }

        .hasCustomSelect {
            -webkit-appearance: menulist-button;
            width: 231px;
            position: absolute;
            opacity: 0;
            height: 34px;
            font-size: 12px;
        }

        .customSelect {
            display: inline-block;
        }

        .customSelectInner {
            width: 209px;
            display: inline-block;
        }

        @media (max-width:414px) {
            body {
                width: 80%;

            }

            .form-group {
                float: left;
            }

            h1 {
                font-size: 20px;
            }



            .container {
                margin-left: 8rem;
            }
        }
    </style>
    <script></script>
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="top-catalog">
                    <div class="title">
                        <h1><img src="https://i.postimg.cc/kgDQgrcp/books.png">&nbsp;Book Catalog</h1>
                    </div>
                    <!-- Category -->
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control hasCustomSelect">
                            <option>Engineering</option>
                            <option>Business</option>
                            <option>IT</option>
                            <option>Medical</option>
                            <option>Fashion</option>
                        </select>
                        <span class=" form-control customSelect"><span class="customSelectInner">All</span></span>
                    </div>

                </div>
                <br>
                <!-- Books -->
                <div class="row">
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://bookboon.com/thumbnail/380/c7d4ee13-0f5e-e011-bd88-22a08ed629e5/76d3be45-b99b-4abf-a238-a5c900f83047/engineering-thermodynamics.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Engineering Thermodynamics
                                </h5>
                                <div class="bookdescription">
                                    Author: Tarik Al-Shemmeri<br> Available quantity: 4
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://bookboon.com/thumbnail/380/d6d4ee13-0f5e-e011-bd88-22a08ed629e5/1e7b41fd-b7c6-4684-8dd8-a54c00a48156/essential-engineering-mathematics.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Essential Engineering Mathematics
                                </h5>
                                <div class="bookdescription">
                                    Author: Michael Batty<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://bookboon.com/thumbnail/380/a31afa0c-6346-4114-a89f-a18000e067fb/0fce2cdf-4d40-4cee-9172-a57000ddb8d5/introduction-to-mechanics-of-materials-part-ii.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Introduction to Mechanics of Materials: Part II
                                </h5>
                                <div class="bookdescription">
                                    Author: Branislav Hučko Roland Jančo<br> Available quantity: 5
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51FCCOYzLZL._SX398_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    A Brief Introduction To Fluid Mechanics, 5th Edition
                                </h5>
                                <div class="bookdescription">
                                    Author: Bruce R. Munson<br> Available quantity: 5
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41TnRNC9Q8L._SX327_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Your Next Five Moves: Master the Art of Business Strategy
                                </h5>
                                <div class="bookdescription">
                                    Author: Patrick Bet-David<br> Available quantity: 5
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51S1IFlzLcL._SX321_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    The 7 Habits of Highly Effective People
                                </h5>
                                <div class="bookdescription">
                                    Author: Stephen R. Covey<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://d.gr-assets.com/books/1388177013l/4865.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    How to Win Friends and Influence People
                                </h5>
                                <div class="bookdescription">
                                    Author: Dale Carnegie<br> Available quantity: 1
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://d.gr-assets.com/books/1396759196l/7696134.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    The 1% Windfall
                                </h5>
                                <div class="bookdescription">
                                    Author: Rafi Mohammed<br> Available quantity: 5
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51LIiyyNlVL._SX379_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Modern PHP: New Features and Good Practices 1st Edition
                                </h5>
                                <div class="bookdescription">
                                    Author: Josh Lockhart<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41zLisPNN2L._SX376_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Effective Java 3rd Edition
                                </h5>
                                <div class="bookdescription">
                                    Author: Joshua Bloch<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51MSWCvCmcL._SX377_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Eloquent JavaScript, 3rd Edition
                                </h5>
                                <div class="bookdescription">
                                    Author: Marijn Haverbeke<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41cjiat--2L._SX331_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    C# 8.0 in a Nutshell: The Definitive Reference 1st Edition
                                </h5>
                                <div class="bookdescription">
                                    Author: Joseph Albahari<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41Ap6pmf58L._SX382_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Practical Clinical Oncology
                                </h5>
                                <div class="bookdescription">
                                    Author: Tom Crosby<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/51nxKl+2NdL._SX258_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Cancer In Children and Adolescents
                                </h5>
                                <div class="bookdescription">
                                    Author: William Carroll, Jonathan Finlay<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/41vToljAPzL._SX351_BO1,204,203,200_.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Pediatric Dentistry: Infancy Through Adolescence, 5E
                                </h5>
                                <div class="bookdescription">
                                    Author: Arthur J. Nowak<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/mph-images/9780199679850_b.jpg" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Oxford Handbook Of Clinical Dentistry
                                </h5>
                                <div class="bookdescription">
                                    Author: Oxford<br> Available quantity: 3
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1593140178-61QX7iumCcL.jpg?crop=1xw:1xh;center,top&resize=768:*" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    The Golden Thread: How Fabric Changed History
                                </h5>
                                <div class="bookdescription">
                                    Author: Kassia St. Clair<br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1593141070-51kRw7ygyxL.jpg?crop=1xw:1xh;center,top&resize=768:*" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Modesty: A Fashion Paradox
                                </h5>
                                <div class="bookdescription">
                                    Author: Hafsa Lodi<br> Available quantity: 1
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1593139730-41FoBau3b8L.jpg?crop=1xw:1xh;center,top&resize=768:*" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    The Asylum: True Tales of Madness from a Life in Fashion
                                </h5>
                                <div class="bookdescription">
                                    Author: Simon Doonan <br> Available quantity: 2
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <div class="bookitem">
                            <a href="#">
                                <div class="bookimage">
                                    <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1593140283-415LLMdH0xL.jpg?crop=1xw:1xh;center,top&resize=768:*" class="img-responsive" alt="...">
                                </div>
                                <h5 class="booktitle">
                                    Shoe Dog: A Memoir
                                </h5>
                                <div class="bookdescription">
                                    Author: Phil Knight<br> Available quantity: 1
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary">Borrow</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>