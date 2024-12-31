<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết</h3>
            </div>
            <div class="card-body">
                @if ($nvksanpham)
                    <p class="card-text">
                        <b>Mã sản phẩm</b> {{ $nvksanpham->nvkMaSanPham }}
                    </p>
                    <p>
                        <b>Tên sản phẩm</b> {{ $nvksanpham->nvkTenSanPham }}
                    </p>
                    <p>
                        <b>hình ảnh</b> {{ $nvksanpham->nvkHinhAnh }}
                    </p>
                    <p>
                        <b>Số lượng</b> {{ $nvksanpham->nvkSoLuong }}
                    </p>
                    <p>
                        <b>Đơn giá</b> {{ $nvksanpham->nvkDonGia }}
                    </p>
                    <p>
                        <b>Mã loại</b> {{ $nvksanpham->nvkMaloai }}
                    </p>
                    <p>
                        <b>Trạng thái</b> {{ $nvksanpham->nvkTrangThai }}
                    </p>
                @else
                    <p>Không tìm thấy thông tin sản phẩm.</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/nvkAdmins/nvk-san-pham" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </section>

</body>
</html>
