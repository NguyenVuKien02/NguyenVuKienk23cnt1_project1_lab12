@extends('_layout.admins.master')
@section('title','Danh Sach Khach Hang')
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
            <div class="col-12" >
                <h1>Danh Sách Khách Hàng</h1>
                <a href="{{route('nvk.createKH.createsubmit')}}" class="btn btn-success" >Thêm mới khách hàng <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr class="chu">
                        <th>#</th>
                        <th>Mã khách hàng</th>
                        <th>Họ tên khách hàng </th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đăng kký</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkkhachhang as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMakhachhang  }}</td>
                            <td>{{ $item->nvkHotenkhachhang }}</td>
                            <td>{{ $item->nvkEmail }}</td>
                            <td>{{ $item->nvkMatKhau }}</td>
                            <td>{{ $item->nvkDienThoai }}</td>
                            <td>{{ $item->nvkDiaChi }}</td>
                            <td>{{ $item->nvkNgayDK }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td >
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('nvk.chitietkh', ['id' => $item->id]) }}" class="btn btn-primary btn-sm" >TT<i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ route('nvk.editKHsubmit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm" >Sửa<i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('nvk.deleteKH', ['id' => $item->id]) }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa<i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5" class="text-center">Chưa có thông Khách Hàng</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
             {{-- <!-- Liên kết phân trang -->
             <div class="d-flex justify-content-center">
                {{ $nvkkhachhang->links() }}
            </div> --}}
            <div class="">
                <ul class="pagination">
                {{ $nvkkhachhang->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection
