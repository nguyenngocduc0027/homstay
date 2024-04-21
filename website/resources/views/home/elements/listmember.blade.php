<section class="pt-10">
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-lg-7 col-md-10">
                <div class="small-heads">
                    <h2 class="fs-5 mb-0">Meet Top Agents</h2>
                    <p>Top Agents</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="floral-wraps">
                    <div class="slide-livok top-arrow">
                        @for ($i = 1; $i <= 10; $i++)
                            @include('home.elements.itemmember')
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
