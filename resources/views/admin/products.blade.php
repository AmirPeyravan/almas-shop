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
            <a href="products/add">
                <button class="btn btn-add"><i class="fas fa-plus"></i> افزودن محصول</button>
            </a>
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
                        @foreach($products as $product)
                            <tr>
                                <td>{{@$product->productName}}</td>
                                <td>{{@$product->description}}</td>
                                <td>{{@$product->price}}</td>
                                <td>{{@$product->stock_quantity}}</td>
                                <td><img src="{{ asset('storage/' . $product->thumbnail) }}" class="thumbnail-img" alt="گوشی هوشمند"></td>
                                <td>
                                    <button class="btn btn-edit"><i class="fas fa-edit"></i> ویرایش</button>
                                    <button class="btn btn-delete"><i class="fas fa-trash"></i> حذف</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



@endsection
