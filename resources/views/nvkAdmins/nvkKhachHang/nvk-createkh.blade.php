@extends('_layout.admins.master')
@section('title','Them moi Loai san Pham')

@section('content-body')
    <div class="container">
        <div class="row ">
           <div class="col">
                <form action="{{route('nvk.createKH.createsubmit')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Thêm mới khách hàng </h2>
                        </div>
                    </div>

                    <div class="card-body container-fruid">
                        <div class="mb-3 row">
                            <label for="nvkMakhachhang" class="col-sm-2 col-form-label" style="font-weight: bold">Mã Khách Hàng:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkMakhachhang" name="nvkMakhachhang" value="{{old('nvkMakhachhang')}}">
                                @error('nvkMakhachhang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkHotenkhachhang" class="col-sm-2 col-form-label" style="font-weight: bold">Tên Khách Hàng:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkHotenkhachhang" name="nvkHotenkhachhang" value="{{old('nvkHotenkhachhang')}}">
                                @error('nvkHotenkhachhang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkEmail" class="col-sm-2 col-form-label" style="font-weight: bold">Emaill:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{old('nvkEmail')}}">
                                @error('nvkEmail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkDienThoai" class="col-sm-2 col-form-label" style="font-weight: bold">Điện Thoại:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{old('nvkDienThoai')}}">
                                @error('nvkDienThoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkDiaChi" class="col-sm-2 col-form-label" style="font-weight: bold">Địa Chỉ:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{old('nvkDiaChi')}}">
                                @error('nvkDiaChi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkNgayDK" class="col-sm-2 col-form-label" style="font-weight: bold">Ngày Đăng Kí:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="nvkNgayDK" name="nvkNgayDK" value="{{old('nvkNgayDK')}}">
                                @error('nvkNgayDK')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="nvkTrangThai" class="col-sm-2 col-form-label" style="font-weight: bold">Trạng Thái:</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input
                                        type="radio"
                                        class="form-check-input"
                                        id="nvkTrangThai1"
                                        name="nvkTrangThai"
                                        value="1"
                                        checked
                                    />
                                    <label for="nvkTrangThai1" class="form-check-label">Hiển Thị</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input
                                        type="radio"
                                        class="form-check-input"
                                        id="nvkTrangThai0"
                                        name="nvkTrangThai"
                                        value="0"
                                    />
                                    <label for="nvkTrangThai0" class="form-check-label">Khóa</label>
                                </div>
                            </div>
                            @error('nvkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button  class="btn btn-success">Ghi Lại </button>
                        <a href="{{route('admin-nvk.list')}}" class="btn btn-success">Quạy lại</a>
                    </div>
                </form>
           </div>
        </div>
    </div>
@endsection
