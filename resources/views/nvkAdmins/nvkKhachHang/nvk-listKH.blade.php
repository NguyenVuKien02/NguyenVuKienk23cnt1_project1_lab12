@extends('_layout.admins.master')
@section('title','Danh Sach Khach Hang')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
@section('content-body')
    <div class="container">
        <div class="row ">
            <div class="col-12" >
                <h1>Danh Sách Khách Hàng</h1>
                <a href="{{route('nvk.createKH.createsubmit')}}" class="btn btn-success" style="margin-left: 77%;"><i class="fa-solid fa-arrow-right"></i>Thêm Mới Khách hàng</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Khách Hàng</th>
                        <th>Họ Tên Khách Hàng </th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkkhachhang as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMakhachhang  }}</td>
                            <td>{{ $item->nvkHotenkhachhang }}</td>
                            <td>{{ $item->nvkEmail }}</td>
                            <td>{{ $item->nvkDienThoai }}</td>
                            <td>{{ $item->nvkDiaChi }}</td>
                            <td>{{ $item->nvkNgayDK }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td class="d-flex align-items-center">
                                <a href="{{ route('nvk.chitietkh', ['id' => $item->id]) }}" class="btn btn-primary btn-sm" >Chi tiết<i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('nvk.editKHsubmit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm" >Sửa<i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                <a href="{{ route('nvk.deleteKH', ['id' => $item->id]) }}"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa<i class="fa-solid fa-trash"></i></a>
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
        </div>
    </div>
@endsection
