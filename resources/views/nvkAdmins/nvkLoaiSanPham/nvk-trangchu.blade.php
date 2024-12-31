@extends('_layout.admins.master')

@section('title','Quản lý')
<head>
    <style>
        .container{
            display: flex;
            justify-content: space-between; /* Tạo khoảng cách giữa các cột */
            align-items: stretch; /* Đảm bảo chiều cao các cột bằng nhau */
        }
        .container1{
            display: flex;
            align-items: stretch; /* Đảm bảo chiều cao các cột bằng nhau */
            margin-left: 10px;
        }
        .card{
            flex: 1; /* Mỗi cột có chiều rộng bằng nhau */
            margin: 0 4px; /* Khoảng cách giữa các cột */
            background-color: #fff; /* Màu nền cột (tùy chỉnh) */
            border: 1px solid #ccc; /* Đường viền cột */
            padding: 15px; /* Khoảng cách bên trong */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
        }
        .card-footer{
            display: flex;
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center;    /* Căn giữa theo chiều dọc */
        }
    </style>
</head>
@section('content-body')
            <div class="row">
                <h1>QUẢN LÝ NỘI DUNG</h1>
            </div>
    <div>
    <div class="container">
        <div class="col-md-3" style="padding-left: 20px" >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng Số Admin</h5>
                    @if($nvkquantri)
                        <p class="card-text">Số lượng admin: {{ $nvkquantri->count() }}</p>
                    @else
                        <p class="card-text">Không có admin trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('nvk-admins-listQT') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left: 20px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng Loại Sản Phẩm</h5>

                    @if($nvkloaisanpham)
                        <p class="card-text">Số lượng loại sản phẩm: {{ $nvkloaisanpham->count() }}</p>
                    @else
                        <p class="card-text">Không có loại sản phẩm nào trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('admin-nvk.list') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left: 20px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng Sản Phẩm</h5>

                    @if($nvksanpham)
                        <p class="card-text">Số lượng sản phẩm: {{ $nvksanpham->count() }}</p>
                    @else
                        <p class="card-text">Không có sản phẩm nào trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('admin-nvk.listsp') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-left: 20px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng Khách Hàng</h5>

                    @if($nvkkhachhang)
                        <p class="card-text">Số lượng khách hàng: {{ $nvkkhachhang->count() }}</p>
                    @else
                        <p class="card-text">Không có khách hàng nào trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('nvk.listkhachhang') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="col-md-3" style="padding-left: 20px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng Hóa Đơn </h5>

                    @if($nvkHoaDon)
                        <p class="card-text">Số lượng hóa đơn: {{ $nvkHoaDon->count() }}</p>
                    @else
                        <p class="card-text">Không có Hóa Đơn nào trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('nvk.listHD') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left: 20px">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-success">Tổng CT Hóa Đơn </h5>

                    @if($nvkCTHoaDon)
                        <p class="card-text">Số lượng chi tiết hóa đơn: {{ $nvkCTHoaDon->count() }}</p>
                    @else
                        <p class="card-text">Không có chi tiết hóa đơn nào trong hệ thống.</p>
                    @endif
                </div>

                <div class="card-footer">
                    <a href="{{ route('nvk.listCTHD') }}" class="btn btn-success">Chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
