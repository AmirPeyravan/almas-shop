    @extends('admin.master')    

    @section('content')
    
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">مشتریان</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">مشتریان</li>
                </ol>
            </nav>
        </div>
    
        <!-- Customers Table -->
        <div class="content-card">
            <div class="content-card-header">
                <h5 class="content-card-title">لیست مشتریان</h5>
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
                                <th>تاریخ عضویت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>علی</td>
                                <td>رضایی</td>
                                <td>ali_rezaei</td>
                                <td>ali.rezaei@example.com</td>
                                <td>1403/08/01</td>
                            </tr>
                            <tr>
                                <td>مریم</td>
                                <td>احمدی</td>
                                <td>maryam_ahmadi</td>
                                <td>maryam.ahmadi@example.com</td>
                                <td>1403/07/15</td>
                            </tr>
                            <tr>
                                <td>رضا</td>
                                <td>کریمی</td>
                                <td>reza_karimi</td>
                                <td>reza.karimi@example.com</td>
                                <td>1403/06/20</td>
                            </tr>
                            <tr>
                                <td>فاطمه</td>
                                <td>محمدی</td>
                                <td>fateme_mohammadi</td>
                                <td>fateme.mohammadi@example.com</td>
                                <td>1403/05/10</td>
                            </tr>
                            <tr>
                                <td>حسین</td>
                                <td>نوری</td>
                                <td>hossein_nouri</td>
                                <td>hossein.nouri@example.com</td>
                                <td>1403/04/25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection