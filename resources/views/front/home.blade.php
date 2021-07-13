<x-front-layout>


    <div class="ps-banner">
        <div>
            <img style="width:50%; display:block; margin-left:auto; margin-right:auto"
                src="assets\front\images\slider\nsugar.webp" alt="">
        </div>
    </div>
    <!-- ------------------------ -->
    <!-- <img src="assets\front\images\slider\sugar.jpg" class="img-fluid" alt="..."> -->
    <!-- ------------------------ -->
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="البرامج">- تحديات السكر المصنع</h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                    data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach ($latest as $program)
                        <div class="grid-item kids">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">

                                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                            style="width:400px; height: 300px;" src="{{ $program->image_url }}" alt=""><a
                                            class="ps-shoe__overlay"
                                            href="{{ route('programs.show', $program->id)}}"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class=""><img src="" alt="">
                                            </div>

                                        </div>
                                        <!-- program name -->
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                href="{{ route('programs.show', $program->id)}}">{{ $program->name }}</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="ps-section--sale-off ps-section pt-80 pb-40">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-hot-deal">
                            <h3>Nike DUNK Max 95 OG</h3>
                            <p class="ps-hot-deal__price">Only: <span>£155</span></p>
                            <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                                <li><span class="hours"></span>
                                    <p>Hours</p>
                                </li>
                                <li class="divider">:</li>
                                <li><span class="minutes"></span>
                                    <p>minutes</p>
                                </li>
                                <li class="divider">:</li>
                                <li><span class="seconds"></span>
                                    <p>Seconds</p>
                                </li>
                            </ul><a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i
                                    class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el
                                        pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el
                                        pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                                <div class="ps-hotspot__content">
                                    <p class="heading">JUMP TO HEADER</p>
                                    <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna
                                        y el
                                        pie sin reducir la libertad de movimiento.</p>
                                </div>
                            </a><img src="{{ asset('assets/front/images/hot-deal.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="ps-owl-actions"><a class="ps-prev" href="#"><i
                                    class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i
                                    class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                    data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4"
                    data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4"
                    data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/1.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div>
                                <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a
                                    class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price">
                                        <del>£220</del> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/3.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/4.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i
                                        class="ps-icon-heart"></i></a><img
                                    src="{{ asset('assets/front/images/shoe/6.jpg') }}" alt=""><a
                                    class="ps-shoe__overlay" href="product-detail.html"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal"><img
                                            src="{{ asset('assets/front/images/shoe/2.jpg') }}" alt=""><img
                                            src="{{ asset('assets/front/images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg') }}"
                                            alt=""><img src="{{ asset('assets/front/images/shoe/5.jpg') }}" alt="">
                                    </div>
                                    <select class="ps-rating ps-shoe__rating">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">Air
                                        Jordan 7
                                        Retro</a>
                                    <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a
                                            href="#"> Jordan</a></p><span class="ps-shoe__price"> £ 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
    <div class="ps-home-testimonial bg--parallax pb-80" data-background="{{ asset('assets/front/images/slider/slideshow2.jpg') }}">
        <div class="container">
            <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0"
                data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"
                data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img
                            src="{{ asset('assets/front/images/slider/sugar.jpg') }}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img
                            src="{{ asset('assets/front/images/testimonial/2.jpg') }}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
                <div class="ps-testimonial">
                    <div class="ps-testimonial__thumbnail"><img
                            src="{{ asset('assets/front/images/testimonial/3.jpg') }}" alt=""><i
                            class="fa fa-quote-left"></i></div>
                    <header>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p>Logan May - CEO & Founder Invision</p>
                    </header>
                    <footer>
                        <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit
                            cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-home-blog pt-80 pb-80">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h2 class="ps-section__title" data-mask="مخاطر السكر ">- مقالات عن السكر المصنع</h2>
                <!-- <div class="ps-section__action"><a class="ps-morelink text-uppercase" href="#">View all post<i
                            class="fa fa-long-arrow-right"></i></a></div> -->
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img style="height: 300px;"
                                    src="{{ asset('assets/front/images/slider/sugar.jpg') }}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">أضرار السكريات</a>
                                <p>يؤدي تناول كميّاتٍ كبيرةٍ من السكريات إلى تخزين الطاقة الفائضة عن احتياجات الجسم على شكل دهون، كما أنَّ العديد من الأطعمة مثل الشوكولاتة، والبسكويت، والكيك، تحتوي على السكريات والدهون، التي تساهم في زيادة الوزن أو السمنة عند تناولها بكميّاتٍ كبيرة..
                                </p>
                                <a class="ps-morelink" href="blog-detail.html">المزيد..<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img
                                    src="{{ asset('assets/front/images/slider/footer1.jpg') }}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">فوائد التوقف عن تناول السكر المضاف والصناعي</a>
                                <p> يجب معرفة الأضرار الكبيرة على الصحة الناتجة عن التناول المفرط للسكريات والاستعداد بعدها للتوقف عن تناول السكر المضاف بشكل نهائي، فما هي هذه الأضرار الناتجة عن تناول السكر المضاف؟ وكيف يتم التوقف عن تناول السكر المضاف؟ وما هي فوائد الابتعاد عن تناول السكر المضاف؟
                                </p>
                                <a class="ps-morelink" href="blog-detail.html"> المزيد...<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img style="height: 300px;"
                                    src="{{ asset('assets/front/images/slider/footer3.jpg') }}" alt=""></div>
                            <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.html">مخاطر السكر المضاف</a>
                                <p>وقد يؤدي الإفراط في تناول السكريات المضافة إلى زيادة مستويات الدهون الثلاثية، وهو ما قد يزيد خطر إصابتك بمرض القلب. تسوس الأسنان. يؤدي تناول السكريات إلى تفاقم تسوس الأسنان عن طريق السماح للبكتيريا بالتكاثر والنمو.
                                </p>
                                <a class="ps-morelink" href="blog-detail.html">المزيد...<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="ps-home-contact">
        <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
        <div class="ps-home-contact__form">
            <header>
                <h3>Contact Us</h3>
                <p>Learn about our company profile, communityimpact, sustainable motivation, and more.</p>
            </header>
            <footer>
                <form action="product-listing.html" method="post">
                    <div class="form-group">
                        <label>Name<span>*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Email<span>*</span></label>
                        <input class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <label>Your message<span>*</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
                    </div>
                </form>
            </footer>
        </div>
    </div> -->

</x-front-layout>