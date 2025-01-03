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

        .nut{
            display: flex;
            text-align: center;
        }
        .nut a{

            margin-left: 10px;

        }

    .ttd{
        margin: 40px;
        padding: 20px;
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
                <h1>Danh Sách Hoá Đơn</h1>
                <a href="{{route('nvk.createsubmitHD')}}" class="btn btn-success" >Thêm mới hóa đơn <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered" border="1">
                <thead>
                    <tr class="chu">
                        <th>#</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã KH </th>
                        <th>Ngày Hóa Đơn</th>
                        <th>Họ Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Tổng Giá Trị</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkHoaDon as $item)
                        <tr class="ttd">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMaHoaDon }}</td>
                            <td>{{ $item->nvkMakhachhang }}</td>
                            <td>{{ $item->nvkNgayHoaDon }}</td>
                            <td>{{ $item->nvkHotenKhachHang }}</td>
                            <td>{{ $item->nvkEmail }}</td>
                            <td>{{ $item->nvkDienThoai }}</td>
                            <td>{{ $item->nvkDiaChi }}</td>
                            <td>{{ $item->nvkTongGiaTri }}</td>
                            <td>{{ $item->nvkTrangThai }}</td>
                            <td >
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('nvk.chitietHD', ['id' => $item->id]) }}" class="btn btn-primary" style="font-weight: bold"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="{{ route('nvk.editHDsubmit', ['id' => $item->id]) }}" class="btn btn-warning" style="font-weight: bold"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('nvk.deleteHd', ['id' => $item->id]) }}"
                                        class="btn btn-danger" style="font-weight: bold"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fa-solid fa-trash"></i></a>
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

            <div class="">
                <ul class="pagination">
                {{ $nvkHoaDon->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection
