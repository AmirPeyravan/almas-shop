@extends('admin.master')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">محصولات</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">محصولات</li>
            </ol>
        </nav>
    </div>

    <!-- Products Table -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">لیست محصولات</h5>
            <button class="btn btn-add"><i class="fas fa-plus"></i> افزودن محصول</button>
        </div>
        <div class="content-card-body">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                    <tr>
                        <th>نام محصول</th>
                        <th>توضیحات</th>
                        <th>قیمت</th>
                        <th>موجودی</th>
                        <th>تصویر</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>گوشی هوشمند</td>
                        <td>گوشی با صفحه نمایش 6.5 اینچ و دوربین 48 مگاپیکسل</td>
                        <td>15,000,000 تومان</td>
                        <td>50</td>
                        <td><img src="https://via.placeholder.com/60" class="thumbnail-img" alt="گوشی هوشمند"></td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>لپ‌تاپ گیمینگ</td>
                        <td>لپ‌تاپ با پردازنده i7 و کارت گرافیک RTX 3060</td>
                        <td>45,000,000 تومان</td>
                        <td>20</td>
                        <td><img src="https://via.placeholder.com/60" class="thumbnail-img" alt="لپ‌تاپ گیمینگ"></td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>هدفون بی‌سیم</td>
                        <td>هدفون با قابلیت حذف نویز و باتری 20 ساعته</td>
                        <td>2,500,000 تومان</td>
                        <td>100</td>
                        <td><img src="https://via.placeholder.com/60" class="thumbnail-img" alt="هدفون بی‌سیم"></td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>ساعت هوشمند</td>
                        <td>ساعت با قابلیت پایش ضربان قلب و GPS</td>
                        <td>5,000,000 تومان</td>
                        <td>30</td>
                        <td><img src="https://via.placeholder.com/60" class="thumbnail-img" alt="ساعت هوشمند"></td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>دوربین عکاسی</td>
                        <td>دوربین حرفه‌ای با لنز 24-70mm</td>
                        <td>25,000,000 تومان</td>
                        <td>15</td>
                        <td><img src="https://via.placeholder.com/60" class="thumbnail-img" alt="دوربین عکاسی"></td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



@endsection
