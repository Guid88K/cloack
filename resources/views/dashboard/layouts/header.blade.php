<div class="row">
    <div class="col-md-6 col-sm-8 clearfix">
        <ul class="user-info pull-left pull-none-xsm">
            <li class="profile-info dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('/back/assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44"/>
                    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        <ul class="list-inline links-list pull-right">
            <li class="dropdown language-selector">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    Language
                </a>
{{--                <ul class="dropdown-menu pull-right">--}}
{{--                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                        <li @if(LaravelLocalization::getCurrentLocale() == $localeCode) class="active" @endif>--}}
{{--                            <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="text-transform: capitalize;">--}}
{{--                                {{ $properties['native'] }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
            </li>
            <li class="sep"></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Выйти <i class="entypo-logout right"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<hr/>
