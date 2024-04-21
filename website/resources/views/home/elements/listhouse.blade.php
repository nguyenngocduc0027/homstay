<section class="pt-0">
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-lg-7 col-md-10">
                <div class="small-heads">
                    <h2 class="fs-5 mb-0">Explore Top Places</h2>
                    <p>Best Places</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="floral-wraps">
                    <div class="slide-livok top-arrow">
                        @for ($i = 1; $i <= 8; $i++)
                            @include('home.elements.itemhouse')
                        @endfor

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
