<section class="gray-bg">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Good Reviews by Customers</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12">

                <div class="smart-textimonials smart-center" id="smart-textimonials">
                    @for($i=1;$i<=10;$i++)
                    @include('home.elements.itemfeedback')
                    @endfor


                </div>
            </div>

        </div>

    </div>
</section>
