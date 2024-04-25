@extends('index')
@section('content')
    <!-- ============================ All Property ================================== -->
    <section class="gray-simple">

        <div class="container">
            <div class="row">

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="simple-sidebar sm-sidebar" id="filter_search" style="left:0;">

                        <div class="search-sidebar_header">
                            <h4 class="ssh_heading">Close Filter</h4>
                            <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i
                                    class="fa-regular fa-circle-xmark fs-5 text-muted-2"></i></button>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets">

                            <div class="search-inner p-0">

                                <div class="filter-search-box">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded-3 ps-5"
                                                placeholder="Search by space name…">
                                            <div class="position-absolute top-50 start-0 translate-middle-y ms-2">
                                                <span class="svg-icon text-primary svg-icon-2hx">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                            height="2" rx="1"
                                                            transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                        <path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    @for ($h=1;$h<=10;$h++)
                                        <!-- Single Search -->
                                    <div class="single_search_boxed">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#fbedrooms{{$h}}" data-bs-toggle="collapse" aria-expanded="false"
                                                    role="button" class="collapsed">House {{$h}}</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="fbedrooms{{$h}}" data-parent="#fbedrooms">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body pt-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @for ($i=1;$i<=10;$i++)
                                                                <li class="form-check">
                                                                    <input id="a{{$i}}" class="form-check-input"
                                                                        name="bed" type="radio">
                                                                    <label for="a{{$i}}" class="form-check-label">Room {{$i}} in H {{$h}}</label>
                                                                </li>
                                                                @endfor

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->

                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column pull-left">
                                        <h4 class="fs-6 m-0">Found 1-10 of 142 Results</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center g-4">
                        @for($i=1;$i<= 10;$i++)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        @include('home.elements.itemroom')
                    </div>
                        @endfor


                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination p-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">18</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All Property ================================== -->
@endsection
