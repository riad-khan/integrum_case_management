@include('Admin.includes.cdn')

<body class="ms-body ms-aside-left-open ms-primary-theme ">

    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    @if (\Illuminate\Support\Facades\Auth::check())
        @include('Admin.includes.header')
    @endif




    @yield('content')

    <livewire:scripts />
    @include('sweetalert::alert')
    @include('Admin.includes.script')
</body>
