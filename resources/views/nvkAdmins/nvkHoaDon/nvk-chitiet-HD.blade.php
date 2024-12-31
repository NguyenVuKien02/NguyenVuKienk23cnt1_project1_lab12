<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi Tiết Hóa Đơn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông Tin Chi Tiết Hóa Đơn</h3>
            </div>
            <div class="card-body">
                @if (  $nvkHoaDon)
                    <p class="card-text">
                        <b>Mã Hóa Đơn:</b> {{   $nvkHoaDon->nvkMaHoaDon }}
                    </p>
                    <p>
                        <b>Mã Khách Hàng:</b> {{   $nvkHoaDon->nvkMakhachhang }}
                    </p>
                    <p>
                        <b>Họ Tên Khách Hàng:</b> {{   $nvkHoaDon->nvkHotenKhachHang }}
                    </p>
                    <p>
                        <b>Email:</b> {{   $nvkHoaDon->nvkEmail }}
                    </p>
                    <p>
                        <b>Điện Thoại:</b> {{   $nvkHoaDon->nvkDienThoai }}
                    </p>
                    <p>
                        <b>Địa Chỉ:</b> {{   $nvkHoaDon->nvkDiaChi }}
                    </p>
                    <p>
                        <b>Ngày Hóa Đơn:</b> {{   $nvkHoaDon->nvkNgayHoaDon }}
                    </p>
                    <p>
                        <b>Tổng Giá Trị:</b> {{ number_format(  $nvkHoaDon->nvkTongGiaTri, 2) }} VND
                    </p>
                    <p>
                        <b>Trạng Thái:</b>
                        @if (  $nvkHoaDon->nvkTrangThai == 1)
                            Hoạt động
                        @else
                            Không hoạt động
                        @endif
                    </p>
                @else
                    <p>Không tìm thấy thông tin hóa đơn.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/nvkAdmins/nvkHoaDon" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </section>
</body>
</html>
