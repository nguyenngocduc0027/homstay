@extends('index')
@section('content')
    <section class="bg-light">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" onclick="openFilterSearch()"
                            class="btn btn-dark full-width mb-4">Dashboard Navigation<i class="fa-solid fa-bars ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-12">

                    <div class="simple-sidebar sm-sidebar" id="filter_search">

                        <div class="search-sidebar_header">
                            <h4 class="ssh_heading">Close Filter</h4>
                            <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i
                                    class="fa-regular fa-circle-xmark fs-5 text-muted-2"></i></button>
                        </div>

                        <div class="sidebar-widgets">
                            <div class="dashboard-navbar">

                                <div class="d-user-avater">
                                    <img src="{{auth()->user()->avatar }}" class="img-fluid avater" alt="">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <span>{{ auth()->user()->email}}</span>
                                </div>

                                <div class="d-navigation">
                                    <ul>
                                        <li><a href="{{route('my-profile')}}"><i class="fa-solid fa-address-card"></i>Thông
                                                Tin Cá Nhân</a></li>
                                        <li><a href="{{route('contract')}}"><i class="fa-solid fa-bookmark"></i>Hợp Đồng</a></li>
                                        <li><a href="{{route('bill')}}"><i class="fa-solid fa-building-circle-check"></i>Hoá Đơn</a>
                                        </li>
                                        <li><a href="{{route('reset-password')}}"><i class="fa-solid fa-unlock"></i>Đổi Mật Khẩu</a></li>
                                        <li><a href="{{ route('logout') }}"><i class="fa-solid fa-power-off"></i>Đăng
                                                Xuất</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    @yield('contentuser')
                </div>

            </div>
        </div>
    </section>
@endsection
