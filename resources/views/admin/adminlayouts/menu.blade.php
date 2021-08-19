<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand">
                    <div class="brand-logo"></div>
                </a></li>

        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="../../../html/rtl/vertical-menu-template/index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">لوحه تحكم ادارة المهام</span><span class="badge badge badge-warning badge-pill float-right">2</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">المهام</span></a>
                <ul class="menu-content">
                    <!-- <li class="active"><a href="sk-layout-2-columns.html"><i></i><span class="menu-item" data-i18n="2 columns">عرض </span></a>
                    </li> -->
                    <li><a href="{{ route('tasks.index') }}"><i></i><span class="menu-item" data-i18n="2 columns">عرض </span></a>
                    </li>
                    <li><a href="{{ route('tasks.create') }}"><i></i><span class="menu-item" data-i18n="Fixed navbar">اضافه</span></a>
                    </li>


                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">الادوار</span></a>
                <ul class="menu-content">

                    <li><a href="{{ route('roles.index') }}"><i></i><span class="menu-item" data-i18n="Fixed navbar"> عرض</span></a>
                    </li>
                    <li><a href="{{ route('roles.create') }}"><i></i><span class="menu-item" data-i18n="Floating navbar">اضافه</span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">الاخبار</span></a>
                <ul class="menu-content">

                    <li><a href="{{ route('news.index') }}"><i></i><span class="menu-item" data-i18n="Fixed navbar"> عرض </span></a>
                    </li>
                    <li><a href="{{ route('news.create') }}"><i></i><span class="menu-item" data-i18n="Floating navbar"> اضافه </span></a>
                    </li>

                </ul>
            </li>
            <div class="text-center mt-5">


                <a class="btn btn-primary " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    تسجيل خروج

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </ul>
    </div>
</div>
