<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sửa Sản Phẩm</title>
</head>
<body>
    <section class="container">
        <form action="{{ route('admin-nvk.editsubmitsp', ['nvkID' => $nvksanpham->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin sản phẩm cập nhật</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nvkMaSanPham" class="col-sm-2 col-form-label">
                            Mã Sản Phẩm:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="nvkMaSanPham" name="nvkMaSanPham" value="{{ $nvksanpham->nvkMaSanPham }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTenSanPham" class="col-sm-2 col-form-label">
                            Tên Sản Phẩm:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkTenSanPham" name="nvkTenSanPham" value="{{ $nvksanpham->nvkTenSanPham }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkHinhAnh" class="col-sm-2 col-form-label">
                            Hình Ảnh:
                        </label>
                        <div class="col-sm-10">

                            @if ($nvksanpham->nvkHinhAnh)
                                <p>Hình ảnh hiện tại:</p>
                                <img src="{{ asset('images/' . $nvksanpham->nvkHinhAnh) }}" alt="Ảnh hiện tại" width="100">
                            @else
                                <p>Chưa có hình ảnh. Bạn có thể tải lên ảnh mới.</p>
                            @endif
                            <select name="nvkHinhAnhSelected" class="form-control mt-2">
                                <option value="">--- Chọn ảnh có sẵn ---</option>
                                @foreach ($availableImages as $file)
                                    <option value="{{ $file->getFilename() }}">{{ $file->getFilename() }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nvkSoLuong" class="col-sm-2 col-form-label">
                            Số Lượng:
                        </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkSoLuong" name="nvkSoLuong" value="{{ $nvksanpham->nvkSoLuong }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkDonGia" class="col-sm-2 col-form-label">
                            Đơn Giá:
                        </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nvkDonGia" name="nvkDonGia" value="{{ $nvksanpham->nvkDonGia }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkMaloai" class="col-sm-2 col-form-label">Mã Loại:</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="nvkMaloai" name="nvkMaloai">
                                @foreach ($nvkloaisanpham as $loai)
                                    <option value="{{ $loai->nvkMaloai }}" {{ $loai->nvkMaloai == $nvksanpham->nvkMaloai ? 'selected' : '' }}>
                                        {{ $loai->nvkTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">
                            Trạng Thái:
                        </label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" {{ $nvksanpham->nvkTrangThai == 0 ? 'checked' : '' }}>
                                <label for="nvkTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="1" {{ $nvksanpham->nvkTrangThai == 1 ? 'checked' : '' }}>
                                <label for="nvkTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Cập nhật</button>
                    <a href="/nvkAdmins/nvk-san-pham" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
