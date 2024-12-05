{{-- @include('components.header') --}}

@include('components.sidebar')

<div class="main-content">
    @yield('content')
</div>

@include('components.footer')
