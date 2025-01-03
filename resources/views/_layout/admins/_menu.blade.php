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
      transform: translateY(-5px); /* Nâng lên khi trỏ chuột vào */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Thêm bóng */
    }
    /*img{
      margin-left: -3px;
      border-radius: 20px;
    }
    /* CSS để giảm khoảng cách */

    .rounded-corners {
      width: 50px; /* Chiều rộng của hình tròn */
      height: 50px; /* Chiều cao của hình tròn (bằng chiều rộng) */
      border-radius: 50%; /* Biến hình ảnh thành hình tròn */
      overflow: hidden; /* Ẩn phần thừa ngoài biên */
      object-fit: cover; /* Căn chỉnh hình ảnh vừa khung */
      margin-left: 8px;
    }
    .quanli{
        text-decoration: none; /* Xóa dấu gạch dưới */
        font-weight: 700; /* Đậm */
        font-size: 20px;  /* To hơn */
    }
  </style>

  <!-- Liên kết đến trang chủ -->
  <a href="{{ route('admin-nvk.loaisanpham.trangchu') }}" class="img-button" >
    <img src="{{ asset('/images/Picsart_24-03-22_11-51-52-423.jpg') }}" alt="anh" class="rounded-corners"><a href="{{ route('admin-nvk.loaisanpham.trangchu') }}" class="quanli" style="color: red">Quản lý hệ thống</a>
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
        <a href="/nvkAdmins/nvkCTHoaDon"><i class="fa-solid fa-bars"></i> Chi tiết hóa đơn</a>
    </li>
    <li class="list-group-item">
        <a href="/nvkAdmins/nvkHoaDon"><i class="fa-solid fa-file-invoice-dollar"></i> Danh Sách Hóa đơn</a>
    </li>

  </ul>
