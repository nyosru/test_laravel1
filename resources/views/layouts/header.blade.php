        
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top" style="background: linear-gradient(90deg, #69b7eb, #b3dbd3, #f4d6db);">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{ route('index') }}" >Супер фильмы 10</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        
        <a class="p-2 text-dark 
           {{ Route::currentRouteName() == 'index' || Route::currentRouteName() == 'show' ? 'alert-info' : null }} 
           " href="{{ route('index') }}">Список записей</a>
        <a class="p-2 text-dark {{ Route::currentRouteName() == 'loading' ? 'alert-info' : null }} " href="{{ route('loading') }}">Загрузка</a>

        <!--        <a class="p-2 text-dark" href="#">Enterprise</a>
            <a class="p-2 text-dark" href="#">Support</a>
            <a class="p-2 text-dark" href="#">Pricing</a>-->
    </nav>
    <!--  <a class="btn btn-outline-primary" href="#">Sign up</a>-->
</div>
<div style="height: 90px;">&nbsp;</div>