@extends('_layout.admins.master')
@section('title','Them moi san Pham')

@section('content-body')
    <div class="container">
        <div class="row ">
           <div class="col">
                <form action="{{route('admin-nvk.createsubmitsp')}}" method="post" >
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Thêm Mới Sản Phẩm </h2>
                        </div>
                    </div>

                    <div class="card-body container-fruid">
                        <div class="mb-8 row">
                            <label for="nvkMaSanPham" class="col-sm-2 col-form-label" style="font-weight: bold">Mã SP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkMaSanPham" name="nvkMaSanPham" value="{{old('nvkMaSanPham')}}">
                                @error('nvkMaSanPham')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>

                        <div class="mb-8 row">
                            <label for="nvkTenSanPham " class="col-sm-2 col-form-label" style="font-weight: bold">Tên SP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkTenSanPham" name="nvkTenSanPham" value="{{old('nvkTenSanPham')}}">
                                @error('nvkTenSanPham')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>

                          <div class="mb-8 row">
                            <label for="nvkHinhAnh" class="col-sm-2 col-form-label" style="font-weight: bold" >Hình Ảnh:</label>
                            <div class="col-sm-10">

                                <select name="nvkHinhAnhSelected" class="form-control mt-2">
                                    <option value="">--- Chọn ảnh có sẵn ---</option>
                                    @foreach ($availableImages as $file)
                                        <option value="{{ $file->getFilename() }}">{{ $file->getFilename() }}</option>
                                    @endforeach
                                </select>

                            </div>

                        <div class="mb-8 row">
                            <label for="nvkSoLuong " class="col-sm-2 col-form-label" style="font-weight: bold">Số Lượng:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="nvkSoLuong" name="nvkSoLuong" value="{{old('nvkSoLuong')}}">
                                @error('nvkSoLuong')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>

                        <div class="mb-8 row">
                            <label for="nvkDonGia " class="col-sm-2 col-form-label" style="font-weight: bold">Đơn Giá:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="nvkDonGia" name="nvkDonGia" value="{{old('nvkDonGia')}}">
                                @error('nvkDonGia')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                        <div class="mb-8 row">
                            <label for="nvkMaloai" class="col-sm-2 col-form-label" style="font-weight: bold" >Tên loại:</label>
                            <div class="col-sm-10">
                              <select name="nvkMaloai" id="nvkMaloai" class="form-control" >
                                @foreach ( $nvkloaisanpham as $item)
                                    <option value="{{$item->nvkMaloai}}">{{$item->nvkTenLoai}}</option>
                                @endforeach
                              </select>
                                @error('nvkMaloai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>

                          <div class="mb-8 row">
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
                                    <input type="radio"
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
                    <div class="card-footer" style="margin-top: -10px; ">
                        <button  class="btn btn-success" >Ghi Lại </button>
                        <a href="{{route('admin-nvk.listsp')}}" class="btn btn-success">Quạy lại</a>
                    </div>
                </form>
           </div>
        </div>
    </div>
@endsection
