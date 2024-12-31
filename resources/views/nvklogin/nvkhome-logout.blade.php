@extends('_layout.admins.master')
@section('title','Home')
<head>
    <style>
        h1{
            border-radius: 5px;
            text-align: center;
            background: url('{{ asset('/images/chaomung.jpeg') }}') no-repeat center center/cover;
            padding: 50px;
            font-size: 36px;
        }
        h1 p  {
            color:white;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
@section('content')
<div class="container mt-4">
    <h1 class="animate__animated animate__fadeIn animate__bounce animate__zoomIn" style="color: aliceblue">
            <p><i class="fa-solid fa-circle-user"></i> Chào Mừng Đến Với Trang Chủ</p>
    </h1>
    <hr>
    <div class="mt-3">
        <p>
            Bạn có
            <span class="badge bg-danger" >{{ $messages_count }}</span>
            tin nhắn mới.
        </p>
        <p>
            Bạn có
            <span class="badge bg-warning text-dark">{{ $notifications_count }}</span>
            thông báo.
        </p>
    </div>
</div>
@endsection
