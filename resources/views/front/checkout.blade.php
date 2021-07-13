<x-front-layout>

    <main class="ps-main" dir="rtl">
        <div class="ps-checkout pt-80 pb-80">
            <div class="ps-container">
                <x-alert />
                @if(session()->has('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                @endif
                <form class="ps-checkout__form" dir="rtl" action="{{ route('checkout') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                            <div class="ps-checkout__billing">
                                <h3>بيانات المشترك</h3>
                                <div class="form-group">
                                    <label>الاسم :<span>*</span>
                                    </label>
                                    <input name="name" class="form-control" value="{{ old('name') }}" type="text" @error('name') is-invalid @enderror">
                                    @error('name')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>الايميل :<span>*</span>
                                    </label>
                                    <input name="email" class="form-control" type="email" value="{{ old('email') }}" @error('email') is-invalid @enderror"> 
                                    @error('email')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label for="" class="card-title">الجنس :</label>
                                    <div>
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
                                    <label>تاريخ الميلاد :<span>*</span>
                                    </label>
                                    <input name="DOB" value="{{ old('DOB') }}" class="form-control" type="date" @error('DOB') is-invalid @enderror">
                                    @error('DOB')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>رقم الجوال :<span>*</span>
                                    </label>
                                    <input name="phone" value="{{ old('phone') }}" class="form-control" type="text" @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>الطول :<span>*</span>
                                    </label>
                                    <input name="height" value="{{ old('height') }}" class="form-control" type="text" @error('height') is-invalid @enderror">
                                    @error('height')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>الوزن :<span>*</span>
                                    </label>
                                    <input name="weight" value="{{ old('weight') }}" class="form-control" type="text" @error('weight') is-invalid @enderror">
                                    @error('weight')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>نسبة السكر :<span>*</span>
                                    </label>
                                    <input name="sugar_level" value="{{ old('sugar_level') }}" class="form-control" type="text" @error('sugar_level') is-invalid @enderror">
                                    @error('sugar_level')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>الدولة :<span>*</span>
                                    </label>
                                    <select name="country" value="{{ old('country') }}" class="form-control"  @error('country') is-invalid @enderror">
                                        <option value="">إختار الدولة</option>
                                        @foreach(Symfony\Component\Intl\Countries::getNames('ar') as $code => $name)
                                        <option value="{{ $code }}" @if(old('country') == $code ) selected @endif>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                    <p class="invalid-feedback d-block">{{ $message }}</p>
                                    @enderror
                                </div>
                                @guest
                                <div class="form-group">
                                    <div class="ps-checkbox">
                                        <input class="form-control" type="checkbox" name="register" value="1" id="cb01">
                                        <label for="cb01">إنشاء حساب ?</label>
                                    </div>
                                </div>
                                @endguest
                                <h3 class="mt-40"> معلومات إضافية</h3>
                                <div class="form-group">
                                    <label>ملاحظات على الطلب</label>
                                    <textarea name="notes" class="form-control" rows="5"
                                        placeholder="أدخل ملاحظاتك !">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                            <div class="ps-checkout__order">
                                <header>
                                    <h3>طلبات الاشتراك في البرامج</h3>
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
                                        <button type="submit" class="ps-btn ps-btn--fullwidth">إرسال الطلب<i
                                                class="ps-icon-next"></i></button>
                                    </div>
                                </footer>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="ps-subscribe">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                        <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                        <form class="ps-subscribe__form" action="do_action" method="post">
                            <input class="form-control" type="text" placeholder="">
                            <button>Sign up now</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                        <p>...and receive <span>$20</span> coupon for first shopping.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
            <div class="ps-footer__content">
                <div class="ps-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--info">
                                <header><a class="ps-logo" href="index.html"><img src="images/logo-white.png"
                                            alt=""></a>
                                    <h3 class="ps-widget__title">Address Office 1</h3>
                                </header>
                                <footer>
                                    <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                                    <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                                    <p>Phone: +323 32434 5334</p>
                                    <p>Fax: ++323 32434 5333</p>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--info second">
                                <header>
                                    <h3 class="ps-widget__title">Address Office 2</h3>
                                </header>
                                <footer>
                                    <p><strong>PO Box 16122 Collins Victoria 3000 Australia</strong></p>
                                    <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                                    <p>Phone: +323 32434 5334</p>
                                    <p>Fax: ++323 32434 5333</p>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Find Our store</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--link">
                                        <li><a href="#">Coupon Code</a></li>
                                        <li><a href="#">SignUp For Email</a></li>
                                        <li><a href="#">Site Feedback</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Get Help</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--line">
                                        <li><a href="#">Order Status</a></li>
                                        <li><a href="#">Shipping and Delivery</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Payment Options</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                            <aside class="ps-widget--footer ps-widget--link">
                                <header>
                                    <h3 class="ps-widget__title">Products</h3>
                                </header>
                                <footer>
                                    <ul class="ps-list--line">
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessries</a></li>
                                        <li><a href="#">Football Boots</a></li>
                                    </ul>
                                </footer>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-footer__copyright">
                <div class="ps-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena
                                    Studio</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <ul class="ps-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-front-layout>