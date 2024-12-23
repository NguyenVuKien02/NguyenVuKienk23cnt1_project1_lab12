@extends('_layout.admins.master')
@section('title','Them moi Loai san Pham')

@section('content-body')
    <div class="container">
        <div class="row ">
           <div class="col">
                <form action="{{route('admin-nvk.createsubmit')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Thêm Mới Loại Sản Phẩm </h2>
                        </div>
                    </div>

                    <div class="card-body container-fruid">
                        <div class="mb-3 row">
                            <label for="nvkMaloai  " class="col-sm-2 col-form-label">Ma Loai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkMaloai" name="nvkMaloai">

                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="nvkTenLoai " class="col-sm-2 col-form-label">Ten Loai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nvkTenLoai" name="nvkTenLoai">
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
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
