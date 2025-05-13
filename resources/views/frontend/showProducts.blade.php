<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمایش محصول</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #10b981;
            --dark: #1e1e2d;
            --darker: #151521;
            --light: #e0e0e0;
            --card-bg: #252836;
            --accent: #f43f5e;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: var(--darker);
            color: var(--light);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234f46e5' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            z-index: -1;
        }

        .page-header {
            margin-bottom: 20px;
            text-align: center;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .breadcrumb-item {
            font-size: 0.9rem;
        }

        .breadcrumb-item a {
            color: var(--primary);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: var(--text-muted);
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: '>';
            margin: 0 5px;
            color: var(--text-muted);
        }

        .content-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .content-card-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 20px;
            text-align: center;
        }

        .content-card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .content-card-body {
            padding: 30px;
            display: flex;
            gap: 30px;
        }

        .product-image {
            flex: 1;
        }

        .product-image img {
            width: 100%;
            max-width: 300px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .product-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .product-details h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--light);
            margin: 0;
        }

        .product-details p {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin: 0;
        }

        .product-details .category {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--secondary);
            background-color: rgba(16, 185, 129, 0.2);
            padding: 5px 10px;
            border-radius: 12px;
            display: inline-block;
        }

        .product-details .stock {
            font-size: 0.9rem;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 12px;
            display: inline-block;
        }

        .stock-available {
            color: var(--secondary);
            background-color: rgba(16, 185, 129, 0.2);
        }

        .stock-low {
            color: var(--accent);
            background-color: rgba(244, 63, 94, 0.2);
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: auto;
        }

        .btn-add-to-cart {
            background: var(--secondary);
            color: white;
        }

        .btn-add-to-cart:hover {
            background: #0a8f63;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-add-to-cart i {
            margin-left: 8px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .content-card {
            animation: fadeIn 0.6s ease forwards;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .content-card {
                padding: 0 15px;
            }

            .content-card-header {
                padding: 15px;
            }

            .content-card-body {
                flex-direction: column;
                padding: 20px;
            }

            .product-image img {
                max-width: 100%;
            }

            .product-details h2 {
                font-size: 1.5rem;
            }

            .product-details p {
                font-size: 0.9rem;
            }

            .btn {
                font-size: 0.9rem;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
<!-- Page Header -->
<div class="page-header">
    <h1 class="page-title">نمایش محصول</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">خانه</li>
            <li class="breadcrumb-item active">محصولات</li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->productName}}</li>
        </ol>
    </nav>
</div>

<!-- Single Product -->
<div class="content-card">
    <div class="content-card-header">
        <h5 class="content-card-title">جزئیات محصول</h5>
    </div>
    <div class="content-card-body">
        <div class="product-image">
            <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{$product->productName}}">
        </div>
        <div class="product-details">
            <h2>{{$product->productName}}</h2>
            <p>{{$product->description}}</p>
            <span class="category">دسته بندی : {{$product->category_id}}</span>
            <span style="background-color:darkgray;color: black" class="stock stock-available">موجودی({{$product->stock_quantity}})</span>
            <button class="btn btn-add-to-cart"><i class="fa-solid fa-cart-plus"></i> افزودن به سبد خرید</button>
        </div>
    </div>
</div>
</body>
</html>
