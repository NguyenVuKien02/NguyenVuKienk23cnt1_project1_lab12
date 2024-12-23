@extends('_layout.admins.master')
@section('title','Danh Sach San Pham')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
@section('content-body')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="{{route('admin-nvk.createsubmit')}}" class="btn btn-success">Thêm Mới </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng tháithái</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvksanpham as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMaSanPham }}</td>
                            <td>{{ $item->nvkTenSanPham }}</td>
                            <td>{{ $item->nvkHinhAnh }}</td>
                            <td>{{ $item->nvkSoLuong }}</td>
                            <td>{{ $item->nvkDonGia }}</td>
                            <td>{{ $item->nvkMaloai }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin-nvk.chitiet', ['id' => $item->id]) }}" class="btn btn-primary me-2">chi tiết <i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ route('admin-nvk.edit', ['id' => $item->id]) }}" class="btn btn-primary me-2">Sửa<i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                    <a href="{{ route('admin-nvk.delete', ['id' => $item->nvkMaSanPham]) }}"
                                        class="btn btn-danger me-2"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa  <i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
