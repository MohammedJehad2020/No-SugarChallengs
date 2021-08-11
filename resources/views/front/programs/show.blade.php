<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title>برامج تحدي السكر المصنع</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg nav-back fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">برامج تحدي السكر</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fas fa-syringe fa-2x"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">الكتب</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">فيديوهات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">الاتصال بنا</a></li>
                    </ul>
                    
                    <!--  زر تسجيل الدخول -->
                    @guest('web')
                    <div>
                        <a class="dropdown-item ps-btn ps-btn--fullwidth" href="#"
                            onclick="document.getElementById('logout').submit()"><i class="ft-power"></i> تسجيل
                            الدخول </a>

                        <form id="logout" class="d-none" action="{{ route('login')  }}" method="post">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
                <!--  -->

                <!-- زر تسجيل الخروج -->
                @auth('web')
                <div>
                    <a class="dropdown-item ps-btn ps-btn--fullwidth" href="#"
                        onclick="document.getElementById('logout').submit()"><i class="ft-power"></i> تسجيل
                        الخروج </a>

                    <form id="logout" class="d-none" action="{{ route('logout', 'web') }}" method="post">
                        @csrf
                    </form>
                </div>
                @endauth
                <!--  -->
                </div>
            </div>
        </nav>
    </header>
    <!-- <main class="ps-main mt-5"> -->
        <!-- <div class="container">
        <div class="row">
            <div class="col-md-4">

        </div>
            <div class="col-md-7">
            <img style="height: 400px; " src="{{ $program->image_url }}" alt="">


            </div>

        </div>

    </div> -->
    <div class="w-100 h-100 mt-5">

    </div>

        <div style="width: 60%; height: 500px; margin:auto; margin-top:20px;" class="card text-center">
            <div class="card-header">
                <h2 style="font-weight: bold;">{{ $program->name }}</h2>
            </div>
            <div class="card-body">
                <p class="card-text mx-5">{{ $program->description }}</p>
                <!-- <a href="#" class="btn btn-success">الاشتراك في البرنامج</a> -->

                <form action="{{ route('cart')}}" id="addToCart" method="post">
                                @csrf

                                <input type="hidden" name="program_id" value="{{ $program->id }}">

                                <div class="ps-product__shopping">
                                    <a class="btn btn-success" href="{{ route('checkout') }}" onclick="document.getElementById('addToCart').submit()">
                                        الاشتراك في البرنامج</a>
                                </div>
                            </form>
            </div>

        </div>


    <!-- </main> -->



    <!-- Footer-->
    <footer class="footer py-4 mt-0 fixed-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">حقوق النشر محفوظة @ 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-back btn-social mx-2" href="#!">
                        <i class="fab fa-twitter"></i></a>
                    <a class="btn btn-back btn-social mx-2" href="#!">
                        <i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-back btn-social mx-2" href="#!">
                        <i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3 text" href="#!">السياسة و الخصوصية</a>
                    <a href="#!" class="text">سياسة الاستخدام</a>
                </div>
            </div>
        </div>
    </footer>
</body>


<!-- JS Library-->
<script type="text/javascript" src="{{ asset('assets/front/plugins/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/bootstrap/dist/js/bootstrap.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/gmap3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/imagesloaded.pkgd.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/jquery.matchHeight-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/slick/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/elevatezoom/jquery.elevatezoom.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB">
</script>
<script type="text/javascript" src="{{ asset('assets/front/plugins/revolution/js/jquery.themepunch.tools.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ asset('assets/front/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="{{ asset('assets/front/js/main.js') }}"></script>

</body>


</html>