@extends('_layout.admins.master')
@section('title','Danh Sach Loai San Pham')
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
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1>Danh Sách Loại Sản Phẩm</h1>
                <a href="{{route('admin-nvk.createsubmit')}}" class="btn btn-success">Thêm mới loại sản phẩm <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkloaisanpham as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMaloai }}</td>
                            <td>{{ $item->nvkTenLoai }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td>

                                    <a href="{{ route('admin-nvk.chitiet', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Chi tiết <i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ route('admin-nvk.edit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Sửa <i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin-nvk.delete', ['id' => $item->nvkMaloai]) }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa <i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="">
                <ul class="pagination">
                {{ $nvkloaisanpham->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection
