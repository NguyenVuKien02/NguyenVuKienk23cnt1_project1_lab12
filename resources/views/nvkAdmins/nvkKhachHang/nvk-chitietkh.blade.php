<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết</h3>
            </div>
            <div class="card-body">
                @if ($khachHang)
                    <p class="card-text">
                        <b>Mã Loại Sản Phẩm:</b> {{ $khachHang->nvkMakhachhang  }}
                    </p>
                    <p>
                        <b>Tên Loại Sản Phẩm:</b> {{ $khachHang->nvkHotenkhachhang }}
                    </p>
                    <p>
                        <b>Email:</b> {{ $khachHang->nvkEmail }}
                    </p>
                    <p>
                        <b>Điện Thoại:</b> {{ $khachHang->nvkDienThoai }}
                    </p>
                    <p>
                        <b>Đia Chi:</b> {{ $khachHang->nvkDiaChi }}
                    </p>
                    <p>
                        <b>Ngày Đăng Ký:</b> {{ $khachHang->nvkNgayDK }}
                    </p>
                    <p>
                        <b>Trạng Thái:</b> {{ $khachHang->nvkTrangThai }}
                    </p>
                @else
                    <p>Không tìm thấy thông tin sản phẩm.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/nvkAdmins/nvkKhachHang" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </section>

</body>
</html>
