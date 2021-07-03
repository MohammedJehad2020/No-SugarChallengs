<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحديات السكر المصنع</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @stack('css')
</head>

<body>
    <header class="py-2 bg-dark text-white mb-4">
        <div class="container">
            <div class="d-flex bd-highlight">
                <h1 class="h3 p-2 flex-grow-1 bd-highlight text-warning fst-italic">تحديات السكر المصنع</h1>


                @auth('web')
                <div class="ms-auto p-2 bd-highlight">
                    <span class="text-warning">مرحبا , </span>{{ Auth::guard('web')->user()->name }}
                    | <a href="#" onclick="document.getElementById('logout').submit()" class="text-decoration-none">تسجيل الخروج</a>
                    <form id="logout" class="d-none" action="{{ route('logout', 'web') }}" method="post">
                        @csrf
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <h4>القائمة الرئيسية</h4>
                <nav>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="" class="nav-link">الرئيسية</a></li>
                        <li class="nav-item"><a href="{{ route('admin.programs.index') }}"
                                class="nav-link @if(request()->routeIs('admin.programs.*')) active @endif">البرامج</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('admin.patients.index') }}"
                                class="nav-link @if(request()->routeIs('admin.patients.*')) active @endif">المستخدمين</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('admin.roles.index') }}"
                                class="nav-link @if(request()->routeIs('admin.roles.*')) active @endif">الصلاحيات</a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <main class="col-md-9">
                <div class="mb-4">
                    <h3 class="text-primary">{{ $title ?? 'Default Title' }}</h3>
                </div>

                {{ $slot }}
            </main>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>

</html>