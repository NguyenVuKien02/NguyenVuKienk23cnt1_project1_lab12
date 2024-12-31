@extends('_layout.admins.master')
@section('title','Thêm Mới CT Hóa Đơn')

@section('content')
<div class="container">
    <h2 class="my-4">Thêm Mới CT Hóa Đơn</h2>

    <form action="{{ route('nvk.createsubmitCTHD') }}" method="POST">
        @csrf
        <div>
            <label for="nvkHoaDonID">ID Hóa Đơn:</label>
            <select name="nvkHoaDonID" id="nvkHoaDonID"  class="form-control" required>
                @foreach($nvkHoaDon as $HoaDon)
                    <option value="{{ $HoaDon->id }}">{{ $HoaDon->nvkHotenKhachHang }}</option>
                @endforeach
            </select>
            @error('nvkHoaDonID')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="nvkSanPhamID">ID Sản Phẩm:</label>
            <select name="nvkSanPhamID" id="nvkSanPhamID"  class="form-control" required>
                @foreach($nvkSanPham as $SanPham)
                    <option value="{{ $SanPham->id }}">{{ $SanPham->nvkTenSanPham }}</option>
                @endforeach
            </select>
            @error('nvkSanPhamID')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Ngày Hóa Đơn -->
        <div class="form-group mb-1">
            <label for="nvkNgayHoaDon">Ngày Hóa Đơn</label>
            <input type="date" name="nvkNgayHoaDon" id="nvkNgayHoaDon" class="form-control" value="{{ old('nvkNgayHoaDon') }}" required>
            @error('nvkNgayHoaDon')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!--Số Lượng Mua -->
        <div class="form-group mb-1">
            <label for="nvkSoLuongMua">Số Lượng Mua</label>
            <input type="number" name="nvkSoLuongMua" id="nvkSoLuongMua" class="form-control" value="{{ old('nvkSoLuongMua') }}" required>
            @error('nvkSoLuongMua')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Đơn Gia Mua -->
        <div class="form-group mb-1">
            <label for="nvkDonGiaMua">Đơn Giá Mua</label>
            <input type="number" name="nvkDonGiaMua" id="nvkDonGiaMua" class="form-control" value="{{ old('nvkDonGiaMua') }}">
            @error('nvkDonGiaMua')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Thành Tiền-->
        <div class="form-group mb-1">
            <label for="nvkThanhTien"> Thành Tiền</label>
            <input type="text" name="nvkThanhTien" id="nvkThanhTien" class="form-control" value="{{ old('nvkThanhTien') }}">
            @error('nvkThanhTien')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Trạng Thái -->
        <div class="form-group mb-1">
            <label>Trạng Thái</label>
            <div>
                <input type="radio" id="active" name="nvkTrangThai" value="1" {{ old('nvkTrangThai') == '1' ? 'checked' : '' }} checked>
                <label for="active">Hiển Thị</label>

                <input type="radio" id="inactive" name="nvkTrangThai" value="0" {{ old('nvkTrangThai') == '0' ? 'checked' : '' }}>
                <label for="inactive">Khóa</label>
            </div>
            @error('nvkTrangThai')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Thêm Mới</button>
        <a href="{{ route('nvk.listCTHD') }}" class="btn btn-secondary">Quay Lại</a>
    </form>
</div>
@endsection
