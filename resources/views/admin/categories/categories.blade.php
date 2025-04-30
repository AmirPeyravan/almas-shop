@extends('admin.master')

@section('content')

   <!-- Page Header -->
   <div class="page-header">
    <h1 class="page-title">دسته‌بندی‌ها</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">دسته‌بندی‌ها</li>
        </ol>
    </nav>
</div>

<!-- Categories Table -->
<div class="content-card">
<div class="content-card-header">
<h5 class="content-card-title">لیست دسته‌بندی‌ها</h5>
</div>
<div class="content-card-body">
<div class="table-responsive">
    <table class="admin-table">
        <thead>
            <tr>
                <th>نام</th>
                <th>توضیحات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>الکترونیک</td>
                <td class="category-description">شامل گوشی‌های هوشمند، لپ‌تاپ‌ها و لوازم جانبی</td>
            </tr>
            <tr>
                <td>مد و پوشاک</td>
                <td class="category-description">لباس‌های مردانه، زنانه و بچگانه</td>
            </tr>
            <tr>
                <td>خانه و آشپزخانه</td>
                <td class="category-description">لوازم خانگی و وسایل آشپزی</td>
            </tr>
            <tr>
                <td>آرایشی و بهداشتی</td>
                <td class="category-description">محصولات مراقبت از پوست و مو</td>
            </tr>
            <tr>
                <td>مواد غذایی</td>
                <td class="category-description">محصولات خوراکی و نوشیدنی‌ها</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>

@endsection