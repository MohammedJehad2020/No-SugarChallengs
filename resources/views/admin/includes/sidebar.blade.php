<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span class="menu-title"
                        data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            لغة جديده </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">البرامج </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.programs.index') }}"
                            data-i18n="nav.dash.ecommerce"> عرض جميع البرامج </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.programs.create') }}"
                            data-i18n="nav.dash.crypto">أضافة
                            برنامج جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المستخدمين</span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    <!-- قائمة الانتظار -->
                    <li class="active"><a class="menu-item" href="{{ route('admin.patients.wating') }}"
                            data-i18n="nav.dash.ecommerce"> قائمة الانتظار</a>
                    </li>

                    <li class="active"><a class="menu-item" href="{{ route('admin.patients.index') }}"
                            data-i18n="nav.dash.ecommerce"> عرض جميع المستخدمين </a>
                    </li>
                    @can('create', App\Models\Patient::class)
                    <li><a class="menu-item" href="{{ route('admin.patients.create') }}"
                            data-i18n="nav.dash.crypto">أضافة
                            مستخدم جديد </a>
                    </li>
                    @endcan
                    <li><a class="menu-item" href="{{ route('admin.patients.trash') }}" data-i18n="nav.dash.crypto">
                            الحسابات المحذوفة </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الصلاحيات</span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.roles.index') }}"
                            data-i18n="nav.dash.ecommerce"> عرض جميع الصلاحيات </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.roles.create') }}" data-i18n="nav.dash.crypto">أضافة
                            صلاحية جديد </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.determineUserRole') }}"
                            data-i18n="nav.dash.crypto">تحديد
                            صلاحية للمستخدم </a>
                    </li>
                </ul>
            </li>
            <!-- --------------------- -->
            <!-- 
            <li class=" navigation-header">
                <span data-i18n="nav.category.pages">Pages</span><i class="la la-ellipsis-h ft-minus"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    data-original-title="Pages"></i>
            </li>
            <li class=" nav-item"><a href="email-application.html"><i class="la la-envelope"></i><span
                        class="menu-title" data-i18n="">Email Application</span></a>
            </li>
            <li class=" nav-item"><a href="chat-application.html"><i class="la la-comments"></i><span class="menu-title"
                                                                                                      data-i18n="">Chat Application</span></a>
            </li> -->


            <!-- ---------- -->


        </ul>
        </li>
        </ul>
    </div>
</div>