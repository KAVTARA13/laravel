    <header class="header-pos">
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="header-top-left">
                            <ul>
                                <li><span>ელ. ფოსტა: </span>calibergeorgia@gmail.com</li>
                                <li><strong>სათაო ოფისი: </strong> ი.გაგარინის 4-4ა, თბილისი
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box box-right">
                            <ul>

                                 @guest
                                <li class="settings">
                                    <a class="ha-toggle" href="#">ავტორიზაცია</a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle home-header2 theme-bg">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{asset('assets/img/logo/logo-sinrato2.png')}}" alt="brand-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12 order-sm-last">
                        <div class="header-middle-inner">
                            <form action="#" method="#">
                                <input type="text" name="search_text" value="" class="top-cat-field" placeholder="მოძებნე პროდუქტი">
                                <input type="submit" class="top-search-btn" value="ძებნა">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-menu menu-style2 mb-40 sticker">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-main-menu">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>

                                        <li><a href="{{ route('index') }}">მთავარი</a></li>

                                        <li><a href="{{ route('product') }}">პროდუქცია</a></li>

                                        <li><a href="{{ route('about') }}">ჩვენ შესახებ</a></li>

                                        <li><a href="{{ route('contact') }}">კონტაქტი</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- </div> end main menu -->
                            <div class="header-call-action">
                                <p>ტელ. : +995 32 238 17 33</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>