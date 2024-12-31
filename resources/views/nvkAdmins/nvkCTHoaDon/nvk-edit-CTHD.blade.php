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
        <form action="{{ route('nvk.editsubmitCTHD', ['id' => $nvkCTHoaDon->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin hóa đơn</h3>
                </div>
                <div class="card-body">
                    <!-- Mã khách hàng -->
                    <div class="mb-3 row">
                        <label for="nvkHoaDonID" class="col-sm-2 col-form-label">ID Hoá Đơn</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="nvkHoaDonID" name="nvkHoaDonID">
                                @foreach ($nvkIDHoaDon as $HoaDon)
                                    <option value="{{ $HoaDon->id }}" {{ $nvkCTHoaDon->nvkHoaDonID == $HoaDon->id ? 'selected' : '' }}>
                                        {{ $HoaDon->id }} - {{ $HoaDon->nvkHotenKhachHang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="card-body">
                    <!-- Mã khách hàng -->
                    <div class="mb-3 row">
                        <label for="nvkSanPhamID" class="col-sm-2 col-form-label">ID Sản Phẩm</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="nvkSanPhamID" name="nvkSanPhamID">
                                @foreach ($nvkIDSanPham as $SanPham)
                                    <option value="{{ $SanPham->id }}" {{ $nvkCTHoaDon->nvkSanPhamID == $SanPham->id ? 'selected' : '' }}>
                                        {{ $SanPham->id }} - {{ $SanPham->nvkTenSanPham}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Số Lượng Mua -->
                    <div class="mb-3 row">
                        <label for="nvkSoLuongMua" class="col-sm-2 col-form-label">Số Lượng Mua</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkSoLuongMua" name="nvkSoLuongMua" value="{{ $nvkCTHoaDon->nvkSoLuongMua }}">
                        </div>
                    </div>
                    <!-- Đơn Giá Mua -->
                    <div class="mb-3 row">
                        <label for="nvkDonGiaMua" class="col-sm-2 col-form-label">Đơn Giá Mua</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkDonGiaMua" name="nvkDonGiaMua" value="{{ $nvkCTHoaDon->nvkDonGiaMua }}">
                        </div>
                    </div>
                    <!-- Thành Tiền -->
                    <div class="mb-3 row">
                        <label for="nvkThanhTien" class="col-sm-2 col-form-label">Thành Tiền</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkThanhTien" name="nvkThanhTien" value="{{ $nvkCTHoaDon->nvkThanhTien }}">
                        </div>
                    </div>
                    <!-- Trạng thái -->
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" {{ $nvkCTHoaDon->nvkTrangThai == 0 ? 'checked' : '' }}>
                                <label for="nvkTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="1" {{ $nvkCTHoaDon->nvkTrangThai == 1 ? 'checked' : '' }}>
                                <label for="nvkTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Cập nhật</button>
                    <a href="{{ route('nvk.listCTHD') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
