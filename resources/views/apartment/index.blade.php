<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{URL::asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('fontend/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{URL::asset('fontend/js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('fontend/js/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;

        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #ddd;
        }

        /*li a.active {*/
        /*    color: white;*/
        /*    background-color: #04AA6D;*/
        /*}*/
    </style>
</head>
    <div class="features_items"><!--features_items-->
        <h1>{{ $pageName }}</h1>

        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Best Home</a></li>
            <li><a href="#contact">list Style</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#contact us">Contact us</a></li>
        </ul>
        @foreach($new as $row)

            <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img class="circular-bar" src="{{$row->HinhDaiDien}}" width="100px" alt="">
                                <p>{{$row->TenChungCu}}</p>
                                <p>{{$row->DiaChi}}</p>
                                <p>{{$row->GiaBan}}</p>
                                <p>{{$row->ThongTinChungCu}}</p>
                                <p>{{$row->TrangThaiBan}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div><!--features_items-->
<div class="row datatables-footer">--}}
        <div class="col-sm-12 col-md-6">
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
                @include('pagination.default', ['paginator' => $list])
            </div>
        </div>
    </div>

<script src="{{URL::asset('fontend/js/jquery.js')}}"></script>
<script src="{{URL::asset('fontend/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('fontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{URL::asset('fontend/js/price-range.js')}}"></script>
<script src="{{URL::asset('fontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{URL::asset('fontend/js/main.js')}}"></script>

