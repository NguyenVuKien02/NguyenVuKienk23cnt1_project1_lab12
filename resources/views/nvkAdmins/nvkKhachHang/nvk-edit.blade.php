<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sửa Khách Hàng</title>
</head>
<body>
    <section class="container">
        <form action="{{ route('nvk.editKHsubmit', ['id' => $khachHang->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nvkMakhachhang" class="col-sm-2 col-form-label">Mã Khách Hàng</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="nvkMakhachhang" name="nvkMakhachhang" value="{{ $khachHang->nvkMakhachhang }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkHotenkhachhang" class="col-sm-2 col-form-label">Họ Tên Khách Hàng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkHotenkhachhang" name="nvkHotenkhachhang" value="{{ $khachHang->nvkHotenkhachhang }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ $khachHang->nvkEmail }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{ $khachHang->nvkDienThoai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkDiaChi" class="col-sm-2 col-form-label">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{ $khachHang->nvkDiaChi }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkNgayDK" class="col-sm-2 col-form-label">Ngày Đăng Ký</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="nvkNgayDK" name="nvkNgayDK" value="{{ $khachHang->nvkNgayDK }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" {{ $khachHang->nvkTrangThai == 0 ? 'checked' : '' }}>
                                <label for="nvkTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="1" {{ $khachHang->nvkTrangThai == 1 ? 'checked' : '' }}>
                                <label for="nvkTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Cập nhật</button>
                    <a href="{{ route('nvk.listkhachhang') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
