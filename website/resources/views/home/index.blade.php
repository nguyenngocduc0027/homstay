@extends('index')
@section('content')



        <!-- ============================ Hero Banner  Start================================== -->
        @include('home.elements.banner')
        <!-- ============================ Hero Banner End ================================== -->

        <!-- ============================ Property For Rent Start ================================== -->
        @include('home.elements.listroom')
        <!-- ============================ Property For Rent End ================================== -->


        <!-- ============================ Property For Sell Start ================================== -->
        @include('home.elements.listsell')
        <div class="clearfix"></div>
        <!-- ============================ Property For Sell End ================================== -->


        <!-- ============================ Explore Places Start ================================== -->
        @include('home.elements.listhouse')
        <div class="clearfix"></div>
        <!-- ============================ Explore Places End ================================== -->


        <!-- ============================ New Projects Start ================================== -->
        @include('home.elements.bannercontact')
        <div class="clearfix"></div>
        <!-- ============================ New project End ================================== -->

        @include('home.elements.howitswork')
        @include('home.elements.countbar')

        <!-- ============================ Explore Top Agents Start ================================== -->
        @include('home.elements.listmember')
        <div class="clearfix"></div>
        <!-- ============================ Explore Top Agents End ================================== -->



        <!-- ============================ Smart Testimonials ================================== -->
        @include('home.elements.listfeedback')
        <!-- ============================ Smart Testimonials End ================================== -->

        @include('home.elements.gridnews')
        @include('home.elements.downloadapp')
        @include('home.elements.contactform')

        <!-- ============================ Call To Action ================================== -->
        @include('home.elements.become')
        <!-- ============================ Call To Action End ================================== -->




@endsection
