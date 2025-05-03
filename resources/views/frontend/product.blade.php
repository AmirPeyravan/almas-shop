<!-- Products Section -->
<section class="products-section">
    <div class="container">
        <h2 id="product-love" class="section-title">محصولات پرفروش</h2>
        <div class="row">
            <!-- Product -->

            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="product-card animate delay-1">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}" class="product-image" alt="گوشی موبایل">
                        </div>
                        <div class="card-body">
                           <a href="/products/{{$product->id}}">
                               <h5 class="card-title">{{$product->productName}}</h5>
                           </a>
                            <div class="price-wrapper">
                                <span class="current-price">{{$product->formatted_price}}</span>
                            </div>
                            <button class="add-to-cart">
                                افزودن به سبد خرید
                                <i class="bi bi-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-4">
            <a href="/products" class="btn btn-outline-light">مشاهده همه محصولات</a>
        </div>
    </div>
</section>
