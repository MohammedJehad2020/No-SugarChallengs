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
                    <li class="nav-item"><a class="nav-link" href="#about">فيديو</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">الاتصال بنا</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li> -->
                </ul>
                
                    <!--  زر تسجيل الدخول -->
                    @guest('web')
                    <div>
                   <a class="dropdown-item ps-btn ps-btn--fullwidth" href="{{ route('login') }}"><i class="ft-power"></i>
                       تسجل الدخول
                   </a>

                        <!-- <a class="dropdown-item ps-btn ps-btn--fullwidth" href="#"
                            onclick="document.getElementById('login').submit()"><i class="ft-power"></i> تسجيل
                            الدخول </a>

                        <form id="login" class="d-none" action="{{ route('login')  }}" method="post">
                            @csrf
                        </form> -->
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

    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <!-- style="background:{{ asset('assets\front\images\background\no-sugar.jpg') }} " -->
    <section id="hero"
        class="d-flex align-items-center">
        <div class="container text-center position-relative">
            <h1>برامج تحدي السكر المصنع</h1>
            <h2>تحدي السكر يهدف للوصول إلى حياة أفضل لأي فرد يتبعه من خلال الابتعاد عن المسبب الرئيس في تقليل مناعة
                الجسم وخلق بيئة مناسبة للأمراض</h2>
            <a href="#about" class="main-btn">إبدا التحدي الان</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-5 mb-3 py-3">
        <div class="container mb-3">
            <div class="section-title">
                <h2 class="text-center">البرامج</h2>
                <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Aspernatur quam optio esse earum voluptatibus repellat?</p> -->
            </div>
            <div class="row">
                @foreach ($latest as $program)
                <a href="{{ route('programs.show', $program->id)}}">
                    <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                        <div class="service shadow">
                            <div class="icon">
                                <!-- <i class="fas fa-tooth"></i> -->
                            </a><img style="width:200px; height: 80px; border-radius: 90%;" src="https://w7.pngwing.com/pngs/741/634/png-transparent-sugar-cubes-computer-icons-cube-blue-angle-food.png" alt="">
            </div>
            <h4><a href="{{ route('programs.show', $program->id)}}">{{ $program->name }}</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Aspernatur quam optio esse earum voluptatibus repellat?</p>
        </div>
        </div>
        </a>
        @endforeach
        <!-- 
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-lungs"></i>
            </div>
            <h4><a href="">Lungs</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Aspernatur quam optio esse earum voluptatibus repellat?</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="service shadow">
            <div class="icon">
                <i class="fas fa-heart"></i>
            </div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Aspernatur quam optio esse earum voluptatibus repellat?</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-dna"></i>
            </div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Aspernatur quam optio esse earum voluptatibus repellat?</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">            
          <i class="fas fa-ambulance"></i>
            </div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Aspernatur quam optio esse earum voluptatibus repellat?</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">
            <i class="fas fa-allergies"></i>
            </div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Aspernatur quam optio esse earum voluptatibus repellat?</p>
          </div>
        </div> -->

        </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <!-- <section class="about-section clearfix py-5">
        <div class="container">
            <div class="about">
                <img class="about-img img-fluid mb-3 mb-lg-0 rounded" src="images/camp1.jpg" alt="">
                <div class="about-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="about-heading mb-4">
                        <span class="about-heading-upper">Welcome</span>
                        <span class="about-heading-lower">To Our Hospital</span>
                    </h2>
                    <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Aut quod laboriosam eligendi, repellendus cumque ducimus minus libero
                        autem sint sed deserunt
                        qui ullam porro quasi dignissimos. Pariatur commodi hic in!
                        autem sint sed deserunt

                    </p>
                    <div class="about-button mx-auto">
                        <a class="btn btn-color btn-lg" href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--end of about section-->

    <!-- ======= Camps Section ======= -->
    <section class="camp">

        <div class="container text-center">
            <h2 class="py-3">
            الفريق
            </h2>

            <p>لدينا فريق نخبة من الاطباء و اخصائيي التغذية لمتابعة كل المنتسبين الى برامجنا لمساعدتهم للوصول لحياة امنة وصحة سليمة
                        </p>
        </div>

        <div class="camp-grid">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp1.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp2.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp3.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp4.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp7.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp5.jpg" alt="">

                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp6.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="card card-block">
                        <img src="images/camp8.jpg" alt="">
                        <div class="camp-text">
                            <div>
                                <h3 class="card-title">
                                    Lorem Ipsum Dolor
                                </h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- <div class="section-title">
                        <h2>الفريق</h2>
                        <p>لدينا فريق نخبة من الاطباء و اخصائيي التغذية لمتابعة كل المنتسبين الى برامجنا لمساعدتهم للوصول لحياة امنة وصحة سليمة
                        </p>
                    </div> -->
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="member">
                                <div class="image"><img src="https://e7.pngegg.com/pngimages/884/925/png-clipart-clinic-physician-medicine-health-care-doctor-s-office-others-miscellaneous-service.png" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>محمد وهبة</h4>
                                    <span> اخصائي تغذية</span>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                    <div class="social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""> <i class="fab fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="member">
                                <div class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOCXCKt9tT9XcqMCajMl58XdJInxMoSIxQkGGzM6MgTvfvBMGvl36vP3QPbfI4VNJrY54&usqp=CAU" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>لؤي </h4>
                                    <span>طبيب </span>
                                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                    <div class="social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""> <i class="fab fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member">
                                <div class="image"><img style="height:140px;" src="https://www.albayan.ae/polopoly_fs/1.3817603.1585669150!/image/image.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>احمد </h4>
                                    <span>مدير</span>
                                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                    <div class="social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""> <i class="fab fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member">
                                <div class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnHCqAlfvkbR4aNCR-S9P3CNkEF7530fNf94xn5WbdUmCFdGCIsn37WESjLMnNC78dQXY&usqp=CAU" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>محمد محمود</h4>
                                    <span>خبير تغذية</span>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                    <div class="social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""> <i class="fab fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container">

            <div class="section-title text-center mt-5 mb-4">
                <h2>الاتصال بنا</h2>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, accusamus.</p> -->
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-box">
                                <i class="fas fa-map-signs"></i>
                                <h3>العنوان</h3>
                                <p> غزة - شارع الوحدة</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-box mt-4">
                                <i class="fas fa-envelope"></i>
                                <h3>الايميل</h3>
                                <p>mohammed@gmail.com<br>mohammedjehad@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-box mt-4">
                                <i class="fas fa-phone"></i>
                                <h3>الجوال</h3>
                                <p>0599551552 <br>0597854882</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم">

                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="الايميل">

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit">إرسال</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    
    <!-- Footer-->
    <footer class="footer py-4 mt-5">
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




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>



