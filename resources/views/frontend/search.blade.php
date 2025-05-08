{{--<h2>نتایج برای: "{{ $query }}"</h2>--}}

{{--@if ($products->count())--}}
{{--    <ul>--}}
{{--        @foreach ($products as $product)--}}
{{--            <li>{{ $product->productName }} - {{ $product->price }} تومان</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@else--}}
{{--    <p>هیچ محصولی یافت نشد.</p>--}}
{{--@endif--}}

    <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه محصولات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700;900&display=swap" rel="stylesheet">
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
            --text-muted: #bdcae0;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: var(--darker);
            color: var(--light);
            position: relative;
            overflow-x: hidden;
        }

        /* Products Section */
        .products-section {
            padding: 60px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 40px;
            font-weight: 700;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .product-card {
            position: relative;
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            background: var(--card-bg);
            overflow: hidden;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 240px;
        }

        .product-image {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: var(--light);
        }

        .card-title a {
            text-decoration: none;
            color: inherit;
        }

        .card-title a:hover {
            color: var(--primary);
        }

        .price-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .current-price {
            font-weight: 700;
            font-size: 1.2rem;
            color: white;
        }

        .add-to-cart {
            display: block;
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .add-to-cart i {
            margin-left: 5px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate {
            animation: fadeIn 0.6s ease forwards;
        }

        .delay-1 { animation-delay: 0.1s; }

        /* Responsive */
        @media (max-width: 576px) {
            .product-image-wrapper {
                height: 180px;
            }

            .card-title {
                font-size: 1rem;
            }

            .current-price {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title animate">محصولات</h2>
        <div class="row">
            @if($myProducts->count())
                @foreach ($myProducts as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="product-card animate delay-1">
                            <div class="product-image-wrapper">
                                <img src="{{ asset('storage/' . $product->thumbnail) }}" class="product-image" alt="{{ $product->productName }}">
                            </div>
                            <div class="card-body">
                                <a href="/products/{{ $product->id }}">
                                    <h5 class="card-title">{{ $product->productName }}</h5>
                                </a>
                                <div class="price-wrapper">
                                    <span class="current-price">{{ $product->formatted_price }}</span>
                                </div>
                                <button class="add-to-cart">
                                    افزودن به سبد خرید
                                    <i class="bi bi-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>هیچ محصولی یافت نشد.</p>
            @endif
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



