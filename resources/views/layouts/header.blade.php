        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top"
            style="background: linear-gradient(90deg, #69b7eb, #b3dbd3, #f4d6db);">
            <h5 class="my-0 mr-md-auto font-weight-normal">
                {{-- <a href="{{ route('index') }}">Супер фильмы 10</a> --}}
                <a href="/">Супер фильмы 10</a>
            </h5>
            <nav class="my-2 my-md-0 mr-md-3">

                <a class="p-2 text-dark underline
           {{ Route::currentRouteName() == 'index' || Route::currentRouteName() == 'show' ? 'alert-info' : null }} 
           " href="{{ route('index') }}">Список записей</a>

                <!--        <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>-->


                @if (Route::has('login'))

                    <!--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
                    @auth

                        <a class="p-2 text-dark underline {{ Route::currentRouteName() == 'loading' ? 'alert-info' : null }} "
                            href="{{ route('loading') }}">Обновить список фильмов</a>

                        <!--        <a href="{{ url('/home') }}" class="p-2 text-dark underline">Home</a>-->
                        <a href="{{ route('logout') }}" class="p-2 text-dark underline">Выйти</a>

                    @else

                        <a href="{{ route('login') }}" class="p-2 text-dark underline">Войти в ЛК</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="p-2 text-dark underline">Регистрация</a>
                        @endif

                    @endauth
                    <!--                </div>-->

                @endif


            </nav>
            <!--  <a class="btn btn-outline-primary" href="#">Sign up</a>-->
        </div>
        <div style="height: 90px;">&nbsp;</div>
