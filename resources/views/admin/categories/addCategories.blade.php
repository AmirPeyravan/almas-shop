@extends('admin.master')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">افزودن دسته‌بندی</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item"><a href="#categories">دسته‌بندی‌ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن دسته‌بندی</li>
            </ol>
        </nav>
    </div>

    <!-- Add Category Form -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">فرم افزودن دسته‌بندی جدید</h5>
        </div>
        <div class="content-card-body">
            <div id="formAlert" class="alert alert-custom d-none"></div>

            <form id="addCategoryForm" method="post" action="{{ route('categories.create') }}">
                @csrf
                <div class="mb-4">
                    <label for="categoryName" class="form-label">نام دسته‌بندی</label>
                    <input type="text" class="form-control" id="categoryName" name="name" placeholder="مثال: الکترونیک" required>
                    <div class="invalid-feedback">لطفاً نام دسته‌بندی را وارد کنید.</div>
                </div>
                <div class="mb-4">
                    <label for="categoryDescription" class="form-label">توضیحات</label>
                    <textarea class="form-control form-control-textarea" id="categoryDescription" name="description" placeholder="توضیحات دسته‌بندی (اختیاری)"></textarea>
                </div>
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-custom btn-primary-custom">
                        <i class="bi bi-plus-lg"></i>
                        افزودن دسته‌بندی
                    </button>
                    <button type="button" class="btn btn-custom btn-outline" onclick="document.getElementById('addCategoryForm').reset()">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        بازنشانی
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


@endsection
