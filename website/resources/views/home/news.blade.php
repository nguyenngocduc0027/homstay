@extends('index')
@section('content')

<section class="gray-simple">

    <div class="container">

        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <h2>Latest News</h2>
                    <p>We post regulary most powerful articles for help and support.</p>
                </div>
            </div>
        </div>

        <!-- row Start -->
        <div class="row justify-content-center g-4">

            @for ($i=1;$i<10;$i++)
            <!-- Single blog Grid -->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-wrap-grid h-100 shadow">

                    <div class="blog-thumb">
                        <a href="#"><img src="/img/p-11.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="blog-info">
                        <span class="post-date label bg-seegreen text-light"><i class="ti-calendar"></i>30 july 2018</span>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="#">Why people choose listio for own properties</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                        <a href="#" class="text-primary fw-medium">Continue<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>

                </div>
            </div>

            @endfor



        </div>
        <!-- /row -->

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

</section>

@endsection
