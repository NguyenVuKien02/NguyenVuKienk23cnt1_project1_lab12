@extends('_layout.admins.master')
@section('title','Danh Sach Khach Hang')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nut{
            display: flex;
            text-align: center;
        }
        .nut a{

            margin-left: 10px;

        }
    .chu th{
        text-align: center;
        /* margin: 30px; */
    }
    .ttd{
        margin: 40px;
        padding: 20px;
    }
    </style>
</head>
@section('content-body')
    <div class="container">
        <div class="row ">
            <div class="col-12" >
                <h1>Chi Tiết Hoá Đơn</h1>
                <a href="{{route('nvk.createsubmitCTHD')}}" class="btn btn-success" style="margin-left: 77%;"><i class="fa-solid fa-arrow-right"></i>Thêm Mới CTHD </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered" border="1">
                <thead>
                    <tr class="chu">
                        <th>#</th>
                        <th>Id Hóa Đơn</th>
                        <th>Id Sản Phẩm </th>
                        <th>Số Lượng Mua</th>
                        <th>Đơn Giá Mua</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkctHoaDon as $item)
                        <tr class="ttd">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkHoaDonID }}</td>
                            <td>{{ $item->nvkSanPhamID }}</td>
                            <td>{{ $item->nvkSoLuongMua }}</td>
                            <td>{{ $item->nvkDonGiaMua }}</td>
                            <td>{{ $item->nvkThanhTien }}</td>
                            <td>{{ $item->nvkTrangThai}}</td>
                            <td class="nut">
                                <a href="{{ route('nvk.chitietCTHD', ['id' => $item->id]) }}" class="btn btn-primary" style="font-weight: bold"><i class="fa-solid fa-circle-info"></i></a>
                                <a href="{{ route('nvk.editsubmitCTHD', ['id' => $item->id]) }}" class="btn btn-warning" style="font-weight: bold"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                <a href="{{ route('nvk.deleteCTHD', ['id' => $item->id]) }}"
                                    class="btn btn-danger" style="font-weight: bold"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fa-solid fa-trash"></i>
                                </a>

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
                {{ $nvkHoaDon->links() }}
            </div> --}}
        </div>
    </div>
@endsection
