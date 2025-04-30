@extends('admin.master')

@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">مدیریت کاربران</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیریت کاربران</li>
            </ol>
        </nav>
    </div>

    <!-- Users Table -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">لیست کاربران</h5>
            <button class="btn btn-add"><i class="fa-solid fa-plus"></i> افزودن کاربر</button>
        </div>
        <div class="content-card-body">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>نام کاربری</th>
                        <th>ایمیل</th>
                        <th>نقش</th>
                        <th>عکس پروفایل</th>
                        <th>تاریخ عضویت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>علی</td>
                        <td>رضایی</td>
                        <td>ali_rezaei</td>
                        <td>ali.rezaei@example.com</td>
                        <td><span class="role-badge role-admin">ادمین</span></td>
                        <td><img src="https://via.placeholder.com/40" class="profile-img" alt="علی رضایی"></td>
                        <td>1403/08部分

                            System: 08/01</td>
                        <td>
                            <button class="btn btn-edit"><i class="fa-solid fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>مریم</td>
                        <td>احمدی</td>
                        <td>maryam_ahmadi</td>
                        <td>maryam.ahmadi@example.com</td>
                        <td><span class="role-badge role-user">کاربر</span></td>
                        <td><img src="https://via.placeholder.com/40" class="profile-img" alt="مریم احمدی"></td>
                        <td>1403/07/15</td>
                        <td>
                            <button class="btn btn-edit"><i class="fa-solid fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>رضا</td>
                        <td>کریمی</td>
                        <td>reza_karimi</td>
                        <td>reza.karimi@example.com</td>
                        <td><span class="role-badge role-user">کاربر</span></td>
                        <td><img src="https://via.placeholder.com/40" class="profile-img" alt="رضا کریمی"></td>
                        <td>1403/06/20</td>
                        <td>
                            <button class="btn btn-edit"><i class="fa-solid fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>فاطمه</td>
                        <td>محمدی</td>
                        <td>fateme_mohammadi</td>
                        <td>fateme.mohammadi@example.com</td>
                        <td><span class="role-badge role-admin">ادمین</span></td>
                        <td><img src="https://via.placeholder.com/40" class="profile-img" alt="فاطمه محمدی"></td>
                        <td>1403/05/10</td>
                        <td>
                            <button class="btn btn-edit"><i class="fa-solid fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>حسین</td>
                        <td>نوری</td>
                        <td>hossein_nouri</td>
                        <td>hossein.nouri@example.com</td>
                        <td><span class="role-badge role-user">کاربر</span></td>
                        <td><img src="https://via.placeholder.com/40" class="profile-img" alt="حسین نوری"></td>
                        <td>1403/04/25</td>
                        <td>
                            <button class="btn btn-edit"><i class="fa-solid fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fa-solid fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
