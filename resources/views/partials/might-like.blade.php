<div class="might-like-section">
    <div class="container">
        <h2>Das könnte auch etwas für dich sein...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="product">
                    {{-- <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"> --}}
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">{{ $product->presentPrice() }}</div>
                </a>
            @endforeach

            {{-- <a href="#" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                <div class="might-like-product-name">MacBook Pro</div>
                <div class="might-like-product-price">$2499.99</div>
            </a>
            <a href="#" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                <div class="might-like-product-name">MacBook Pro</div>
                <div class="might-like-product-price">$2499.99</div>
            </a>
            <a href="#" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                <div class="might-like-product-name">MacBook Pro</div>
                <div class="might-like-product-price">$2499.99</div>
            </a>
            <a href="#" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                <div class="might-like-product-name">MacBook Pro</div>
                <div class="might-like-product-price">$2499.99</div>
            </a> --}}

        </div>
    </div>
</div>
