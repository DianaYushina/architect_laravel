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
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@0;1&family=Roboto&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <!-- Don't use bootstrap.min.css styles -->
    @vite(['resources/js/app.js'])

    <!-- Custom style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
   
   
    
    
    
</head>
<body>
    <header>
        <div class="style_h1_nav">
            <!-- {{ url('/') }} -->
            <!-- /aburo/static.php?url=contact -->
            <h1 class="logo"><a class="menu-a" href="#">{{ config('app.name', 'DY') }}</a></h1>
            <nav>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->

                    <li>
                        <a class="menu-a" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="menu-a" href="{{ url('/about') }}">About</a>
                    </li>
                    <li>
                        <a class="menu-a" href="{{ url('/products') }}">Products</a>
                    </li>
                    <li>
                        <a class="menu-a" href="{{ url('/categories') }}">Categories</a>
                    </li>
                    <li>
                        <a class="menu-a" href="{{ url('/contacts') }}">Contact</a>
                    </li>
                    <li>
                        <a class="menu-a" href="{{ url('/news') }}">News</a>
                    </li>
                            

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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </nav>
        </div>
    </header>

    <div class="basket">
           <a class="basket-color" href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
		   <div id="basket">
				<table id="bascets">
					<tbody>
					<tr style="display: none;" class="hPb">
						<td class="selected">SELECTED:</td>
						<td class="cout_of_product"><span id="totalGoods">0</span>PRODUCT</td>
					</tr>
					<tr style="display: none;" class="hPb">
						<td class="total">TOTAL: &asymp; </td>
						<td class="total"><span id="totalPrice">0</span>$</td>
					</tr>
					<tr style="display: table-row;" class="hPe">
						<td class="cart_is_empty" colspan="2">CART IS EMPTY</td>
					</tr>
					<tr>
						<td class="button-cancel"><a class="button-cancel" style="display: none;" id="clearBasket" href="#">CANCEL</a></td>
						<td class="button-buy"><a class="button-buy" style="display: none;" id="checkOut" href="{{ url('/basket') }}">BUY</a></td>
					</tr>
					</tbody>
				</table>
       		</div>
    	</div>
		


    <main class="py-4">
        @yield('first_part')
        @yield('content')
    </main>

    <footer>
        <div class="categories-style-footer">
            <div>
                <h1 class="logo"><a class="menu-a" href="{{ url('/') }}">{{ config('app.name', 'DY') }}</a></h1>
                <div class="text-footer">Lizenzo street number 12 Jakarta, Indonesia</div>
                <!-- <div class="style-button-a-fotter">
                    <a class="button-a-fotter" id="button-form-1" href="#">Get directions</a>
                </div> -->
            </div>

            <div>
                <h4 class="categories">MENU</h4>
                <div>
                    <a class="menu-a-footer" href="{{ url('/') }}">HOME</a>
                </div>
                <div>
                    <a class="menu-a-footer" href="{{ url('/about') }}">ABOUT</a>
                </div>
                <div>
                    <a class="menu-a-footer" href="{{ url('/products') }}">PRODUCTS</a>
                </div>
            </div>
            
            <div>
                <h4 class="categories">CONTACTS</h4>
                <div>
                    <a class="menu-a-footer" href="{{ url('/news') }}">NEWS</a>
                </div>
                <div>
                    <a class="menu-a-footer" href="{{ url('/contacts') }}">CONTACTS</a>
                </div>

                <div>
                    <a class="menu-a-footer" href="#">OUR WORKS</a>
                </div>
            </div>
            
            <div>
                <h4 class="categories">PRODUCTS</h4>
                <div>
                    <a class="menu-a-footer" href="{{ url('/products') }}">FURNITURE</a>
                </div>
                <div>
                    <a class="menu-a-footer" href="{{ asset('feedback')}}">REVIEWS</a>
                </div>
                <div>
                    <a class="menu-a-footer" href="{{ url('/categories') }}">CATEGORIES</a>
                </div> 
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/card.js') }}"></script>
</body>
</html>
