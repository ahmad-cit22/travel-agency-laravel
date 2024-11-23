@include('admin.partials.header')

@include('admin.partials.sidebar')

<div class="content-wrapper">

    @include('admin.partials.messages')

    @yield('content')
    
</div>

@include('admin.partials.footer')
