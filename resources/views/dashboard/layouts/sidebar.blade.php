<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('/img/white-logo.svg')}}" width="120" alt=""/>
                </a>
            </div>
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>


        <ul id="main-menu" class="main-menu">
            <li>
                <a href="
{{route('index')}}
                    ">
                    <i class="entypo-monitor"></i>
                    <span class="title">Главная</span>
                </a>
            </li>
            <li>
                <a href="
{{--{{route('admin.product.index')}}--}}
                    ">
                    <i class="entypo-basket"></i>
                    <span class="title">Товары</span>
                </a>
            </li>
            <li class="active opened active has-sub">
                <a href="index.html">
                    <i class="entypo-gauge"></i>
                    <span class="title">Кампании</span>
                </a>
                <ul class="visible">
                    <li class="active">
                        <a href="{{route('companies.create')}}">
                            <span class="title">Новая кампания</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('companies.index')}}">
                            <span class="title">Мои кампании</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="active opened active has-sub">
                <a href="index.html">

                    <i class="entypo-gauge"></i>
                    <span class="title">Оплата</span>
                </a>
                <ul class="visible">
                    <li class="active">
                        <a href="{{route('packet.create')}}">
                            <span class="title">Новая оплата</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('packet.index')}}">
                            <span class="title">Мои платежи</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="
{{--{{route('admin.category.index')}}--}}
                    ">
                    <i class="entypo-tag"></i>
                    <span class="title">Категории</span>
                </a>
            </li>

            <li>
                <a href="
{{--{{route('admin.support.index')}}--}}
                    ">
                    <i class="entypo-flag"></i>
                    <span class="title">Тикеты</span>
                </a>
            </li>
            <li>
                <a href="
{{--{{route('admin.users.index')}}--}}
                    ">
                    <i class="entypo-flag"></i>
                    <span class="title">Пользователи</span>
                </a>
            </li>
            {{--<li class="has-sub">--}}
            {{--<a href="ui-panels.html">--}}
            {{--<i class="entypo-newspaper"></i>--}}
            {{--<span class="title">UI Elements</span>--}}
            {{--</a>--}}
            {{--<ul>--}}
            {{--<li>--}}
            {{--<a href="ui-panels.html">--}}
            {{--<span class="title">Panels</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </div>

</div>

