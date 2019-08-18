<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">مدیریت فروشگاه فایل</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        مدیریت کاربران
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.users.create') }}">ثبت کاربر جدید</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.users.list')}}">لیست کاربران</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        مدیریت فایلها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.files.create')}}">ثبت فایل جدید</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.files.list')}}">لیست فایلها</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        مدیریت طرح ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.plans.create')}}">ثبت طرح جدید</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.plans.list')}}">لیست طرح ها</a>
                    </div>
                </li>          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        مدیریت پکیج ها
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.packages.create')}}">ثبت پکیج جدید</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.packages.list')}}">لیست پکیج ها</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
