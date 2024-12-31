<style>
    *{
      margin: 2px;
      padding: 1px;
    }
    ul {
      margin-top: 0px;  /* Đặt lại margin-top */
    }
    ul li{
      margin-bottom: 10px;
      border-radius: 10px;
    }
    ul li a{
      text-decoration: none;
      color: Black;
      font-weight: bold;
    }
    ul li:hover{
      background-color: rgba(102, 178, 255);
    }
    img{
      margin-left: -3px;
      border-radius: 20px;
    }
    /* CSS để giảm khoảng cách */

    .container2 h5 {
    margin-bottom: -3px; /* Giảm khoảng cách dưới tiêu đề */
    }

  </style>

  <!-- Liên kết đến trang chủ -->
  <a href="{{ route('admin-nvk.loaisanpham.trangchu') }}" class="img-button" >
    <img src="{{ asset('/images/Picsart_24-03-22_11-51-52-423.jpg') }}" alt="anh" class="rounded-corners w-100 mb-3">
  </a>

  <!-- Menu -->
  <ul class="list-group">
    <li class="list-group-item">
      <a href="{{ route('admin-nvk.loaisanpham.trangchu') }}"><i class="fa-solid fa-database"></i> Databoard</a>
    </li>

    {{-- <li class="list-group-item " aria-current="true">
      <a href=""> Quản trị nội dung </a>

    </li> --}}

    <li class="list-group-item">
      <a href="/nvkAdmins/nvk-listqt"><i class="fa-solid fa-user"></i> Danh Sách Admin</a>
    </li>
    <li class="list-group-item">
        <a href="/nvkAdmins/nvkKhachHang"><i class="fa-solid fa-user-group"></i> Danh Sách khách hàng</a>
    </li>

    <!-- Liên kết tới trang quản lý loại sản phẩm -->
    <li class="list-group-item">
      <a href="/nvkAdmins/nvk-loai-san-pham"><i class="fa-solid fa-bars"></i> Danh Sách Loại Sản Phẩm</a>
    </li>
    <!-- Liên kết tới trang quản lý sản phẩm -->
    <li class="list-group-item">
        <a href="/nvkAdmins/nvk-san-pham"><i class="fa-solid fa-clipboard"></i> Danh Sách Sản Phẩm</a>
    </li>

    <li class="list-group-item">
        <a href="/nvkAdmins/nvkHoaDon"><i class="fa-solid fa-file-invoice-dollar"></i> Danh Sách Hóa đơn</a>
    </li>
    <li class="list-group-item">
        <a href="/nvkAdmins/nvkCTHoaDon"><i class="fa-solid fa-bars"></i> Chi tiết hóa đơn</a>
    </li>

  </ul>
