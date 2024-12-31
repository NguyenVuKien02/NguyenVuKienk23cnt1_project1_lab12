<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sửa Hóa Đơn</title>
</head>
<body>
    <section class="container mt-5">
        <form action="{{ route('nvk.editHDsubmit', ['id' => $nvkHoaDon->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin hóa đơn</h3>
                </div>
                <div class="card-body">
                    <!-- Mã hóa đơn -->
                    <div class="mb-3 row">
                        <label for="nvkMaHoaDon" class="col-sm-2 col-form-label">Mã Hóa Đơn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkMaHoaDon" name="nvkMaHoaDon" value="{{ $nvkHoaDon->nvkMaHoaDon }}" readonly>
                        </div>
                    </div>
                    <!-- Mã khách hàng -->
                    <div class="mb-3 row">
                        <label for="nvkMakhachhang" class="col-sm-2 col-form-label">Mã KH</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="nvkMakhachhang" name="nvkMakhachhang">
                                @foreach ($nvkloaikhachhang as $khachHang)
                                    <option value="{{ $khachHang->id }}" {{ $nvkHoaDon->nvkMakhachhang == $khachHang->id ? 'selected' : '' }}>
                                        {{ $khachHang->id }} - {{ $khachHang->nvkHotenKhachHang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Họ tên khách hàng -->
                    <div class="mb-3 row">
                        <label for="nvkHotenKhachHang" class="col-sm-2 col-form-label">Họ Tên Khách Hàng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkHotenKhachHang" name="nvkHotenKhachHang" value="{{ $nvkHoaDon->nvkHotenKhachHang }}">
                        </div>
                    </div>
                    <!-- Ngày hóa đơn -->
                    <div class="mb-3 row">
                        <label for="nvkNgayHoaDon" class="col-sm-2 col-form-label">Ngày Hóa Đơn</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="nvkNgayHoaDon" name="nvkNgayHoaDon" value="{{ $nvkHoaDon->nvkNgayHoaDon }}">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-3 row">
                        <label for="nvkEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ $nvkHoaDon->nvkEmail }}">
                        </div>
                    </div>
                    <!-- Điện thoại -->
                    <div class="mb-3 row">
                        <label for="nvkDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{ $nvkHoaDon->nvkDienThoai }}">
                        </div>
                    </div>
                    <!-- Địa chỉ -->
                    <div class="mb-3 row">
                        <label for="nvkDiaChi" class="col-sm-2 col-form-label">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{ $nvkHoaDon->nvkDiaChi }}">
                        </div>
                    </div>
                    <!-- Tổng giá trị -->
                    <div class="mb-3 row">
                        <label for="nvkTongGiaTri" class="col-sm-2 col-form-label">Tổng Giá Trị</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkTongGiaTri" name="nvkTongGiaTri" value="{{ $nvkHoaDon->nvkTongGiaTri }}" step="0.01" min="0">
                        </div>
                    </div>
                    <!-- Trạng thái -->
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" {{ $nvkHoaDon->nvkTrangThai == 0 ? 'checked' : '' }}>
                                <label for="nvkTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="1" {{ $nvkHoaDon->nvkTrangThai == 1 ? 'checked' : '' }}>
                                <label for="nvkTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Cập nhật</button>
                    <a href="{{ route('nvk.listHD') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
