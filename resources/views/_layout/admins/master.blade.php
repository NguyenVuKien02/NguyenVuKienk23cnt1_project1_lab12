<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
         html, body, .container-fluid {
            height: 100%; /* Đảm bảo chiều cao container chính */
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            display: flex; /* Dùng flex để liên kết .sideBar và .Wrapper */
            overflow-x: auto; /* Thêm thanh cuộn ngang nếu nội dung quá dài */
        }

        .sideBar {
            width: 300px; /* Cố định chiều rộng */
            /*background: rgb(113, 112, 141);*/
            background: linear-gradient(135deg, rgb(45, 52, 54), rgb(89, 98, 117), rgb(133, 94, 66));

            flex-shrink: 0; /* Không co lại nếu nội dung lớn */
            border-radius: 8px 8px 8px 8px;
        }

        .Wrapper {
            flex-grow: 1; /* Chiếm toàn bộ không gian còn lại */
            background: #ffff;
            display: flex;
            flex-direction: column; /* Bố cục dọc */
            overflow: auto; /* Thanh cuộn khi nội dung dài */
            overflow-x: auto; /* Thêm thanh cuộn ngang nếu nội dung quá dài */
            border-radius: 8px 8px 8px 8px;
        }

        /*.sideBar{
            width: 300px;
            height: 790px;
            background: rgb(113, 112, 141);
        }
        .Wrapper{
            width: calc(100% - 300px );
            height: 790px;
            background: #fff;
        }*/
    </style>
</head>
<body style="background: linear-gradient(135deg, rgb(198, 239, 206), rgb(253, 246, 227), rgb(255, 235, 211), rgb(255, 224, 230), rgb(228, 223, 249));">
    <section class="container-fluid d-flex">
        <nav class="sideBar m-1">
            @include('_layout.admins._menu')
        </nav>
        <section class="Wrapper m-1">
            <header class=" my-1">
              @include ('_layout.admins._headerTitle')
            </header>
            <section class="content-body  my-1 p-1">
                @yield('content-body')
            </section>
        </section>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js&quot; integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js&quot; integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
