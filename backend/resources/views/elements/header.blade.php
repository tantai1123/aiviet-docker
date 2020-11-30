<header>
    <!-- Logo -->
    <div class="logo">
        <a href="{{route('index')}}">
            <img src="{{asset('uploads/image/logo/AV.png')}}" alt="AV"/>
        </a>
    </div>
    <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Navigation -->
    <nav>
        <ul>
            <li>
                <a href="{{route('index')}}#home">
                    <span data-hover="Trang chủ">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}#services">
                    <span data-hover="Dịch vụ">Dịch vụ</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}#about">
                    <span data-hover="Giới thiệu">Giới thiệu</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}#how_we_work">
                    <span data-hover="Quy trình làm việc">Quy trình làm việc</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}/#partner">
                    <span data-hover="Đối tác">Đối tác</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a href="{{route('blog.index')}}" class="link">--}}
{{--                    <span data-hover="Kiến thức">Kiến thức</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a href="{{route('index')}}/#contact">
                    <span data-hover="Liên hệ">Liên hệ</span>
                </a>
            </li>
            <li>
                <a href="{{route('index')}}/#client">
                    <span data-hover="Khách hàng">Khách hàng</span>
                </a>
            </li>
        </ul>
    </nav>
</header>
