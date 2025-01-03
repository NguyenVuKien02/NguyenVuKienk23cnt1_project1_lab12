
@extends('_layout.admins.master')
@section('title','Danh Sach San Pham')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 1px 0;
        }

        .page-item {
        margin: 0 1px;
        }

        .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        color: black;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px; /* Làm tròn góc */
        text-decoration: none;
        font-size: 25px;
        font-weight: bold;
        transition: all 0.3s ease; /* Hiệu ứng mượt */
        }

        .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
        cursor: default;
        }

        .page-item.disabled .page-link {
        color: #6c757d;
        background-color: #e9ecef;
        border-color: #dee2e6;
        cursor: not-allowed;
        }
        table{
        text-align: center;
        justify-content: center; /* Căn giữa theo chiều ngang */
        /*align-items: center;     Căn giữa theo chiều dọc */
        }
    </style>
</head>

@section('content-body')
    <!-- Nội dung chính -->
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="{{route('admin-nvk.createsp')}}" class="btn btn-success">Thêm mới sản phẩm <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr class="chu">
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvksanpham as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMaSanPham }}</td>
                            <td>{{ $item->nvkTenSanPham }}</td>
                            <td>
                                @if($item->nvkHinhAnh)
                                <img src="{{ asset('images/' . $item->nvkHinhAnh) }}" alt="Hình ảnh" style="width: 100px; height: auto;">
                                @else
                                    Không có hình ảnh
                                @endif
                            </td>
                            <td>{{ $item->nvkSoLuong }}</td>
                            <td>{{ $item->nvkDonGia }}</td>
                            <td>{{ $item->nvkMaloai }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('admin-nvk.chitietsp', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Chi tiết <i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ route('admin-nvk.editsp', ['nvkID' => $item->id]) }}" class="btn btn-warning btn-sm">Sửa <i class="fa-solid fa-pen-to-square"></i></i></a>
                                    <a href="{{ route('admin-nvk.delete', ['id' => $item->nvkMaSanPham]) }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa <i class="fa-solid fa-trash"></i></a>
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
            <!-- Liên kết phân trang -->
            <div class="">
                <ul class="pagination">
                {{ $nvksanpham->links() }}
            </div>
        </div>
    </div>

@endsection
