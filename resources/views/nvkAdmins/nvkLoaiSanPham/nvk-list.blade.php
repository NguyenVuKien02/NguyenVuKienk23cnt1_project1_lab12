@extends('_layout.admins.master')
@section('title','Danh Sach Loai San Pham')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
@section('content-body')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h1>Danh Sách Loại Sản Phẩm</h1>
                <a href="{{route('admin-nvk.createsubmit')}}" class="btn btn-success">Thêm Mới </a>
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
                                <a href="{{ route('admin-nvk.chitiet', ['id' => $item->id]) }}" class="btn btn-primary">chi tiết <i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('admin-nvk.edit', ['id' => $item->id]) }}" class="btn btn-primary">Sửa<i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                <a href="{{ route('admin-nvk.delete', ['id' => $item->nvkMaloai]) }}"
                                    class="btn btn-danger"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa  <i class="fa-solid fa-trash"></i></a>
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
