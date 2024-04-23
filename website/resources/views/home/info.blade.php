@extends('index')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">Our Articles</h2>
                <span class="ipn-subtitle">See Our Latest Articles &amp; News</span>

            </div>
        </div>
    </div>
</div>

<section class="gray-bg">

    <div class="container">

        <!-- row Start -->
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6">
                <img src="/img/sb.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="story-wrap explore-content">

                    <h2>Our Story</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                </div>
            </div>

        </div>
        <!-- /row -->

    </div>

</section>

<section class="gray-bg">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading center">
                    <h2>Our Mission &amp; Work Process</h2>
                    <p>Professional &amp; Dedicated Team</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6">

                <div class="icon-mi-left">
                    <i class="fa-solid fa-unlock-keyhole text-primary"></i>
                    <div class="icon-mi-left-content">
                        <h4>Fully Secure &amp; 24x7 Dedicated Support</h4>
                        <p>If you are an individual client, or just a business startup looking for good backlinks for your website.</p>
                    </div>
                </div>

                <div class="icon-mi-left">
                    <i class="fa-brands fa-twitter text-primary"></i>
                    <div class="icon-mi-left-content">
                        <h4>Manage your Social &amp; Busness Account Carefully</h4>
                        <p>If you are an individual client, or just a business startup looking for good backlinks for your website.</p>
                    </div>
                </div>

                <div class="icon-mi-left">
                    <i class="fa-solid fa-layer-group text-primary"></i>
                    <div class="icon-mi-left-content">
                        <h4>We are Very Hard Worker and loving</h4>
                        <p>If you are an individual client, or just a business startup looking for good backlinks for your website.</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6">
                <img src="/img/vec-2.png" class="img-fluid" alt="">
            </div>

        </div>
    </div>
</section>

@include('home.elements.howitswork')
@include('home.elements.countbar')
@include('home.elements.listfeedback')


@endsection
