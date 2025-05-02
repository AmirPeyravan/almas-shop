@extends('admin.master')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">افزودن محصول</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item"><a href="#">محصولات</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن محصول</li>
            </ol>
        </nav>
    </div>

    <!-- Add Product Form -->
    <div class="content-card">
        <div class="content-card-header">
            <h5 class="content-card-title">فرم افزودن محصول</h5>
        </div>
        <div class="content-card-body">
            <form action="{{ route('products.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="productName">نام محصول</label>
                    <input name="productName" type="text" class="form-control" id="productName" placeholder="نام محصول را وارد کنید" required>
                </div>
                <div class="form-group">
                    <label for="description">توضیحات</label>
                    <textarea name="description" class="form-control" id="description" placeholder="توضیحات محصول را وارد کنید" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">قیمت (تومان)</label>
                    <input name="price" type="number" class="form-control" id="price" placeholder="قیمت محصول را وارد کنید" required>
                </div>
                <div class="form-group">
                    <label for="stock_quantity">موجودی</label>
                    <input name="stock_quantity" type="number" class="form-control" id="stock_quantity" placeholder="تعداد موجودی را وارد کنید" required>
                </div>
                <div class="form-group">
                    <label for="thumbnail">تصویر محصول</label>
                    <input name="thumbnail" type="file" class="form-control" id="thumbnail" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="category">دسته‌بندی</label>
                    <select class="form-control" id="category" required>
                        <option value="" disabled selected>یک دسته‌بندی انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option value="electronics">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button id="btnSubToAddProduct" type="submit" class="btn btn-submit"><i class="fa-solid fa-save"></i> ثبت محصول</button>
            </form>
        </div>
    </div>
@endsection

