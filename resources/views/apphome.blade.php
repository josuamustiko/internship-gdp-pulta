<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pulta</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Styles -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <style>
        .img-responsive,
        .thumbnail > img,
        .thumbnail a > img,
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ------------------- Carousel Styling ------------------- */

        .carousel-inner {
            border-radius: 15px;
        }

        .carousel-caption {
            background-color: rgba(0,0,0,.5);
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            padding: 0 0 10px 25px;
            color: #fff;
            text-align: left;
        }

        .carousel-indicators {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 15;
            margin: 0;
            padding: 0 25px 25px 0;
            text-align: right;
        }

        .carousel-control.left,
        .carousel-control.right {
            background-image: none;
        }


        /* ------------------- Section Styling - Not needed for carousel styling ------------------- */

        .section-white {
            padding: 10px 0;
        }

        .section-white {
            background-color: #fff;
            color: #555;
        }

        @media screen and (min-width: 768px) {

            .section-white {
                padding: 1.5em 0;
            }

        }

        @media screen and (min-width: 992px) {

            .container {
                max-width: 930px;
            }

        }

        img {
            max-width: 100%;
            max-height: 100%;
        }

        input[type=date]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            display: none;
        }

        input[type=date]::-webkit-calendar-picker-indicator {
            -webkit-appearance: none;
            display: none;
        }

        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .panel-table .panel-body{
            padding:0;
        }

        .panel-table .panel-body .table-bordered{
            border-style: none;
            margin:0;
        }

        .panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
            text-align:center;
            width: 120px;
        }

        .panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
        .panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
            border-right: 0px;
        }

        .panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
        .panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
            border-left: 0px;
        }

        .panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
            border-bottom: 0px;
        }

        .panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
            border-top: 0px;
        }

        .panel-table .panel-footer .pagination{
            margin:0;
        }

        /*
        used to vertically center elements, may need modification if you're not using default sizes.
        */
        .panel-table .panel-footer .col{
            line-height: 34px;
            height: 34px;
        }

        .panel-table .panel-heading .col h3{
            line-height: 30px;
            height: 30px;
        }

        .panel-table .panel-body .table-bordered > tbody > tr > td{
            line-height: 34px;
        }

        /**/

        .panelx-table .panel-footer .col{
            line-height: 34px;
            height: 34px;
        }

        .panelx-table .panel-heading .col h3{
            line-height: 30px;
            height: 30px;
        }

        .panelx-table .panel-body .table-bordered > tbody > tr > td{
            line-height: 34px;
        }

        .panelx-table .panel-body{
            padding:0;
        }

        .panelx-table .panel-body .table-bordered{
            border-style: none;
            margin:0;
        }


        .panelx-table .panel-body .table-bordered > thead > tr > th:last-of-type,
        .panelx-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
            border-right: 0px;
        }

        .panelx-table .panel-body .table-bordered > thead > tr > th:first-of-type,
        .panelx-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
            border-left: 0px;
        }

        .panelx-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
            border-bottom: 0px;
        }

        .panelx-table .panel-body .table-bordered > thead > tr:first-of-type > th{
            border-top: 0px;
        }

        .panelx-table .panel-footer .pagination{
            margin:0;
        }

        /*
        used to vertically center elements, may need modification if you're not using default sizes.
        */
        .panelx-table .panel-footer .col{
            line-height: 34px;
            height: 34px;
        }

        .panelx-table .panel-heading .col h3{
            line-height: 30px;
            height: 30px;
        }

        .panelx-table .panel-body .table-bordered > tbody > tr > td{
            line-height: 34px;
        }

        .nav li {
            display:inline-block;
            color: white;
        }

        .navbar{
            background-color: #5677fc;
        }
        .navbar a{
            color: white;
            text-decoration: none;
        }

    </style>
</head>
<body id="app-layout">
<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Pulta</a>
        </div>
        <ul class="nav navbar-right">
            <li><a href="/help">Help</a></li>
            <li><a href="/lacak">Lacak</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>