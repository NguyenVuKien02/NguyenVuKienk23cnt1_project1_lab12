@extends('_layout.admins.master')
@section('title','Thêm Mới Hóa Đơn')

@section('content')
<div class="container">
    <h2 class="my-4">Thêm Mới Hóa Đơn</h2>

    <form action="{{ route('nvk.createsubmitHD') }}" method="POST">
        @csrf
        <div>
            <label for="nvkMaHoaDon">Mã hóa đơn:</label>
            <input type="text" name="nvkMaHoaDon" id="nvkMaHoaDon"  class="form-control" required>
            @error('nvkMaHoaDon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="nvkMakhachhang">Mã khách hàng:</label>
            <select name="nvkMakhachhang" id="nvkMakhachhang"  class="form-control" required>
                @foreach($nvkkhachhang as $khachhang)
                    <option value="{{ $khachhang->id }}">{{ $khachhang->nvkHotenkhachhang }}</option>
                @endforeach
            </select>
            @error('nvkMakhachhang')
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

        <!-- Họ Tên Khách Hàng -->
        <div class="form-group mb-1">
            <label for="nvkHotenKhachHang">Họ Tên Khách Hàng</label>
            <input type="text" name="nvkHotenKhachHang" id="nvkHotenKhachHang" class="form-control" value="{{ old('nvkHotenKhachHang') }}" required>
            @error('nvkHotenKhachHang')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group mb-1">
            <label for="nvkEmail">Email</label>
            <input type="email" name="nvkEmail" id="nvkEmail" class="form-control" value="{{ old('nvkEmail') }}">
            @error('nvkEmail')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Điện Thoại -->
        <div class="form-group mb-1">
            <label for="nvkDienThoai">Điện Thoại</label>
            <input type="text" name="nvkDienThoai" id="nvkDienThoai" class="form-control" value="{{ old('nvkDienThoai') }}">
            @error('nvkDienThoai')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Địa Chỉ -->
        <div class="form-group mb-1">
            <label for="nvkDiaChi">Địa Chỉ</label>
            <input type="text" name="nvkDiaChi" id="nvkDiaChi" class="form-control" value="{{ old('nvkDiaChi') }}">
            @error('nvkDiaChi')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Tổng Giá Trị -->
        <div class="form-group mb-1">
            <label for="nvkTongGiaTri">Tổng Giá Trị</label>
            <input type="number" name="nvkTongGiaTri" id="nvkTongGiaTri" class="form-control" value="{{ old('nvkTongGiaTri') }}" step="0.01" required>
            @error('nvkTongGiaTri')
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
        <a href="{{ route('nvk.listHD') }}" class="btn btn-secondary">Quay Lại</a>
    </form>
</div>
@endsection
