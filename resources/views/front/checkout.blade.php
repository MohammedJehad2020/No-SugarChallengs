<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>برامج تحدي السكر المصنع</title>
    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/ps-icon/style.css') }}">
    <!-- CSS Library-->
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/front/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/front/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/Magnific-Popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/navigation.css') }}">
    <!-- Custom-->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->





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

    <!-- </main> -->


    <!-- <div class="w-100 h-100 mt-5">

</div> -->
    <main class="ps-main" dir="rtl">
        <div class="ps-checkout pt-80 pb-80">
            <div class="ps-container">
                <x-alert />
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form style="direction: rtl;" class="ps-checkout__form" action="{{ route('checkout') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-21 ">
                            <div class="ps-checkout__billing">
                                <h3 class="d-flex justify-content-center">بيانات المشترك</h3>
                                <!-- hidden field for program_id -->
                                @foreach($cart as $item)
                                <!-- <input name="program_id" value="{{ $item->program->id }}" type="text"> -->
                                @endforeach
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">الاسم :
                                    </label>
                                    <input name="name" class="form-control" placeholder="الاسم"
                                        value="{{ old('name') }}" type="text" @error('name') is-invalid @enderror">
                                    @error('name')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">الايميل :<span>*</span>
                                    </label>
                                    <input name="email" placeholder="الايميل" class="form-control" type="email"
                                        value="{{ old('email') }}" @error('email') is-invalid @enderror">
                                    @error('email')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="" class="card-title d-flex justify-content-start">الجنس :</label>
                                    <div class="d-flex justify-content-start">
                                        <label class="card-title ml-1">
                                            <input type="radio" name="gender" value="male">
                                            ذكر
                                        </label>
                                        <label class="card-title ml-1">
                                            <input type="radio" name="gender" value="female">
                                            انثى
                                        </label>
                                    </div>
                                    @error('gender')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="d-flex justify-content-start">تاريخ الميلاد :<span>*</span>
                                    </label>
                                    <input name="DOB" placeholder="تاريخ الميلاد" value="{{ old('DOB') }}"
                                        class="form-control" type="date" @error('DOB') is-invalid @enderror">
                                    @error('DOB')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">رقم الجوال :<span>*</span>
                                    </label>
                                    <input name="phone" placeholder="الجوال" value="{{ old('phone') }}"
                                        class="form-control" type="text" @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">الطول :<span>*</span>
                                    </label>
                                    <input name="height" placeholder="الطول" value="{{ old('height') }}"
                                        class="form-control" type="text" @error('height') is-invalid @enderror">
                                    @error('height')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">الوزن :<span>*</span>
                                    </label>
                                    <input name="weight" placeholder="الوزن" value="{{ old('weight') }}"
                                        class="form-control" type="text" @error('weight') is-invalid @enderror">
                                    @error('weight')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">نسبة السكر :<span>*</span>
                                    </label>
                                    <input name="sugar_level" placeholder="نسبة السكر" value="{{ old('sugar_level') }}"
                                        class="form-control" type="text" @error('sugar_level') is-invalid @enderror">
                                    @error('sugar_level')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label class="d-flex justify-content-start">الدولة :<span>*</span>
                                    </label>
                                    <select name="country" value="{{ old('country') }}" class="form-control"
                                        @error('country') is-invalid @enderror">
                                        <option value="">إختار الدولة</option>
                                        @foreach(Symfony\Component\Intl\Countries::getNames('ar') as $code => $name)
                                        <option value="{{ $code }}" @if(old('country')==$code ) selected @endif>
                                            {{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                @guest
                                <div class="form-group">
                                    <div class="ps-checkbox d-flex justify-content-start">
                                        <input class="form-control" type="checkbox" name="register" value="1" id="cb01">
                                        <label for="cb01" class="d-flex justify-content-start">إنشاء حساب ?</label>
                                    </div>
                                </div>
                                @endguest
                                <h3 class="mt-40 d-flex justify-content-start"> معلومات إضافية</h3>
                                <div class="form-group">
                                    <label class="d-flex justify-content-start">ملاحظات على الطلب</label>
                                    <textarea name="notes" class="form-control" rows="5"
                                        placeholder="أدخل ملاحظاتك !">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- cart send request -->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="ps-checkout__order">
                                <header>
                                    <h3 class="d-flex justify-content-center">طلبات الاشتراك في البرامج</h3>
                                </header>
                                <div class="content">
                                    <table class="table ps-checkout__products">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase">البرامج :</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $item)
                                            <tr>
                                                <td>{{ $item->program->name }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <footer>


                                    <div class="form-group paypal">
                                        <button type="submit" class="ps-btn ps-btn--fullwidth">إرسال الطلب</button>
                                    </div>
                                </footer>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>




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