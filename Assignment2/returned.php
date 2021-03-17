<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once("navbar.php") ?>
<html>
<header>
    <meta charset='utf-8'>
    <title>Returned</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            overflow-x: hidden;
            background-color: #fff4ee;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }

        .container {
            margin-top: 12.5rem;
            margin-left: 5rem;
            margin-right: 3rem;
            z-index: -1;
        }

        .row {
            margin: 10rem;
            width: 85%;
            background-color: gainsboro;
            color: black;
        }


        .table-responsive {
            border-radius: 10px;
        }

        .table thead tr {
            background-color: #89726E;
            color: white;
            text-align: left;
            font-weight: bold;
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .table tbody tr:last-of-type {
            border-bottom: 2px solid grey;
        }

        .notreturned {
            font-weight: bold;
            color: red;
        }

        .returned {
            font-weight: bold;
            color: forestgreen;
        }

        @media(max-width: 414px) {
            .container {
                margin-top: 15rem;
                margin-bottom: 4rem;
                margin-left: 4rem;
                margin-right: 2rem;
                z-index: -1;
            }
        }

        @media(min-width: 768px) and (max-width: 800px) {
            .container {
                margin-top: 22.5rem;
                margin-bottom: 4rem;
                margin-left: 1.75rem;
                margin-right: 1.75rem;
                padding-left: 4rem;
                z-index: -1;
            }
        }
    </style>
    <script></script>
</header>

<body>

    <div class="container">
        <h1><img src="https://i.postimg.cc/wjPhtW4T/returned.png">&nbsp;Returned</h1>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Borrow date</th>
                        <th>Return date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Engineering Thermodynamics</td>
                        <td>Tarik Al-Shemmeri</td>
                        <td>1/12/20</td>
                        <td>20/12/20</td>
                        <td class="returned">Returned</td>
                    </tr>

                    <tr class="active-row">
                        <td>2</td>
                        <td>Practical Clinical Oncology</td>
                        <td>Tom Crosby</td>
                        <td>28/9/20</td>
                        <td>30/9/20</td>
                        <td class="returned">Returned</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cancer In Children and Adolescents</td>
                        <td>William Carroll, Jonathan Finlay</td>
                        <td>5/9/20</td>
                        <td>10/9/20</td>
                        <td class="returned">Returned</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </main>
    </div>
</body>

</html>