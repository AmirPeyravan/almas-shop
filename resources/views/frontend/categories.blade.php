<!-- Categories Section -->
<section class="categories-section">
    <div class="container">
        <h2 id="categories-loves" class="section-title">دسته‌بندی محصولات</h2>
        <div class="categories-wrapper text-center animate delay-1">
            @foreach($categories as $category)
                <button class="category-btn active">
                    <i class="bi bi-phone"></i>
                    {{@$category->name}}
                </button>
            @endforeach
        </div>
    </div>
</section>
