<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sửa Loại Sản Phẩm</title>
</head>
<body>
    <section class="container">
        <form action="{{ route('admin-nvk.editsubmit', ['id' => $nvkloaisanpham->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin loại sản phẩm cập nhật</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nvkMaloai" class="col-sm-2 col-form-label">
                            Mã Loại
                        </label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="nvkMaloai" name="nvkMaloai" value="{{ $nvkloaisanpham->nvkMaloai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTenLoai" class="col-sm-2 col-form-label">
                            Tên Loại
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkTenLoai" name="nvkTenLoai" value="{{ $nvkloaisanpham->nvkTenLoai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">
                            Trạng Thái
                        </label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" {{ $nvkloaisanpham->nvkTrangThai == 0 ? 'checked' : '' }}>
                                <label for="nvkTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="1" {{ $nvkloaisanpham->nvkTrangThai == 1 ? 'checked' : '' }}>
                                <label for="nvkTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Cập nhật</button>
                    <a href="/nvkAdmins/nvk-loai-san-pham" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
