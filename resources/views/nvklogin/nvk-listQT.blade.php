@extends('_layout.admins.master')
@section('title','Danh Sach Admin')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .table{
        text-align: center;
        justify-content: center; /* Căn giữa theo chiều ngang */
        align-items: center;     /*Căn giữa theo chiều dọc */
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
                <h1>Danh Sách Admin</h1>
                <a href="{{route('admin-nvk.createsubmitQT')}}" class="btn btn-success">Thêm mới admin <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr class="chu">
                        <th>#</th>
                        <th>id</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu </th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkquantri as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}{{--Trả về số thứ tự--}}</td>
                            <td>{{ $item->id  }}</td>
                            <td>{{ $item->nvkTaiKhoan  }}</td>
                            <td>{{ $item->nvkMatKhau }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td>
                                <a href="{{ route('admin-nvk.chitietqt', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Thông tin <i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('admin-nvk.editqt', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Sửa<i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                <a href="{{ route('admin-nvk.deleteqt', ['id' => $item->id]) }}"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa  <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">Chưa có thông tin admin</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
