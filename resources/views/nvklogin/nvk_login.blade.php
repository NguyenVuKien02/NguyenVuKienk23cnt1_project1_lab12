<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('/images/pexels-rpnickson-2559941.jpg') }}') no-repeat center center/cover;
        }

    </style>
</head>
<body class="bg-light">
    <section class="container">
        <div class="row">
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
                <form action="{{route('admin-nvk.loginsubmit')}}" method="post" class="bg-white p-5 rounded shadow-sm"  style="width: 500px;" >
                    @csrf
                    <h1 class="text-center"><i class="fa-solid fa-circle-user"></i></h1>

                    <!-- Tên tài khoản -->
                    <div class="form-group mb-3">
                        <label for="nvkTaiKhoan">Tài khoản</label>
                        <input type="text" name="nvkTaiKhoan" id="nvkTaiKhoan" placeholder="Nhập tên tài khoản" class="form-control">
                        @error('nvkTaiKhoan')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <!-- Mật khẩu -->
                    <div class="form-group mb-3">
                        <label for="nvkMatKhau">Mật khẩu</label>
                        <input type="password" name="nvkMatKhau" id="nvkMatKhau" placeholder="Nhập mật khẩu" class="form-control">
                        @error('nvkMatKhau')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <!-- Nút gửi -->
                    <button type="submit" class="btn btn-primary mt-3" style="width: 100%;">Đăng nhập</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
