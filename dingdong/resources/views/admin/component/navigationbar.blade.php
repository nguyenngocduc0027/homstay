  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin_dashboard') }}">
                  <i class="bi bi-grid"></i>
                  <span>Thống Kê</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-chat-dots-fill"></i>
                <span>Nhắn Tin</span>
            </a>
        </li>
          <li class="nav-heading">Danh Mục</li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-house"></i><span>Quản Lý Nhà Trọ</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li><a href="{{ route('admin_houses') }}"><i class="bi bi-circle"></i><span>Nhà Trọ</span></a></li>
                  <li><a href="{{ route('admin_rooms') }}"><i class="bi bi-circle"></i><span>Phòng Trọ</span></a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-person-check"></i><span>Quản Lý Người Dùng</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li><a href=""><i class="bi bi-circle"></i><span>Quản Lý</span></a></li>
                  <li><a href="{{ route('admin_customer')}}"><i class="bi bi-circle"></i><span>Khách Thuê</span></a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-check"></i><span>Hợp Đồng - Hóa Đơn</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li><a href=""><i class="bi bi-circle"></i><span>Hợp Đồng</span></a></li>
                  <li><a href=""><i class="bi bi-circle"></i><span>Hóa Đơn</span></a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-funnel"></i><span>Số Điện - Nước</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li><a href=""><i class="bi bi-circle"></i><span>Số Điện</span></a></li>
                  <li><a href=""><i class="bi bi-circle"></i><span>Số Nước</span></a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-receipt"></i><span>Quản Lý Thu Chi</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li><a href=""><i class="bi bi-circle"></i><span>Thu Về</span></a></li>
                  <li><a href=""><i class="bi bi-circle"></i><span>Chi Ra</span></a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav5" data-bs-toggle="collapse" href="#">
                <i class="bi bi-stack"></i><span>Quản Lý Khác</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li><a href=""><i class="bi bi-circle"></i><span>Kho Đồ</span></a></li>
                <li><a href=""><i class="bi bi-circle"></i><span>Vân Tay</span></a></li>
                <li><a href=""><i class="bi bi-circle"></i><span>Phương Tiện</span></a></li>
                <li><a href=""><i class="bi bi-circle"></i><span>Yêu Cầu</span></a></li>
                <li><a href=""><i class="bi bi-circle"></i><span>Dịch Vụ</span></a></li>
            </ul>
        </li>
          <li class="nav-heading">Công Cụ</li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="">
                  <i class="bi bi-person-bounding-box"></i>
                  <span>Phân Quyền</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-archive"></i>
                <span>Đẩy Phòng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-gear-fill"></i>
                <span>Trang Web</span>
            </a>
        </li>
      </ul>

  </aside><!-- End Sidebar-->
