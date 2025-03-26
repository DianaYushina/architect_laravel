<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link href="{{ asset('fonts/css/font-awesome.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@0;1&family=Roboto&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />




    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <!-- Don't use bootstrap.min.css styles -->
    @vite(['resources/js/app.js'])

    <!-- Custom style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
   
   
    
    
    
</head>
<body>
    <header>
        @if($world == 'products')
            @php ($header_cls = "products-img")
        @elseif($world == 'categories')
            @php ($header_cls = "categories-img")
        @elseif($world == 'news')
            @php ($header_cls = "news-img")
        @elseif($world == 'contacts')
            @php ($header_cls = "contacts-img")
        @elseif($world == '')
            @php ($header_cls = "main-img")
            <!-- @php ($extra_padding_cls = "extra-padding") -->
        @elseif($world == 'account')
            @php ($header_cls = "")
            <!-- @php ($none = "text_none_desktop") -->
        @else
            <!-- categories/1 => world = 1 -->
            @php ($header_cls = "categories-img")
        @endif

        <div class="first-part-about {{ $header_cls }}">
            <div class="style_h1_nav">
                <!-- {{ url('/') }} -->
                <!-- /aburo/static.php?url=contact -->
                <!-- <div class="logo"><a class="a_logo" href="#">{{ config('app.name', 'DY') }}</a></div> -->
                
                <!-- <div class="logo"><a class="a_logo" href="{{ url('/') }}">DY</a></div> -->

                
                <div class="wrapper_menu">
                    <header class="header">
                        <div class="header_container">
                            <a class="header_logo" href="{{ url('/') }}">DY</a>
                            <div class="header_menu menu">
                                <div class="menu_icon">
                                    <span></span>
                                </div>
                                <nav class="menu_body">
                                    <ul class="menu_list">
                                        <li>
                                            @if($world == 'home')
                                                <span class="none_menu">Главная</span>
                                            @else
                                                <a class="menu_link"  href="{{ url('/') }}">Главная</a>
                                            @endif

                                            <span class="menu_arrow"></span>
                                            <ul class="menu_sub_list">
                                                <li class="li_sub_menu">
                                                    <a data-goto=".page__section_1" class="menu_sub_link" href="{{ url('/') }}#history">История</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a data-goto=".page__section_2" class="menu_sub_link" href="{{ url('/') }}#production">Производство</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a data-goto=".page__section_3" class="menu_sub_link" href="{{ url('/') }}#company">Компания</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a data-goto=".page__section_4" class="menu_sub_link" href="{{ url('/') }}#page__section_4">Этапы работы</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a data-goto=".page__section_5" class="menu_sub_link" href="{{ url('/') }}#partners">Партнеры</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            @if($world == 'products')
                                                <span class="none_menu">Продукты</span>
                                            @else
                                                <a class="menu_link" href="{{ url('/products') }}">Продукты</a>
                                            @endif 
                                        </li>

                                        <li>
                                            @if($world == 'categories')
                                                <span class="none_menu">Категории</span>
                                            @else
                                                <a  class="menu_link" href="{{ url('/categories') }}">Категории</a>
                                            @endif 
                                            <span class="menu_arrow"></span>
                                            <ul class="menu_sub_list">
                                                <li class="li_sub_menu">
                                                    <a class="menu_sub_link" href="{{ url('/categories/1') }}">Кресла</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a class="menu_sub_link" href="{{ url('/categories/2') }}">Кровати</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a class="menu_sub_link" href="{{ url('/categories/3') }}">Свет</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a class="menu_sub_link" href="{{ url('/categories/4') }}">Столы</a>
                                                </li>
                                                <li class="li_submenu">
                                                    <a class="menu_sub_link" href="{{ url('/categories/5') }}">Диваны</a>
                                                </li>
                                            </ul>
                                        </li>

                                        
                                        <li>
                                            @if($world == 'contacts')
                                                <span class="none_menu">Контакты</span>
                                            @else
                                                <a class="menu_link" href="{{ url('/contacts') }}">Контакты</a>
                                            @endif
                                        </li>

                                        <!-- <li>
                                            @if($world == 'feedback')
                                                <span class="none_menu">Отзывы</span>
                                            @else
                                                <a class="menu_link" href="{{ url('/feedback') }}">Отзывы</a>
                                            @endif 
                                        </li> -->

                                        <li>
                                            @if($world == 'news')
                                                <span class="none_menu">Новости</span>
                                            @else
                                                <a class="menu_link" href="{{ url('/news') }}">Новости</a>
                                            @endif
                                        </li> 

                                        <li>
                                            @if($world == 'delivery')
                                                <span class="none_menu">Доствавка</span>
                                            @else
                                                <a class="menu_link" href="{{ url('/delivery') }}">Доствавка</a>
                                            @endif 
                                        </li>


                                        @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a class="menu_link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li>
                                                    <a class="menu_link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                                </li>
                                            @endif
                                        @else
                                        <li class="name_of_user" class="nav-item dropdown">
                                            <a class="menu_link" href="{{ url('/account')}}" role="button" >
                                                {{ Auth::user()->name }}
                                            </a>


                                            <li>    
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item menu_link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Выйти') }}
                                                </a>
                                               

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            </li> 
                                        </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </header>


                </div>


    



              
                        <!-- <nav class="navbar"> -->
                            <!-- {{$world}} -->
                            <!-- <div class="container_menu">
                                <div class="navbar__wrap">
                                    <div class="hamb">
                                            <div class="hamb__field" id="hamb">
                                                <span class="bar"></span> <span class="bar"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>
                                        <a href="{{ url('/') }}" class="logo" id="logo">DY</a>
                                        <ul class="menu" id="menu">  -->


                        
                            <!-- <ul class="navbar-nav ms-auto"> не использую данный код -->
                                <!-- Authentication Links -->




                                <!-- <li>
                                    @if($world == 'home')
                                        <span class="none_menu">Главная</span>
                                    @else
                                        <a  href="{{ url('/') }}">Главная</a>
                                    @endif
                                </li>  -->
                                <!-- <li>
                                @if($world == 'about')
                                    <span class="none_menu">About</span>
                                @else
                                    <a class="menu-a" href="{{ url('/about') }}">About</a>
                                @endif
                                </li> -->

                                <!-- <li>
                                @if($world == 'products')
                                    <span class="none_menu">Продукты</span>
                                @else
                                    <a class="menu-a" href="{{ url('/products') }}">Продукты</a>
                                @endif -->
                                    <!-- <a class="menu-a" href="{{ url('/products') }}">Products</a> -->
                                <!-- </li>

                                <li>
                                @if($world == 'categories')
                                    <span class="none_menu">Категории</span>
                                @else
                                    <a  href="{{ url('/categories') }}">Категории</a>
                                @endif  -->
                                    <!-- <a class="menu-a" href="{{ url('/categories') }}">Categories</a> -->
                                    <!-- <ul class="submenu">
                                        <li class="li_submenu">
                                            <a class="a_submenu" href="{{ url('/categories') }}">Кресла</a>
                                        </li>
                                        <li class="li_submenu">
                                            <a class="a_submenu" href="{{ url('/categories') }}">Кровати</a>
                                        </li>
                                        <li class="li_submenu">
                                            <a class="a_submenu" href="{{ url('/categories') }}">Свет</a>
                                        </li>
                                        <li class="li_submenu">
                                            <a class="a_submenu" href="{{ url('/categories') }}">Столы</a>
                                        </li>
                                        <li class="li_submenu">
                                            <a class="a_submenu" href="{{ url('/categories') }}">Диваны</a>
                                        </li>
                                    </ul> -->
                                <!-- </li>

                                <li>
                                @if($world == 'contacts')
                                    <span class="none_menu">Контакты</span>
                                @else
                                    <a  href="{{ url('/contacts') }}">Контакты</a>
                                @endif -->
                                    <!-- <a class="menu-a" href="{{ url('/contacts') }}">Contact</a> -->
                                <!-- </li>
                                
                                <li>
                                @if($world == 'news')
                                    <span class="none_menu">Новости</span>
                                @else
                                    <a href="{{ url('/news') }}">Новости</a>
                                @endif -->
                                    <!-- <a class="menu-a" href="{{ url('/news') }}">News</a> -->
                                <!-- </li>
                                        

                                @guest
                                    @if (Route::has('login'))
                                        <li>
                                            <a class="menu-a" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li>
                                            <a class="menu-a" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="name_of_user" class="nav-item dropdown">
                                        <a href="{{ url('/account')}}" role="button" >
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </ul>
                            
                        </div>
                    </nav>
                <div class="popup" id="popup"></div> -->



                            <!-- </ul>
                        </nav> -->
            </div> 
            
            @yield('cover-text')
        </div> 
    </header>

    <div class="basket">
        <a class="basket-color" href="#"><i id="basket-color" class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
        <div id="basket">
            <table id="bascets">
                <tbody>
                <tr style="display: none;" class="hPb">
                    <td class="selected">Товаров:</td>
                    <td class="cout_of_product"><span id="totalGoods">0</span></td>
                </tr>
                <tr style="display: none;" class="hPb">
                    <td class="total">Итого: &asymp; </td>
                    <td class="total"><span id="totalPrice">0</span> р.</td>
                </tr>
                <tr style="display: table-row;" class="hPe">
                    <td class="cart_is_empty" colspan="2">Корзина пуста</td>
                </tr>
                <tr>
                    <td class="button-cancel"><a class="button-cancel" style="display: none;" id="clearBasket" href="#">Очистить</a></td>
                    <td class="button-buy"><a class="button-buy" style="display: none;" id="checkOut" href="{{ url('/basket') }}">КУПИТЬ</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
		


    <!-- <main class="py-4"> -->
        @yield('first_part')
        @yield('content')
    </main>

    <footer>
            <div class="footer_style">
                <div>
                    <div class="logo_footer"><a class="a_menu1_footer" href="{{ url('/') }}">{{ config('app.name', 'DY') }}</a></div>
                </div>

                <div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ url('/') }}">О нас</a>
                    </div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ url('/contacts') }}">Контакты</a>
                    </div>
                </div>

                <div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ url('/products') }}">Продукты</a>
                    </div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ url('/categories') }}">Категории</a>
                    </div>
                </div>

                <div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ url('/news') }}">Новости</a>
                    </div>
                    <div class="menu1_footer">
                        <a class="a_menu1_footer" href="{{ asset('feedback')}}">Отзывы</a>
                    </div>
                </div>
            </div> 

            <div class="social_media">
                <div class="style_h2_footer">
                     <div class="h2_footer">Социальные сети</div>
                </div>

                <div class="style_social_media1"> 
                    <div class="social_media1">               
                        <div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://www.instagram.com/diana.yshina/" target="_blank">Instagram_DY</a>
                            </div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://www.behance.net/dianay_ushyna" target="_blank">Behance</a>
                            </div>
                        </div>

                        <div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://www.linkedin.com/in/diana-yushyna-785b281b7/" target="_blank">LinkedIn</a>
                            </div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://www.pinterest.com/diana_yushyna/pins/" target="_blank">Pinterest</a>
                            </div>
                        </div>

                        <div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://dribbble.com/diana_yshina" target="_blank">Dribbble</a>
                            </div>
                            <div class="box_social_media1">
                                <a class="a_social_media" href="https://t.me/Diana_Yshina" target="_blank">Telegram</a>
                            </div>
                        </div>

                        <div>
                            <div class="box_social_media">
                                <a class="a_social_media" href="https://wa.me/375256631518" target="_blank">WhatsApp</a>
                            </div>
                            <div class="box_social_media">
                                <a class="a_social_media" href="viber://chat?number=%2B7375256631518" target="_blank">Viber</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social_media_2_style">
                    <div class="social_media_2">
                        <div class="box_social_media">
                            <a class="a_social_media" href="https://www.instagram.com/diana_yushyna/" target="_blank">Instagram_DY</a>
                        </div>

                        <div class="box_social_media">
                            <a class="a_social_media" href="mailto: diana.yshina@gmail.com" target="_blank">emai:diana.yshina@gmail.com</a>
                        </div>

                        <div class="box_social_media">
                            <a class="a_social_media" href="tel:375256631518" target="_blank">phone:+375 25 663 15 18</a>
                        </div>

                        <div class="box_social_media">
                            <a class="a_social_media" href="https://www.youtube.com/watch?v=yvQARBx6u4s&" target="_blank">YouTube</a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/card.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>

</body>
</html>
