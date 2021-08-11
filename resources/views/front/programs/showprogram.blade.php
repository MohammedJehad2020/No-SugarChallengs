<x-front-layout>

    <main class="ps-main">
        @if (session()->has('status'))
              <div class="alert alert-success">
                  {{ session()->get('status') }}
              </div>
        @endif
        <div class="test">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product--detail pt-60">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-lg-offset-1">

                        <div class="ps-product__thumbnail col-md-4">
                            <img class="img-thumbnail" style="width:80%; height:auto;" src="{{ $program->image_url }}"
                                alt="">
                        </div>

                        <div class="ps-product__info col-md-8">

                            <h1>{{ $program->name }}</h1>
                            <div class="ps-product__block ps-product__quickview">
                                <h4>التفاصيل :</h4>
                                <p>{{ $program->description }}</p>
                            </div>



                            <form action="{{ route('cart')}}" id="addToCart" method="post">
                                @csrf

                                <input type="hidden" name="program_id" value="{{ $program->id }}">

                                <div class="ps-product__shopping">
                                    <a class="ps-btn mb-10" href="{{ route('checkout') }}" onclick="document.getElementById('addToCart').submit()">
                                        الاشتراك في البرنامج</a>
                                </div>
                            </form>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


    </main>
</x-front-layout>



<!-- ***************************** -->
