<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-gem"></i>الماس
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product-love">محصولات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#categories-loves">دسته‌بندی‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">تماس با ما</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">

                <div id="search-box" class="search-form position-relative me-3">
                    <form action="{{ route('frontend.search') }}" method="GET">
                        <input type="text" name="q" id="search-box" class="form-control" placeholder="">
                        <i class="bi bi-search search-icon"></i>
                    </form>
                </div>

                <a href="/cart">
                <button class="btn-cart ms-2 position-relative">
                    <i class="bi bi-cart3"></i>
                    <span class="cart-count">0</span>
                </button>
                </a>

                @auth

                <a href="/profile">
                     <button class="btn-user ms-2">
                        <i class="bi bi-person me-1"></i>
                            {{ Auth::user()->firstName }}
                    </button>
                </a>
                <a href="/logout">
                  <button id="btn-logOut" class="btn btn-danger btn-user ms-2">
                      <i class="bi bi-box-arrow-right me-1"></i>
                        خروج
                 </button>
                </a>
                @else
                <a href="/login">
                     <button class="btn-user ms-2">
                        <i class="bi bi-person me-1"></i>
                                ورود - ثبت نام
                    </button>
                </a>
                @endauth

            </div>
        </div>
    </div>
</nav>
