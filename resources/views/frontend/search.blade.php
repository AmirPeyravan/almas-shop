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
    <link rel="stylesheet" href="/css/frontend.css">
</head>
<body>

@include("frontend.header")

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

@include("frontend.footer")

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



