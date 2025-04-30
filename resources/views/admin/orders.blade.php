@extends('admin.master')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">سفارشات</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">سفارشات</li>
            </ol>
        </nav>
    </div>

    <!-- Orders Table -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">لیست سفارشات</h5>
            <button class="btn btn-add"><i class="fas fa-plus"></i> افزودن سفارش</button>
        </div>
        <div class="content-card-body">
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                    <tr>
                        <th>نام کاربر</th>
                        <th>تاریخ سفارش</th>
                        <th>مبلغ کل</th>
                        <th>وضعیت</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>علی رضایی</td>
                        <td>1403/08/01</td>
                        <td>17,500,000 تومان</td>
                        <td><span class="status-badge status-completed">تکمیل شده</span></td>
                        <td>1403/08/01 14:30</td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>مریم احمدی</td>
                        <td>1403/07/28</td>
                        <td>5,000,000 تومان</td>
                        <td><span class="status-badge status-pending">در انتظار</span></td>
                        <td>1403/07/28 09:15</td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>رضا کریمی</td>
                        <td>1403/07/25</td>
                        <td>45,000,000 تومان</td>
                        <td><span class="status-badge status-completed">تکمیل شده</span></td>
                        <td>1403/07/25 16:45</td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>فاطمه محمدی</td>
                        <td>1403/07/20</td>
                        <td>2,500,000 تومان</td>
                        <td><span class="status-badge status-cancelled">لغو شده</span></td>
                        <td>1403/07/20 11:20</td>
                        <td>
                            <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                            <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                        </td>
                    </tr>
                    <tr>
                        <td>حسین نوری</td>
                        <td>1403/07/15</td>
                        <td>25,000,000 تومان</td>
                        <td><span class="status-badge status-pending">در انتظار</span></td>
                        <td>1403/07/15 13:50</td>
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
