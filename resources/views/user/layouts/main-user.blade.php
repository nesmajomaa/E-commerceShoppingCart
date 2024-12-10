{{-- @include('user.layouts.includes.top-page' , ['data' => $data]) --}}
@include('user.layouts.includes.top-page-user')
@yield('content')
@include('user.layouts.includes.bottom-page')
