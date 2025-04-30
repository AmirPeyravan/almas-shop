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
    <a href="categories/add">
        <button type="button" class="btn btn-success">افزودن دسته بندی</button>
    </a>
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
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td class="category-description">{{ $category->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection
