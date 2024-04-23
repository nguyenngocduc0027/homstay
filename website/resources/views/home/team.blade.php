
@extends('index')
@section('content')

<section class="gray-bg">
    <div class="container">

        <div class="row justify-content-center g-4">

            @for ($i=1;$i<=10;$i++)
                            <!-- Single Agent -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="agents-grid card rounded-3 shadow">

                    <div class="agents-grid-wrap">
                        <div class="fr-grid-thumb mx-auto text-center mt-5 mb-3">
                            <a href="agent-page.html" class="d-inline-flex p-1 circle border">
                                <img src="/img/user-1.png" class="img-fluid circle" width="130" alt="">
                            </a>
                        </div>
                        <div class="fr-grid-deatil text-center">
                            <div class="fr-grid-deatil-flex">
                                <h5 class="fr-can-name mb-0"><a href="#">James N. Green</a></h5>
                                <span class="agent-property text-muted-2">117 Properties</span>
                            </div>
                        </div>
                    </div>

                    <div class="fr-grid-info d-flex align-items-center justify-content-between px-4 py-4">
                        <div class="fr-grid-sder">
                            <ul class="p-0">
                                <li><strong>Call:</strong><span class="fw-medium text-primary ms-2">1234567859</span></li>
                                <li><strong>Mail:</strong><span class="fw-medium text-primary ms-2">example@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="fr-grid-deatil-flex-right">
                            <div class="agent-email"><a href="#" class="square--50 rounded text-danger bg-light-danger"><i class="fa-solid fa-envelope-circle-check"></i></a></div>
                        </div>
                    </div>

                </div>
            </div>
            @endfor
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <a href="listings-list-with-sidebar.html" class="btn btn-primary px-lg-5 rounded">Explore More Agents</a>
            </div>
        </div>

    </div>
</section>

@endsection
