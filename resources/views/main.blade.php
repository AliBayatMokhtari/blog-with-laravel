<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>

    @include('partials._style')

    <body dir="rtl">
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @include('partials._nav')

            <div class="container">
                <div class="mt-5">
                    @yield("content")
                </div>
            </div>
        </div>

        @include('partials._script')

        @yield('scripts')
    </body>
</html>
